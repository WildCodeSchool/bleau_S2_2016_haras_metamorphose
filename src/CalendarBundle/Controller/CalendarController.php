<?php

namespace CalendarBundle\Controller;

use CalendarBundle\Entity\Agenda;
use HarasBundle\Entity\Media;
use CalendarBundle\Form\AgendaType;

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

        if ($start != 0) {
            $agenda->setStart(new \DateTime($start));
            $agenda->setEnd(new \DateTime($start));
        }

        $form = $this->createForm('CalendarBundle\Form\AgendaType', $agenda);

        $mediaform = ;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $imageForm = $form->get('image');
            $image = $imageForm->getData();
            $agenda->setImage($image);

            // Chaque médium définit son propre nom en fonction de celui de l'article, preg_replace permet ici de remplacer
            // tous les caractères interdits dans les noms de fichier par '_' (car le media s'upload dans un fichier portant son propre nom)
            $image->setName(preg_replace('/\W/', '_', "Event_" . $agenda->getName() . uniqid()) );

            // L'alt définit son nom selon celui de son médium et prend un '_' juste pour rester dans l'ambiance \(o°v°o)/
            $image->getAlt()->setName($agenda->getTitre() . " - " . $agenda->getLieu());
            // On appelle le service d'upload de média (HarasBundle/Services/mediaInterface)
            $this->get('media.interface')->mediaUpload($image);

            if($agenda->getStart() > $agenda->getEnd()) {
                $this->addFlash (
                    'success',
                    'Attention l\'heure ou la date de fin est antérieur à la l\'heure de début'
                );

                return $this->render('@Calendar/agenda/new.html.twig', array(
                    'agenda' => $agenda,
                    'form' => $form->createView(),
                ));
            }
            else{

                $em = $this->getDoctrine()->getManager();
                $em->persist($agenda);
                $em->flush();
                return $this->redirectToRoute('agenda_show', array('id' => $agenda->getId()));
            }
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
        $agenda = $em->getRepository('CalendarBundle:Agenda')->findOneById($id); // findoneby ?? findBy ?? Différence??

        if (!empty($agenda))
        {
            $em->remove($agenda);
            $em->flush();
        }

        return $this->redirectToRoute('plate_forme_homepage');
    }

}
