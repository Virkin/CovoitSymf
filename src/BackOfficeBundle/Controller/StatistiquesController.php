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
			$qb = $em->createQueryBuilder();
			$qb->select('count(Internaute.id)');
			$qb->from('BackOfficeBundle:Internaute','Internaute');
			$nb_internautes = $qb->getQuery()->getSingleScalarResult();

	    if (!$statistiques) {
	        throw $this->createNotFoundException(
	                'Aucune statistiques trouvées'
	        );
	    }

	    return $this->render('BackOfficeBundle:Statistiques:read.html.twig', array(
	        'nb_internautes' => $nb_internautes,
	    ));
	}
}
