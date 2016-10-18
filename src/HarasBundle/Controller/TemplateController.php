<?php

namespace HarasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TemplateController extends Controller
{
    public function templateAction()
    {
        return $this->render('HarasBundle::template_remplissage.html.twig');
    }
}