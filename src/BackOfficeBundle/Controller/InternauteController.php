<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
}
