<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Internaute;

class StatistiquesController extends Controller
{
	function readAction()
	{
		// récupère les internautes
		$statistiques = $this->getDoctrine()
		->getRepository('BackOfficeBundle:Internaute')
		->findAll();

		$em = $this->container->get('doctrine')->getManager();
		
		// compte le nombre d'internautes
		$qb = $em->createQuery("SELECT count(Internaute.id) FROM BackOfficeBundle:Internaute as Internaute");
		
		// stocke le nombre d'internaute
		$nb_internautes = $qb->getSingleScalarResult();

		// récupère le nombre d'internautes ayant déposé plus de 2 trajets
		$qb = $em->createQuery("SELECT count(trajet.id) AS nb_trajet
		FROM BackOfficeBundle:Trajet as trajet
		GROUP BY trajet.internaute
		HAVING count(trajet.id) >= 2");

		// stocke le le nombre d'internautes ayant déposé plus de 2 trajets
		$nb_big_internautes = count($qb->getResult());

		// récupère le top des villes d'arrivée
		$qb = $em->createQuery("SELECT ville as name, count(tr.id) AS HIDDEN nbTrajet FROM BackOfficeBundle:trajet AS tr JOIN BackOfficeBundle:ville AS ville WITH ville.id=tr.villeArr GROUP BY tr.villeArr ORDER BY nbTrajet DESC");
		
		$topVilleArr = $qb->getResult();

		// récupère le top des villes de départ
		$qb = $em->createQuery("SELECT ville as name, count(tr.id) AS HIDDEN nbTrajet FROM BackOfficeBundle:trajet AS tr JOIN BackOfficeBundle:ville AS ville WITH ville.id=tr.villeDep GROUP BY tr.villeDep ORDER BY nbTrajet DESC");
		
		$topVilleDep = $qb->getResult();

		if (!$statistiques) {
			$nb_internautes = NULL;
		}

		// renvoie les statistiques à la vue read.html.twig
		return $this->render('BackOfficeBundle:Statistiques:read.html.twig', array(
			'nb_internautes' => $nb_internautes,
			'nb_big_internautes' => $nb_big_internautes,
			'topVilleArr' => $topVilleArr,
			'topVilleDep' => $topVilleDep
		));
	}
}
