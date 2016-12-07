<?php
/**
 * Created by PhpStorm.
 * User: juliengrima
 * Date: 07/12/2016
 * Time: 10:23
 */

namespace PlateFormeBundle\Controller;
use PlateFormeBundle\Entity\Agenda;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CalendarControler extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $agendas = $em->getRepository('PlateFormeBundle:Agenda')->findAll();

        $json = file_get_contents(dirname(__FILE__) . '@PlateFormeBundle/Resources/views/fullcalendar/views/json/events.json');
        $input_arrays = json_decode($json, true);

        return $this->render('@PlateForme/fullcalendar/views/agenda-views.html.twig', array(
            'json' => $input_arrays,
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

        return $this->render('@PlateForme/agenda/new.html.twig', array(
            'agenda' => $agenda,
            'form' => $form->createView(),
        ));
    }

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
}