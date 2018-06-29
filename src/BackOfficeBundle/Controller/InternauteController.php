<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Internaute;
use BackOfficeBundle\Repository\VoitureRepository;
use BackOfficeBundle\Form\InternauteType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class InternauteController extends Controller
{
	// affiche la liste des internautes
	function readAction()
	{
		// récupère tous les internautes
		$internautes = $this->getDoctrine()->getManager()->getRepository('BackOfficeBundle:Internaute')->findAll();

		if (!$internautes) {
	        	$internautes = NULL;
		}
		// transmet la liste des internautes à la vue read.html.twig
		return $this->render('BackOfficeBundle:Internaute:read.html.twig', array(
	        	'internautes' => $internautes,
		));
	}

	// ajoute un internaute avec un formulaire
	function addAction(Request $request)
	{
		$internaute = new Internaute();

		// création formulaire Internaute
		$form = $this->createForm(InternauteType::class, $internaute);

		// récupération des données du formulaire
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
		{
			$em = $this->getDoctrine()->getManager();
			$em->persist($internaute);
			$em->flush($internaute);
			$internaute = $form->getData();
			// redirection vers la liste des internautes une fois le formulaire envoyé
			return $this->redirectToRoute('readInternaute');
		}

		// sélectionne uniquement les voitures associées à une marque
		$voitures = $this->getDoctrine()->getRepository('BackOfficeBundle:Voiture')->findVoitureWithMarque();

		// transmet le formulaire et les voitures associées à une marque à la vue form.html.twig
		return $this->render('BackOfficeBundle:Internaute:form.html.twig', array(
			'form' => $form->createView(),
			'voitures' => $voitures
		));
	}

	// modifie un iternaute avec un formulaire
	function editAction(Request $request, $id)
	{
		// sélectionne l'internaute via son id
		$internaute = $this->getDoctrine()
		->getRepository('BackOfficeBundle:Internaute')
		->find($id);

		// création formulaire Internaute
		$form = $this->createForm(InternauteType::class, $internaute);

		// récupération des données du formulaire
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
		{
			$em = $this->getDoctrine()->getManager();
			$em->persist($internaute);
			$em->flush($internaute);
			$internaute = $form->getData();
			// redirection vers la liste des internautes une fois le formulaire envoyé
			return $this->redirectToRoute('readInternaute');
		}

		// sélectionne uniquement les voitures associées à une marque
		$voitures = $this->getDoctrine()->getRepository('BackOfficeBundle:Voiture')->findVoitureWithMarque();

		// transmet le formulaire et les voitures associées à une marque à la vue form.html.twig
		return $this->render('BackOfficeBundle:Internaute:form.html.twig', array(
			'form' => $form->createView(),
			'voitures' => $voitures
		));
	}

	function deleteAction(Request $request, $id)
	{
		// ajout d'une confirmation avant de supprimer l'internaute
		$form = $this->createFormBuilder()
		->add('cancel', ButtonType::class, array('label' => 'Cancel'))
		->add('delete', SubmitType::class, array('label' => 'Delete'))
		->getForm();

		// récupération des données du formulaires
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
		{
			try
			{
				$em = $this->getDoctrine()->getManager();
				$internaute = $this->getDoctrine()
				->getRepository('BackOfficeBundle:Internaute')
				->find($id);
				$em->remove($internaute);
				$em->flush($internaute);
			}
			// affiche un message d'erreur si il est impossible de supprimer l'internaute
			catch(\Exception $e)
			{
				$error = "Impossible de supprimer l'internaute";
				$description = "Veuillez vérifier si l'internaute n'est pas associé à un trajet";
				return $this->render('BackOfficeBundle:Default:error.html.twig', array(
					'error' => $error,
					'description' => $description,
					'route' => 'readInternaute',
				));
			}
			return $this->redirectToRoute('readInternaute');
		}
		return $this->render('BackOfficeBundle:Internaute:delete.html.twig', array(
			'form' => $form->createView(),
		));
	}
}
