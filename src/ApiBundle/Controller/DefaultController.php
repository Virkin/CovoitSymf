<?php

namespace ApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use BackOfficeBundle\Repository\TrajetRepository;
use BackOfficeBundle\Entity\Internaute;
use BackOfficeBundle\Entity\Marque;
use BackOfficeBundle\Entity\Trajet;
use BackOfficeBundle\Entity\Ville;
use BackOfficeBundle\Entity\Voiture;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApiBundle:Default:index.html.twig');
    }

    public function listTrajetsAction(Request $request)
    {
      $trajets = $this->getDoctrine()
      ->getRepository('BackOfficeBundle:Trajet')
      ->findTrajetsRest();

      return new JsonResponse([
            $trajets
        ]);
    }
}
