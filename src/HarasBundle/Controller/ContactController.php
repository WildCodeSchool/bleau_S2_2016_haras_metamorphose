<?php

namespace HarasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function contactAction()
    {
        return $this->render('HarasBundle::contact.html.twig');
    }
}