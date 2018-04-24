<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Ville;

class VilleController extends Controller
{
	function readAction()
	{
		$villes = $this->getDoctrine()
	    ->getRepository('BackOfficeBundle:Ville')
	    ->findAll();

	    if (!$villes) {
	        throw $this->createNotFoundException(
	                'Aucune ville trouvé'
	        );
	    }

	    return $this->render('BackOfficeBundle:Ville:read.html.twig', array(
	        'villes' => $villes,
	    ));
	}

	function addAction(Request $request)
	{
		$ville = new Ville();

        $form = $this->createFormBuilder($ville)
            ->add('ville', TextType::class)
            ->add('cp', NumberType::class)
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
	        echo("test");
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($ville);
	        $em->flush($ville);
	        $ville = $form->getData();
	        return $this->redirectToRoute('readVille');
	    }

        return $this->render('BackOfficeBundle:Ville:add.html.twig', array(
            'form' => $form->createView(),
        ));
	}
}
