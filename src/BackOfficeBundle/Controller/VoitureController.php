<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Voiture;

class VoitureController extends Controller
{
	function readAction()
	{	
		$voitures = $this->getDoctrine()
	    ->getRepository('BackOfficeBundle:Voiture')
	    ->findAll();

	    if (!$voitures) {
	        throw $this->createNotFoundException(
	                'Aucune voiture trouvé'
	        );
	    }

	    return $this->render('BackOfficeBundle:Voiture:read.html.twig', array(
	        'voitures' => $voitures,
	    ));
	}

	function addAction(Request $request)
	{
		$voiture = new Voiture();

        $form = $this->createFormBuilder($voiture)
            ->add('marque', TextType::class)
            ->add('modele', TextType::class)
            ->add('nbPlaces', NumberType::class)
            ->add('save', SubmitType::class, array('label' => 'Save'))
            ->getForm();

        $form->handleRequest($request);
      
        if ($form->isSubmitted() && $form->isValid()) 
        {
	        echo("test");
	        $em = $this->getDoctrine()->getManager();
	        $em->persist($voiture);
	        $em->flush($voiture);
	        $voiture = $form->getData();
	        return $this->redirectToRoute('readVoiture');
	    }

        return $this->render('BackOfficeBundle:Voiture:add.html.twig', array(
            'form' => $form->createView(),
        ));
	}
}
