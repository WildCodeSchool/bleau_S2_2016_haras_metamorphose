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
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class CalendarController extends Controller
{

    /**
     * Lists all agenda entities.
     *
     */

    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager(); //appel doctrine methode BDD

        $agenda = $em->getRepository('PlateFormeBundle:Agenda')->findAll(); // appel de la table

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

}