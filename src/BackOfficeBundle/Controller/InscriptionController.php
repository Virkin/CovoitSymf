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
	function readAction()
	{
		$trajets = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Trajet')->findByPlace();

	    if (!$trajets) {
	        $trajets = NULL;
	    }

	    return $this->render('BackOfficeBundle:Inscription:read.html.twig', array(
	        'trajets' => $trajets,
	    ));
	}

	function participantAction($id)
	{
		$conducteur = $this->getDoctrine()
		->getRepository('BackOfficeBundle:Trajet')
		->findById($id);

		$participants = $this->getDoctrine()
		->getRepository('BackOfficeBundle:Inscription')
		->findPassagers($id);

		if (!$participants) {
	        $participants = NULL;
	    }

		return $this->render('BackOfficeBundle:Inscription:participants.html.twig', array(
	        'conducteur' => $conducteur,
	        'participants' => $participants,
	    ));
	}

	public function addPassagerAction(Request $request, $id)
	{
		$passager = new Inscription();

	 	$trajet = $this->getDoctrine()
			->getRepository('BackOfficeBundle:Trajet')
			->find($id);

        $form = $this->createForm(InscriptionType::class, $passager, array('id'=>$trajet->getInternaute()));

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
	        $em = $this->getDoctrine()->getManager();

	        $passager->setTrajet($trajet);
	        $em->persist($passager);
	        $em->flush($passager);
	        $passager = $form->getData();
	        return $this->redirectToRoute('participant',array('id' => $id));
	    }

        return $this->render('BackOfficeBundle:Inscription:addPassager.html.twig', array(
            'form' => $form->createView(),
            'id' => $id,
        ));
	}

	public function deletePassagerAction(request $request, $idTrajet, $idPassager)
	{
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
	        ->findPassager($idTrajet,$idPassager);;
	        $em->remove($inscription[0]);
	        $em->flush($inscription[0]);

			return $this->redirectToRoute('participant',array('id' => $idTrajet));

		}
		return $this->render('BackOfficeBundle:Inscription:deletePassager.html.twig', array(
            'form' => $form->createView(),
            'id' => $idTrajet,
        ));
	}

}
