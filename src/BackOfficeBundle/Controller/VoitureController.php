<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class VoitureController extends Controller
{
	
	/**
     * @Route("/show", name="show")
     */
	public function show()
	{	
		$voitures = $this->getDoctrine()
	    ->getRepository('BackOfficeBundle:Voiture')
	    ->findAll();

	    if (!$voitures) {
	        throw $this->createNotFoundException(
	                'Aucune voiture trouvé'
	        );
	    }

	    return $this->render('BackOfficeBundle:Table:voiture.html.twig', array(
	        'voitures' => $voitures,
	    ));
	}
}
