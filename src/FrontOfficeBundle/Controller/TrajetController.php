<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Trajet;
use BackOfficeBundle\Repository\TrajetRepository;

class TrajetController extends Controller
{
	function readAction(Request $id)
	{
		$em = $this->getDoctrine()->getManager();
		$trajets = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Trajet')->list($id);

	    if (!$trajets) {
	        $trajets = NULL;
	    }

	    return $this->render('FrontOfficeBundle:Trajet:read.html.twig', array(
	        'trajets' => $trajets,
	    ));
	}
}
