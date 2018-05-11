<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Internaute;
use BackOfficeBundle\Repository\VoitureRepository;
use BackOfficeBundle\Form\InternauteType;

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
	        $em->flush($intrnaute);
	        $internuate = $form->getData();
	        return $this->redirectToRoute('readInternaute');
	    }

	    $voitures = $this->getDoctrine()->getRepository('BackOfficeBundle:Voiture')->findVoitureWithMarque();

	    dump($voitures);


        return $this->render('BackOfficeBundle:Internaute:form.html.twig', array(
            'form' => $form->createView(),
            'voitures' => $voitures
        ));
	}
}
