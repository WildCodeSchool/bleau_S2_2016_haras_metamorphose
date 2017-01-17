<?php

namespace PlateFormeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $limit = 5;

        $em = $this->getDoctrine()->getManager();

        $agenda = $em->getRepository('CalendarBundle:Agenda')->findBy( array('slider' => 1) );
        $articles = $em->getRepository('HarasBundle:Article')->findLatestArticles($limit);
//var_dump($agenda); die;
        return $this->render('@PlateForme/homepage_plateforme.html.twig', array(
            'agenda' => $agenda,
            'articles' => $articles
        ));
    }

    public function adminAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        return $this->render('@PlateForme/homepage_plateforme.html.twig', array(
            'user' => $user
        ));
    }

    public function moderateurAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        return $this->render('@PlateForme/homepage_plateforme.html.twig', array(
            'user' => $user
        ));
    }

    public function philosophieAction()
    {
        return $this->render('@PlateForme/philosophie.html.twig');
    }
}

