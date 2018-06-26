<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Ville;
use BackOfficeBundle\Form\VilleType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class VilleController extends Controller
{
	function readAction()
	{
		$villes = $this->getDoctrine()
	    ->getRepository('BackOfficeBundle:Ville')
	    ->findAll();

	   	if (!$villes) {
	        $villes = NULL;
	    }

	    return $this->render('BackOfficeBundle:Ville:read.html.twig', array(
	        'villes' => $villes,
	    ));
	}

	function addAction(Request $request)
	{
		$ville = new Ville();

        $form = $this->createForm(VilleType::class, $ville);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($ville);
	        $em->flush($ville);
	        $ville = $form->getData();
	        return $this->redirectToRoute('readVille');
	    }

        return $this->render('BackOfficeBundle:Ville:form.html.twig', array(
            'form' => $form->createView(),
        ));
	}

	function editAction(Request $request, $id)
	{
		$ville = $this->getDoctrine()
        ->getRepository('BackOfficeBundle:Ville')
        ->find($id);

    	$form = $this->createForm(VilleType::class, $ville);

        $form->handleRequest($request);
      
        if ($form->isSubmitted() && $form->isValid()) 
        {
	      	$em = $this->getDoctrine()->getManager();
	        $em->persist($ville);
	        $em->flush($ville);
	        $ville = $form->getData();
	    	
	        return $this->redirectToRoute('readVille');
	    }

        return $this->render('BackOfficeBundle:Ville:form.html.twig', array(
            'form' => $form->createView(),
        ));
	}

	function deleteAction(Request $request, $id)
	{
		$form = $this->createFormBuilder()
            ->add('cancel', ButtonType::class, array('label' => 'Cancel'))
            ->add('delete', SubmitType::class, array('label' => 'Delete'))
            ->getForm();

        $form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) 
        {
			try
			{
			$em = $this->getDoctrine()->getManager();
	        $ville = $this->getDoctrine()
	        ->getRepository('BackOfficeBundle:Ville')
	        ->find($id);
	        $em->remove($ville);
	        $em->flush($ville);
	        }
	        catch(\Exception $e)
			{
				$error = "Impossible de supprimer la ville";
				$description = "Veuillez vérifier si la ville n'est pas associé à un internaute ou à un trajet";
				return $this->render('BackOfficeBundle:Default:error.html.twig', array(
            		'error' => $error,
            		'description' => $description,
            		'route' => 'readVille',
        		));
			}

			return $this->redirectToRoute('readVille');
		
		}
		return $this->render('BackOfficeBundle:Ville:delete.html.twig', array(
            'form' => $form->createView(),
        ));
	}
}
