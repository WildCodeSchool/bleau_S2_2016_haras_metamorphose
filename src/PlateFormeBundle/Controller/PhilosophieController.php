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
    /**
     * Lists all philosophie entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $philosophies = $em->getRepository('PlateFormeBundle:Philosophie')->findAll();

        return $this->render('@PlateForme/Default/index.html.twig', array(
            'philosophies' => $philosophies,
        ));
    }

    /**
     * Creates a new philosophie entity.
     *
     */
    public function newAction(Request $request)
    {
        $philosophie = new Philosophie();
        $form = $this->createForm('PlateFormeBundle\Form\PhilosophieType', $philosophie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($philosophie);
            $em->flush($philosophie);

            return $this->redirectToRoute('philosophie_show', array('id' => $philosophie->getId()));
        }

        return $this->render('@PlateForme/philosophie/new.html.twig', array(
            'philosophie' => $philosophie,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a philosophie entity.
     *
     */
    public function showAction(Philosophie $philosophie)
    {
        $deleteForm = $this->createDeleteForm($philosophie);

        return $this->render('@PlateForme/philosophie/show.html.twig', array(
            'philosophie' => $philosophie,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing philosophie entity.
     *
     */
    public function editAction(Request $request, Philosophie $philosophie)
    {
        $deleteForm = $this->createDeleteForm($philosophie);
        $editForm = $this->createForm('PlateFormeBundle\Form\PhilosophieType', $philosophie);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('philosophie_edit', array('id' => $philosophie->getId()));
        }

        return $this->render('@PlateForme/philosophie/edit.html.twig', array(
            'philosophie' => $philosophie,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a philosophie entity.
     *
     */
    public function deleteAction(Request $request, Philosophie $philosophie)
    {
        $form = $this->createDeleteForm($philosophie);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($philosophie);
            $em->flush($philosophie);
        }

        return $this->redirectToRoute('philosophie_index');
    }

    /**
     * Creates a form to delete a philosophie entity.
     *
     * @param Philosophie $philosophie The philosophie entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Philosophie $philosophie)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('philosophie_delete', array('id' => $philosophie->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
