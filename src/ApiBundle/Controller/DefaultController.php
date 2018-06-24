<?php

namespace ApiBundle\Controller;
header("Access-Control-Allow-Origin: *");

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use BackOfficeBundle\Repository\TrajetRepository;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ApiBundle:Default:index.html.twig');
    }

    public function listTrajetsAction(Request $request)
    {
      // recupere les arguments passes par url
      $filter = $request->query->get('filter');
      $search = $request->query->get('search');
      $id = $request->query->get('id');

      // si id existe, retourne le trajet
      if ($id != "" or $id != null) {
        $trajets = $this->getDoctrine()
        ->getRepository('BackOfficeBundle:Trajet')
        ->findById($id);
      }
      else {
        // si pas de filter ou deparr, retourne tous les trajets
        if ($filter == null or $filter == "" or $filter == "deparr" ) {
          $trajets = $this->getDoctrine()
          ->getRepository('BackOfficeBundle:Trajet')
          ->findAllOrderedByName($search);
        }
        // si filtre dep, retourne tous les trajets dep
        elseif ($filter == "dep") {
          $trajets = $this->getDoctrine()
          ->getRepository('BackOfficeBundle:Trajet')
          ->findDepOrderedByName($search);
        }
        // si filtre arr, retourne tous les trajets arr
        elseif ($filter == "arr") {
          $trajets = $this->getDoctrine()
          ->getRepository('BackOfficeBundle:Trajet')
          ->findArrOrderedByName($search);
        }
      }

      return new JsonResponse([
            $trajets
        ]);
    }
}
