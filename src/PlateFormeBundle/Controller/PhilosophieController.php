<?php

namespace PlateFormeBundle\Controller;

use PlateFormeBundle\Entity\Philosophie;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Philosophie controller.
 *
 */
class PhilosophieController extends Controller
{
//    /**
//     * Lists all philosophie entities.
//     *
//     */
//    public function indexAction()
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $philosophies = $em->getRepository('PlateFormeBundle:Philosophie')->findAll();
//
//            return $this->render('@PlateForme/philosophie/show.html.twig', array(
//                'philosophies' => $philosophies,
//            ));
//    }
//
//    /**
//     * Creates a new philosophie entity.
//     *
//     */
//    public function newAction(Request $request)
//    {
//        $philosophie = new Philosophie();
//        $form = $this->createForm('PlateFormeBundle\Form\PhilosophieType', $philosophie);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($philosophie);
//            $em->flush($philosophie);
//
//            return $this->redirectToRoute('philosophie_show', array('id' => $philosophie->getId()));
//        }
//
//        return $this->render('@PlateForme/philosophie/new.html.twig', array(
//            'philosophie' => $philosophie,
//            'form' => $form->createView(),
//        ));
//    }

    /**
     * Finds and displays a philosophie entity.
     *
     */
    public function showAction()
    {

        // Création d'un nouvel objet Philosophie en cas de BdD vide
        // Règle de gestion, un seul élément Philosophie dans la BdD,
        // pas de possibilité d'ajouter un nouvel élément.
        $em = $this->getDoctrine()->getManager();
        // Variable sans S parce que unique
        $philosophie = $em->getRepository('PlateFormeBundle:Philosophie')->findAll();

        if (empty($philosophie)) {
            $philosophie = new Philosophie();
            $philosophie->setTexte('Bonjour, merci de mettre à jour votre page philosophie');
            $em->persist($philosophie);
            $em->flush();
        }

        return $this->render('@PlateForme/philosophie/show.html.twig', array(
            'philosophie' => $philosophie,
        ));
    }

    /**
     * Displays a form to edit an existing philosophie entity.
     *
     */
    public function editAction(Request $request, Philosophie $philosophie)
    {
        $editForm = $this->createForm('PlateFormeBundle\Form\PhilosophieType', $philosophie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('philosophie_show');
        }

        return $this->render('@PlateForme/philosophie/edit.html.twig', array(
            'philosophie' => $philosophie,
            'edit_form' => $editForm->createView(),
        ));
    }

}
