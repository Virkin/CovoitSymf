<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Voiture;
use BackOfficeBundle\Entity\Marque;
use BackOfficeBundle\Form\VoitureType;
use BackOfficeBundle\Form\MarqueType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class VoitureController extends Controller
{
	function readAction()
	{	
		$voitures = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Voiture')->findAll();

	    if (!$voitures) {
	        $voitures = NULL;
	    }

	    return $this->render('BackOfficeBundle:Voiture:read.html.twig', array(
	        'voitures' => $voitures,
	    ));
	}

	function addAction(Request $request)
	{
		$voiture = new Voiture();

        $form = $this->createForm(VoitureType::class, $voiture);

        $form->handleRequest($request);
      
        if ($form->isSubmitted() && $form->isValid()) 
        {
	      	$em = $this->getDoctrine()->getManager();
	        $em->persist($voiture);
	        $em->flush($voiture);
	        $voiture = $form->getData();
	    	
	        return $this->redirectToRoute('readVoiture');
	    }

        return $this->render('BackOfficeBundle:Voiture:form.html.twig', array(
            'form' => $form->createView(),
        ));
	}

	function addMarqueAction(Request $request)
	{
		$marque = new Marque();

        $form = $this->createForm(MarqueType::class, $marque);

        $form->handleRequest($request);
      
        if ($form->isSubmitted() && $form->isValid()) 
        {
	      	$em = $this->getDoctrine()->getManager();
	        $em->persist($marque);
	        $em->flush($marque);
	        $voiture = $form->getData();
	    	
	        return $this->redirectToRoute('addVoiture');
	    }

        return $this->render('BackOfficeBundle:Voiture:marque.html.twig', array(
            'form' => $form->createView(),
        ));
	}

	function editAction(Request $request, $id)
	{
		$voiture = $this->getDoctrine()
        ->getRepository('BackOfficeBundle:Voiture')
        ->find($id);

    	$form = $this->createForm(VoitureType::class, $voiture);

        $form->handleRequest($request);
      
        if ($form->isSubmitted() && $form->isValid()) 
        {
	      	$em = $this->getDoctrine()->getManager();
	        $em->persist($voiture);
	        $em->flush($voiture);
	        $voiture = $form->getData();
	    	
	        return $this->redirectToRoute('readVoiture');
	    }

        return $this->render('BackOfficeBundle:Voiture:form.html.twig', array(
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
			$em = $this->getDoctrine()->getManager();
	        $voiture = $this->getDoctrine()
	        ->getRepository('BackOfficeBundle:Voiture')
	        ->find($id);
	        $em->remove($voiture);
	        $em->flush($voiture);

			return $this->redirectToRoute('readVoiture');
		
		}
		return $this->render('BackOfficeBundle:Voiture:delete.html.twig', array(
            'form' => $form->createView(),
        ));
	}
}
