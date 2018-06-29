<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Inscription;
use BackOfficeBundle\Entity\Internaute;
use BackOfficeBundle\Entity\Trajet;
use BackOfficeBundle\Form\InscriptionType;
use BackOfficeBundle\Repository\InscriptionRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class InscriptionController extends Controller
{
	// affiche les trajets avec le nombre de places restantes
	function readAction()
	{
		// sélectionne les trajets
		$trajets = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Trajet')->findByPlace();

		$nbPassagers = array();

		for($i = 0; $i < count($trajets) ; $i++)
		{
			// compte le nombre de passager
			array_push($nbPassagers, $this->getDoctrine()->getManager()
			->getRepository('BackOfficeBundle:Inscription')->countPassager($trajets[$i]["id"])[0]["nbPassager"]);
		}

		if (!$trajets) {
			$trajets = NULL;
		}

		// revoie la liste des trajets et le nombre de passager
		return $this->render('BackOfficeBundle:Inscription:read.html.twig', array(
			'trajets' => $trajets,
			'nbPassagers' => $nbPassagers
		));
	}

	// affiche la liste des participants d'un trajet via son id
	function participantAction($id)
	{
		// sélectionne le conducteur du trajet
		$conducteur = $this->getDoctrine()
		->getRepository('BackOfficeBundle:Trajet')
		->findById($id);

		// récupère les passagers du trajet
		$participants = $this->getDoctrine()
		->getRepository('BackOfficeBundle:Inscription')
		->findPassagers($id);

		$trajet = $this->getDoctrine()
		->getRepository('BackOfficeBundle:Trajet')
		->find($id);

		// calcule le nombre de place libre pour le trajet
		$nbFreeUser = $this->getDoctrine()->getRepository('BackOfficeBundle:Internaute')
		->findInternauteNotInTrajet($id,$trajet->getInternaute())
		->select('count(user)')
		->getQuery()
		->getSingleScalarResult();
										  
		if (!$participants) {
			$participants = NULL;
		}

		// renvoie à la vue le conducteur, les participants et le nombre de place libre
		return $this->render('BackOfficeBundle:Inscription:participants.html.twig', array(
			'conducteur' => $conducteur,
			'participants' => $participants,
			'nbFreeUser' => $nbFreeUser,
		));
	}

	// affiche le formulaire d'ajout d'un passager
	public function addPassagerAction(Request $request, $id)
	{
		$passager = new Inscription();

		$trajet = $this->getDoctrine()
		->getRepository('BackOfficeBundle:Trajet')
		->find($id);

		// création du formulaire d'ajout d'un passager
		$form = $this->createForm(InscriptionType::class, $passager, array('idTrajet'=>$id,'idConducteur'=>$trajet->getInternaute()));

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
		{
			$em = $this->getDoctrine()->getManager();
			$passager->setTrajet($trajet);
			$em->persist($passager);
			$em->flush($passager);
			$passager = $form->getData();
			// redirige vers la liste des paticipants
			return $this->redirectToRoute('participant',array('id' => $id));
		}

		return $this->render('BackOfficeBundle:Inscription:addPassager.html.twig', array(
			'form' => $form->createView(),
			'id' => $id,
		));
	}

	// supprime un passager
	public function deletePassagerAction(request $request, $idTrajet, $idPassager)
	{
		// formulaire de confirmation
		$form = $this->createFormBuilder()
		->add('cancel', ButtonType::class, array('label' => 'Cancel'))
		->add('delete', SubmitType::class, array('label' => 'Delete'))
		->getForm();

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
		{
			$em = $this->getDoctrine()->getManager();
			$inscription = $this->getDoctrine()
	        	->getRepository('BackOfficeBundle:Inscription')
	        	->findPassager($idTrajet,$idPassager);
	        	$em->remove($inscription[0]);
	        	$em->flush($inscription[0]);
			// redirige vers la liste des participants
			return $this->redirectToRoute('participant',array('id' => $idTrajet));

		}
		return $this->render('BackOfficeBundle:Inscription:deletePassager.html.twig', array(
			'form' => $form->createView(),
			'id' => $idTrajet,
		));
	}
}
