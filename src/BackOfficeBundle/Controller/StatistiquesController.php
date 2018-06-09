<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Internaute;

class StatistiquesController extends Controller
{
	function readAction()
	{
		$statistiques = $this->getDoctrine()
	    ->getRepository('BackOfficeBundle:Internaute')
	    ->findAll();

		$em = $this->container->get('doctrine')->getManager();
		
		$qb = $em->createQuery("SELECT count(Internaute.id) FROM BackOfficeBundle:Internaute as Internaute");
		
		$nb_internautes = $qb->getSingleScalarResult();

		$qb = $em->createQuery("SELECT count(trajet.id) AS nb_trajet
		FROM BackOfficeBundle:Trajet as trajet
		GROUP BY trajet.internaute
		HAVING count(trajet.id) >= 2");

		$nb_big_internautes = count($qb->getResult());

		$qb = $em->createQuery("SELECT ville as name, count(tr.id) AS HIDDEN nbTrajet FROM BackOfficeBundle:trajet AS tr JOIN BackOfficeBundle:ville AS ville WITH ville.id=tr.villeArr GROUP BY tr.villeArr ORDER BY nbTrajet DESC");
		
		$topVilleArr = $qb->getResult();
		dump($topVilleArr);

		$qb = $em->createQuery("SELECT ville as name, count(tr.id) AS HIDDEN nbTrajet FROM BackOfficeBundle:trajet AS tr JOIN BackOfficeBundle:ville AS ville WITH ville.id=tr.villeDep GROUP BY tr.villeDep ORDER BY nbTrajet DESC");
		
		$topVilleDep = $qb->getResult();
		dump($topVilleDep);

	    if (!$statistiques) {
	        $nb_internautes = NULL;
	    }

	    return $this->render('BackOfficeBundle:Statistiques:read.html.twig', array(
	        'nb_internautes' => $nb_internautes,
	        'nb_big_internautes' => $nb_big_internautes,
	        'topVilleArr' => $topVilleArr,
	        'topVilleDep' => $topVilleDep
	    ));
	}
}
