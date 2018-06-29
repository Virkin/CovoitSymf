<?php

namespace BackOfficeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BackOfficeBundle\Entity\Ville;
use BackOfficeBundle\Form\VilleType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class VilleController extends Controller
{
	// affiche la liste des villes
	function readAction()
	{
		// récupère toutes les villes
		$villes = $this->getDoctrine()
		->getRepository('BackOfficeBundle:Ville')
		->findAll();

		if (!$villes) {
			$villes = NULL;
		}

		// renvoie à la vue la liste des villes
		return $this->render('BackOfficeBundle:Ville:read.html.twig', array(
			'villes' => $villes,
		));
	}

	// ajoute une ville
	function addAction(Request $request)
	{
		$ville = new Ville();

		$form = $this->createForm(VilleType::class, $ville);

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
		{
			$em = $this->getDoctrine()->getManager();
			$em->persist($ville);
			$em->flush($ville);
			$ville = $form->getData();
			// redirige vers la liste des villes une fois le formulaire envoyé
			return $this->redirectToRoute('readVille');
		}

		// renvoie à la vue le formulaire
		return $this->render('BackOfficeBundle:Ville:form.html.twig', array(
			'form' => $form->createView(),
		));
	}

	// modifie une ville
	function editAction(Request $request, $id)
	{
		// sélectionne la ville via son id
		$ville = $this->getDoctrine()
		->getRepository('BackOfficeBundle:Ville')
		->find($id);

		// créer le formulaire
		$form = $this->createForm(VilleType::class, $ville);

		// récupère les données du formulaire
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
		{
			$em = $this->getDoctrine()->getManager();
			$em->persist($ville);
			$em->flush($ville);
			$ville = $form->getData();
			// redirige vers la liste des villes une fois le formulaire envoyé
			return $this->redirectToRoute('readVille');
		}

		// transmet les données à la vue
		return $this->render('BackOfficeBundle:Ville:form.html.twig', array(
			'form' => $form->createView(),
		));
	}

	function deleteAction(Request $request, $id)
	{
		// ajoute une confirmation avant la suppression de la ville
		$form = $this->createFormBuilder()
		->add('cancel', ButtonType::class, array('label' => 'Cancel'))
		->add('delete', SubmitType::class, array('label' => 'Delete'))
		->getForm();

		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid())
		{
			try
			{
				$em = $this->getDoctrine()->getManager();
				$ville = $this->getDoctrine()
				->getRepository('BackOfficeBundle:Ville')
				->find($id);
				$em->remove($ville);
				$em->flush($ville);
	        	}
			// affiche un message d'erreur si il est impossible de supprimer la ville
	        	catch(\Exception $e)
			{
				$error = "Impossible de supprimer la ville";
				$description = "Veuillez vérifier si la ville n'est pas associé à un internaute ou à un trajet";
				return $this->render('BackOfficeBundle:Default:error.html.twig', array(
					'error' => $error,
					'description' => $description,
					'route' => 'readVille',
				));
			}
			// redirige vers la liste des ville une fois le formulaire envoyé
			return $this->redirectToRoute('readVille');
		}

		return $this->render('BackOfficeBundle:Ville:delete.html.twig', array(
			'form' => $form->createView(),
		));
	}
}
