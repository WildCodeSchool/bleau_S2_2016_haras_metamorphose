<?php

namespace HarasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('HarasBundle:Page')->findOneBy(
            ['id' => 1]);
//        var_dump($page);
        //var_dump(array_search('NavHome', array_column($page->getTexts(), 'name')));
        return $this->render('HarasBundle:Index:index.html.twig', array('page' => $page));
    }
}