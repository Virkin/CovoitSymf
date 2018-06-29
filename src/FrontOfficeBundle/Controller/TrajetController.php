<?php

namespace FrontOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Trajet;
use BackOfficeBundle\Form\TrajetType;
use BackOfficeBundle\Repository\TrajetRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;

class TrajetController extends Controller
{
	// affiche la liste des trajets suiant les paramètres de la recherche
	function readAction()
	{
		// récupération des valeurs du formulaire de recherche
		if (! isset($_POST['input_search']))
			$slug = "";
		else
			$slug = $_POST['input_search'];

		if (! isset($_POST['filter']))
			$filter = "";
		else
			$filter = $_POST['filter'];

		if ($filter == "villeDepvilleArr" ) {
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
		else
		{
			$trajet = $this->getDoctrine()
			->getRepository('BackOfficeBundle:Trajet')
			->findAll();
		}


		if (!$trajet) {
			$trajet = NULL;
		}

		return $this->render('FrontOfficeBundle:Trajet:read.html.twig', array(
			'trajets' => $trajet
		));
	}
	// affiche le détail d'un trajet via son id
	function showAction($id)
	{
		$trajet = $this->getDoctrine()
		->getRepository('BackOfficeBundle:Trajet')
		->findById($id);

	    if (!$trajet) {
	        $trajet = NULL;
	    }

	    return $this->render('FrontOfficeBundle:Trajet:show.html.twig', array(
	        'trajet' => $trajet,
	    ));
	}
	// ajout d'un trajet
	function addAction(Request $request)
	{
		$trajet = new Trajet();

        $form = $this->createForm(TrajetType::class, $trajet);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
	        $em = $this->getDoctrine()->getManager();
	        $trajet->setNbKm(0);
	        $em->persist($trajet);
	        $em->flush($trajet);
	        $trajet = $form->getData();
					// redirige vers la fonction getDistance permettant de calculer la distance entre deux villes
	        return $this->redirectToRoute('getDistance',array("id" => $trajet->getId()));
	    }

        return $this->render('FrontOfficeBundle:Trajet:form.html.twig', array(
            'form' => $form->createView(),
        ));
	}
	// modification du trajet
	function editAction(Request $request, $id)
	{
		$trajet = $this->getDoctrine()
        ->getRepository('BackOfficeBundle:Trajet')
        ->find($id);

    	$form = $this->createForm(TrajetType::class, $trajet);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
	      	$em = $this->getDoctrine()->getManager();
	      	$trajet->setNbKm(0);
	        $em->persist($trajet);
	        $em->flush($trajet);
	        $trajet = $form->getData();
					// redirige vers la fonction getDistance permettant de calculer la distance entre deux villes
	        return $this->redirectToRoute('getDistance',array("id" => $trajet->getId()));
	    }

        return $this->render('FrontOfficeBundle:Trajet:form.html.twig', array(
            'form' => $form->createView(),
        ));
	}
	function deleteAction(Request $request, $id)
	{
		// confirmation de la suppression
		$form = $this->createFormBuilder()
            ->add('cancel', ButtonType::class, array('label' => 'Cancel'))
            ->add('delete', SubmitType::class, array('label' => 'Delete'))
            ->getForm();

        $form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
        {
			$em = $this->getDoctrine()->getManager();

			$inscriptionTrajet = $this->getDoctrine()
			->getRepository('BackOfficeBundle:Inscription')
			->findByTrajet($id);

			// suppression des inscriptions lier au trajet
			for($i=0; $i < count($inscriptionTrajet); $i++)
			{
				$em->remove($inscriptionTrajet[$i]);
	        	$em->flush($inscriptionTrajet[$i]);
			}

			$trajet = $this->getDoctrine()
	        ->getRepository('BackOfficeBundle:Trajet')
	        ->find($id);

	        $em->remove($trajet);
	        $em->flush($trajet);

			return $this->redirectToRoute('readTrajet');

		}
		return $this->render('FrontOfficeBundle:Trajet:delete.html.twig', array(
            'form' => $form->createView(),
        ));
	}

	// effectue une requête vers l'api google pour avoir la distance en km entre le deux villes
	// si pas de connexion l'utilisateur saise manuellement la distance
	function getDistanceAction(Request $request, $id)
	{
		$trajet = $this->getDoctrine()
        ->getRepository('BackOfficeBundle:Trajet')
        ->find($id);

		$form = $this->createFormBuilder()
			->add('nbKm',IntegerType::class, array('attr' => array('min' => 0)))
			->add('cancel', ButtonType::class, array('label' => 'Cancel'))
			->add('save', SubmitType::class, array('label' => 'Save'))
			->getForm();

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
        {
			$distance = $form->get('nbKm')->getData();
		}
		else
		{
			$key="AIzaSyCWsXEhKOGoPqqiLBopZ-DEDRm-DDJf-QA";

			$origin = $trajet->getVilleDep();
			$origin = substr($origin,0, strpos($origin,'(') - 1);
			$origin = str_replace(' ', '+', $origin);

			$destination = $trajet->getVilleArr();
			$destination = substr($destination,0, strpos($destination,'(') - 1);
			$destination = str_replace(' ', '+', $destination);
			// url de l'api google avec la ville de départ et d'arrivée
			$url = "https://maps.googleapis.com/maps/api/distancematrix/json?origins=".$origin."&destinations=".$destination."&key=".$key;

			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$resp = curl_exec($ch);

			$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

			if ($httpCode == 200)
			{
				// récuprération de la réponse en json
				$resp = json_decode($resp, true);
			}
			else
			{
				return $this->render('FrontOfficeBundle:Trajet:distance.html.twig', array(
		            'form' => $form->createView(),
		            'origin' => $origin,
		            'destination' => $destination,
		        ));
			}

			curl_close($ch);

			if ($resp["status"] == "OK" && $resp["rows"][0]["elements"][0]["status"] == "OK")
			{
				// récupération de la distance
				$distance = (int) round($resp["rows"][0]["elements"][0]["distance"]["value"]/1000);
			}
			else
			{
				return $this->render('FrontOfficeBundle:Trajet:distance.html.twig', array(
		            'form' => $form->createView(),
		            'origin' => $origin,
		            'destination' => $destination,
		        ));
			}
		}


		$em = $this->getDoctrine()->getManager();

		$trajet->setNbKm($distance);

		$em->persist($trajet);
	    $em->flush($trajet);

		return $this->redirectToRoute('readTrajet');
	}
}
