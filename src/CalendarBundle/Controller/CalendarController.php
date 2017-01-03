<?php

namespace CalendarBundle\Controller;

use CalendarBundle\Entity\Agenda;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Agenda controller.
 *
 */
class CalendarController extends Controller
{

    /**
     * Render Calendar View for Users
     *
     */
    public function calendar_indexAction()
    {
        return $this->render('@Calendar/fullcalendar/views/agenda-views.html.twig');
    }

    /**
     * Get all Events from BDD and convert us to Json Object for Calendar
     *
     */
    public function getEventsJsonObjectAction()
    {
        $em = $this->getDoctrine()->getManager(); //appel doctrine methode BDD

        $agenda = $em->getRepository('CalendarBundle:Agenda')->findAll(); // appel de la table

        $normalizer = new ObjectNormalizer(); //Normalisation des données pour passer en JSON

        $encoder = new JsonEncoder(); // Encodage des données en JSON

        /* ENCODAGE DE DATE POUR RECUP */
        $dateCallback = function ($dateTime) {
            return $dateTime instanceof \DateTime
                ? $dateTime->format(\DateTime::ISO8601)
                : '';
        };

        /* CREATION TABLEAU POUR ENVOI AU JSON */
        $normalizer->setCallbacks(array('start' => $dateCallback, 'end' => $dateCallback));

        $serializer = new Serializer(array($normalizer), array($encoder));
        $jsonObject = $serializer->serialize($agenda, 'json');

        $response = new Response();
        $response->setContent($jsonObject);

        return $response;
    }

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
        $form = $this->createForm('CalendarBundle\Form\AgendaType', $agenda);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agenda);
            $em->flush($agenda);

            return $this->redirectToRoute('agenda_show', array('id' => $agenda->getId()));
        }

        return $this->render('@Calendar/agenda/new.html.twig', array(
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

        return $this->render('@Calendar/agenda/show.html.twig', array(
            'agenda' => $agenda,
        ));
    }

    /**
     * Displays a form to edit an existing agenda entity.
     *
     */
    public function editAction(Request $request, Agenda $agenda)
    {
        $editForm = $this->createForm('CalendarBundle\Form\AgendaType', $agenda);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($agenda);
            $em->flush();


            return $this->redirectToRoute('agenda_show', array('id' => $agenda->getId()));
        }

        return $this->render('@Calendar/agenda/edit.html.twig', array(
            'agenda' => $agenda,
            'edit_form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a agenda entity.
     *
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $agenda = $em->getRepository('CalendarBundle:Agenda')->findOneById($id); // findoneby ?? findBy

        if (!empty($agenda))
        {
//            $em->remove($img_evenement);
            $em->remove($agenda);
            $em->flush();
        }

        return $this->redirectToRoute('agenda');
    }

//    public function deleteAction(Request $request, Agenda $agenda)
//    {
//        $form = $this->createDeleteForm($agenda);
//        $form->handleRequest($request);
//
//        if ($form->isSubmitted() && $form->isValid()) {
//            $em = $this->getDoctrine()->getManager();
//            $em->remove($agenda);
//            $em->flush($agenda);
//        }
//
//        return $this->redirectToRoute('agenda_index');
//    }
//
//    /**
//     * Creates a form to delete a agenda entity.
//     *
//     * @param Agenda $agenda The agenda entity
//     *
//     * @return \Symfony\Component\Form\Form The form
//     */
//    private function createDeleteForm(Agenda $agenda)
//    {
//        return $this->createFormBuilder()
//            ->setAction($this->generateUrl('agenda_delete', array('id' => $agenda->getId())))
//            ->setMethod('DELETE')
//            ->getForm()
//        ;
//    }
}
