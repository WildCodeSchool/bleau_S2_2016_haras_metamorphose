<?php

namespace PlateFormeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlateFormeBundle:Default:index.html.twig');
    }

    public function calendarAction()
    {
        return $this->render('@PlateForme/agenda/calendar.html.twig');
    }
}
