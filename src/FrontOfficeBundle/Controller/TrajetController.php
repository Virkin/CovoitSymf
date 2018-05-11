<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Trajet;
use BackOfficeBundle\Form\TrajetType;
use BackOfficeBundle\Repository\TrajetRepository;

class TrajetController extends Controller
{
	function readAction()
	{
		if (! isset($_POST['input_search']))
			$slug = "";
		else
			$slug = $_POST['input_search'];

		if (! isset($_POST['filter']))
			$filter = "";
		else
			$filter = $_POST['filter'];

		if ($filter == "villeDepvilleArr" or $filter == "") {
			$trajet = $this->getDoctrine()
			->getRepository('BackOfficeBundle:Trajet')
			->findAllOrderedByName($slug);
		}
		elseif ($filter == "villeDep") {
			$trajet = $this->getDoctrine()
			->getRepository('BackOfficeBundle:Trajet')
			->findDepOrderedByName($slug);
		}
		elseif ($filter == "villeArr") {
			$trajet = $this->getDoctrine()
			->getRepository('BackOfficeBundle:Trajet')
			->findArrOrderedByName($slug);
		}


		if (!$trajet) {
			$trajet = NULL;
		}

		return $this->render('FrontOfficeBundle:Trajet:read.html.twig', array(
			'trajets' => $trajet,
			'slug'=> $slug
		));
	}
	function showAction($id)
	{
		$trajet = $this->getDoctrine()
		->getRepository('BackOfficeBundle:Trajet')
		->findById($id);
		dump($trajet);

	    if (!$trajet) {
	        $trajet = NULL;
	    }

	    return $this->render('FrontOfficeBundle:Trajet:show.html.twig', array(
	        'trajet' => $trajet,
	    ));
	}
}
