<?php

namespace HarasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TemplateController extends Controller
{
    public function templateAction(integer $id)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('HarasBundle:Page')->findOneBy
        (
            ['id' => $id]
        );
        $table = [];
        $language = $this->getRequest()->getLocale();

        //récupère les textes et les met dans un tableau
        foreach ($page->getTexts() as $text)
        {
            $table[$text->getName()] = $text->getTranslation($language);
        }

        foreach ($page->getMedia() as $media)
        {
            $table[$media->getName()] = $media->getMediaTranslation($language);
        }

        $table['articles'] = [];
        foreach ($page->getArticles() as $article)
        {
            $articleRendering = [];
            $textTitle = $article->getTitle();
            $textContent = $article->getContent();
            $articleRendering['title'] = $textTitle->getTranslation($language);
            $articleRendering['content'] = $textContent->getTranslation($language);

            foreach ($article->getMedia() as $media)
            {
                $articleRendering[$media->getName()] = $media->getMediaTranslation($language);
            }
            $table['articles'][] = $articleRendering;
        }

        return $this->render('HarasBundle::template_remplissage.html.twig', $table);
    }


}