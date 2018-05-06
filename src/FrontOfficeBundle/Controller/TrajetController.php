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
	function readAction()
	{
		if (! isset($_POST['input_search']))
			$slug = "";
		else
			$slug = $_POST['input_search'];

		$trajet = $this->getDoctrine()
		->getRepository('BackOfficeBundle:Trajet')
		->findAllOrderedByName($slug);


		if (!$trajet) {
			$trajet = NULL;
		}

		return $this->render('FrontOfficeBundle:Trajet:read.html.twig', array(
			'trajets' => $trajet,
			'slug'=> $slug
		));
	}
}
