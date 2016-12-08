<?php

namespace PlateFormeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlateFormeBundle:Default:index.html.twig');
    }

    public function calendar_indexAction()
    {
        return $this->render('@PlateForme/fullcalendar/views/agenda-views.html.twig');
    }
}
