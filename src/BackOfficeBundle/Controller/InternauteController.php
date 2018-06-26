<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Internaute;
use BackOfficeBundle\Repository\VoitureRepository;
use BackOfficeBundle\Form\InternauteType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class InternauteController extends Controller
{
	function readAction()
	{
		$internautes = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Internaute')->findAll();

	    if (!$internautes) {
	        $internautes = NULL;
	    }

	    return $this->render('BackOfficeBundle:Internaute:read.html.twig', array(
	        'internautes' => $internautes,
	    ));
	}

	function addAction(Request $request)
	{
		$internaute = new Internaute();

        $form = $this->createForm(InternauteType::class, $internaute);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($internaute);
	        $em->flush($internaute);
	        $internaute = $form->getData();
	        return $this->redirectToRoute('readInternaute');
	    }

	    $voitures = $this->getDoctrine()->getRepository('BackOfficeBundle:Voiture')->findVoitureWithMarque();

        return $this->render('BackOfficeBundle:Internaute:form.html.twig', array(
            'form' => $form->createView(),
            'voitures' => $voitures
        ));
	}

	function editAction(Request $request, $id)
	{
		$internaute = $this->getDoctrine()
        ->getRepository('BackOfficeBundle:Internaute')
        ->find($id);

    	$form = $this->createForm(InternauteType::class, $internaute);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
	      	$em = $this->getDoctrine()->getManager();
	        $em->persist($internaute);
	        $em->flush($internaute);
	        $internaute = $form->getData();

	        return $this->redirectToRoute('readInternaute');
	    }

			$voitures = $this->getDoctrine()->getRepository('BackOfficeBundle:Voiture')->findVoitureWithMarque();

        return $this->render('BackOfficeBundle:Internaute:form.html.twig', array(
            'form' => $form->createView(),
						'voitures' => $voitures
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
		        $internaute = $this->getDoctrine()
		        ->getRepository('BackOfficeBundle:Internaute')
		        ->find($id);
		        $em->remove($internaute);
		        $em->flush($internaute);
	        }
	        catch(\Exception $e)
			{
				$error = "Impossible de supprimer l'internaute";
				$description = "Veuillez vérifier si l'internaute n'est pas associé à un trajet";
				return $this->render('BackOfficeBundle:Default:error.html.twig', array(
            		'error' => $error,
            		'description' => $description,
            		'route' => 'readInternaute',
        		));
			}

			return $this->redirectToRoute('readInternaute');

		}
		return $this->render('BackOfficeBundle:Internaute:delete.html.twig', array(
            'form' => $form->createView(),
        ));
	}
}
