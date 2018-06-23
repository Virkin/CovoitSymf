<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Internaute;
use BackOfficeBundle\Entity\Trajet;

class InscriptionController extends Controller
{
	function readAction()
	{
		$trajets = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Trajet')->findByPlace();

	    if (!$trajets) {
	        $trajets = NULL;
	    }

	    return $this->render('BackOfficeBundle:Inscription:read.html.twig', array(
	        'trajets' => $trajets,
	    ));
	}

}
