<?php

namespace CalendarBundle\Controller;

use CalendarBundle\Entity\Agenda;
use HarasBundle\Entity\Media;
use CalendarBundle\Form\AgendaType;

use HarasBundle\Entity\Text;
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
        return $this->render('@Calendar/fullcalendar/views/agenda-fullviews.html.twig');
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
        /* SUPPRESSION D'UN APPEL DE L'ENTITE POUR LE TABLEAU */
        $normalizer->setCircularReferenceHandler(function ($agenda) {
            return $agenda->getName('image');
        });

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

        /* COMME ON RECUP LE MEDIATYPE DU HARAS, ON DOIT SUPPRIMER LA DEFINITION IMAGE 'ALT' CAR NON UTILE DANS CE CAS */
        $mediaform = $form->get('image');
        $mediaform
            ->remove('alt')
        ;
        $form->setData($agenda);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            /* ON RECUP LE FICHIER IMAGE */
            $imageForm = $form->get('image');
            $image = $imageForm->getData();
            $agenda->setImage($image);

            /* ON DEFINI UN NOM UNIQUE AU FICHIER UPLOAD : LE PREG_REPLACE PERMET LA SUPPRESSION DES ESPACES ET AUTRES CARACTERES INDESIRABLES*/
            $image->setName(preg_replace('/\W/', '_', "Event_" . $agenda->getTitre() . uniqid()) );

            /* ON DEFINI UN ALT CORRESPONDANT A L'IMAGE (TITRE ET LIEU DE L'EVENT) */
            $alt = new Text();
            $altText = $agenda->getTitre() . " - " . $agenda->getLieu();
            $alt->setTextFr($altText)->setTextEn($altText)->setName($image->getName().'_alt');
            $image->setAlt($alt);
            // On appelle le service d'upload de média (HarasBundle/Services/mediaInterface)
            $this->get('media.interface')->mediaUpload($image);

            /* SI L'HEURE ET/OU LA DATE DE FIN EST INFERIEUR A CELLE DE DEBUT ON REVIENT A LA PAGE NEW*/
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
     * Finds and displays a agenda entity.
     *
     */
    public function showAllAction()
    {
        $em = $this->getDoctrine()->getManager();
        $agenda = $em->getRepository('CalendarBundle:Agenda')->findall();

        return $this->render('@Calendar/agenda/show_all.html.twig', array(
            'events' => $agenda,
        ));
    }

    /**
     * Displays a form to edit an existing agenda entity.
     *
     */
    public function editAction(Request $request, Agenda $agenda)
    {
        $editForm = $this->createForm('CalendarBundle\Form\AgendaType', $agenda);

        $mediaform = $editForm->get('image');
        $mediaform
            ->remove('alt')
        ;
        $editForm->setData($agenda);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            /* ON RECUP LE FICHIER IMAGE */
            $imageForm = $editForm->get('image');
            $image = $imageForm->getData();
            $agenda->setImage($image);

            /* ON DEFINI UN NOM UNIQUE AU FICHIER UPLOAD : LE PREG_REPLACE PERMET LA SUPPRESSION DES ESPACES ET AUTRES CARACTERES INDESIRABLES*/
            $image->setName(preg_replace('/\W/', '_', "Event_" . $agenda->getTitre() . uniqid()) );

            /* ON DEFINI UN ALT CORRESPONDANT A L'IMAGE (TITRE ET LIEU DE L'EVENT) */
            $alt = new Text();
            $altText = $agenda->getTitre() . " - " . $agenda->getLieu();
            $alt->setTextFr($altText)->setTextEn($altText)->setName($image->getName().'_alt');
            $image->setAlt($alt);
            // On appelle le service d'upload de média (HarasBundle/Services/mediaInterface)
            $this->get('media.interface')->mediaUpload($image);

            if($agenda->getStart() > $agenda->getEnd()) {
                $this->addFlash (
                    'success',
                    'Attention l\'heure ou la date de fin est antérieur à la l\'heure de début'
                );

                return $this->render('@Calendar/agenda/edit.html.twig', array(
                    'agenda' => $agenda,
                    'edit_form' => $editForm->createView(),
                ));
            }
            else{
                $em = $this->getDoctrine()->getManager();
                $em->persist($agenda);
                $em->flush();


                return $this->redirectToRoute('agenda_show', array('id' => $agenda->getId()));
            }
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

        return $this->redirectToRoute('admin_dashboard');
    }

}
