<?php

namespace PlateFormeBundle\Controller;

use PlateFormeBundle\Entity\Agenda;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Agenda controller.
 *
 */
class AgendaController extends Controller
{
    /**
     * Lists all agenda entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agendas = $em->getRepository('PlateFormeBundle:Agenda')->findAll();

        return $this->render('agenda/index.html.twig', array(
            'agendas' => $agendas,
        ));
    }

    /**
     * Creates a new agenda entity.
     *
     */
    public function newAction(Request $request)
    {
        $agenda = new Agenda();
        $form = $this->createForm('PlateFormeBundle\Form\AgendaType', $agenda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agenda);
            $em->flush($agenda);

            return $this->redirectToRoute('agenda_show', array('id' => $agenda->getId()));
        }

        return $this->render('agenda/new.html.twig', array(
            'agenda' => $agenda,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a agenda entity.
     *
     */
    public function showAction(Agenda $agenda)
    {
        $deleteForm = $this->createDeleteForm($agenda);

        return $this->render('agenda/show.html.twig', array(
            'agenda' => $agenda,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing agenda entity.
     *
     */
    public function editAction(Request $request, Agenda $agenda)
    {
        $deleteForm = $this->createDeleteForm($agenda);
        $editForm = $this->createForm('PlateFormeBundle\Form\AgendaType', $agenda);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('agenda_edit', array('id' => $agenda->getId()));
        }

        return $this->render('agenda/edit.html.twig', array(
            'agenda' => $agenda,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a agenda entity.
     *
     */
    public function deleteAction(Request $request, Agenda $agenda)
    {
        $form = $this->createDeleteForm($agenda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($agenda);
            $em->flush($agenda);
        }

        return $this->redirectToRoute('agenda_index');
    }

    /**
     * Creates a form to delete a agenda entity.
     *
     * @param Agenda $agenda The agenda entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Agenda $agenda)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('agenda_delete', array('id' => $agenda->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
