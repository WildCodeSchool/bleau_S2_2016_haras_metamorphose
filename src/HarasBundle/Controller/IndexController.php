<?php

namespace HarasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    public function indexAction()
    {
        $bdd = $this->getDoctrine()->getManager();
        return $this->render('HarasBundle:Index:index.html.twig');

    }
}