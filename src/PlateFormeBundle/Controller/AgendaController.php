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
     * Creates a new agenda entity.
     *
     */
    public function newAction(Request $request, $start)
    {
        $agenda = new Agenda();
        if ($start == 0) {
            $newTime = new \DateTime();
            $startEvent = $newTime->format('d-m-Y H:i:s');
            $agenda->setStart(new \DateTime($startEvent));
            $endtime = new \DateTime();
            $endEvent = $endtime->format('d-m-Y H:i:s');
            $agenda->setEnd(new \DateTime($endEvent));
        }
        else {
            $agenda->setStart(new \DateTime($start));
            $agenda->setEnd(new \DateTime($start));
        }
        $form = $this->createForm('PlateFormeBundle\Form\AgendaType', $agenda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agenda);
            $em->flush($agenda);

            return $this->redirectToRoute('agenda_show', array('id' => $agenda->getId()));
        }

        return $this->render('@PlateForme/agenda/new.html.twig', array(
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

        return $this->render('@PlateForme/agenda/show.html.twig', array(
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

        return $this->render('@PlateForme/agenda/edit.html.twig', array(
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
