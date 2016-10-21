<?php

namespace HarasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('HarasBundle:Page')->findOneBy
        (
            ['id' => 1]
        );
        $tableau = [];
        $langues = $this->getRequest()->getLocale();
        foreach ($page->getTexts() as $text)
        {
            if ($langues == 'fr')
            {
                $tableau[$text->getName()] = $text->getTextFr();
            }
            else
                $tableau[$text->getName()] = $text->getTextEn();
        }

        return $this->render('HarasBundle:Index:index.html.twig', $tableau);
    }
}