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
        $langues = $this->getRequest()->getLocale();

        //récupère les textes et les met dans un tableau
        foreach ($page->getTexts() as $text)
        {
            $table[$text->getName()] = $text->getTranslation($langues);
        }

        foreach ($page->getMedias() as $media)
        {
            $mediaRendering = [];
            $mediaAlt = $media->getAlt();
            $mediaPath = $media->getPath();
            if ($langues == 'fr')
            {
                $mediaRendering['alt'] = $mediaAlt->getTextFr();
            }
            else
            {
                $mediaRendering['alt'] = $mediaAlt->getTextEn();
            }
            $mediaRendering['path'] = $mediaPath;
            $table[$media->getName()] = $mediaRendering;
        }
        foreach ($page->getArticles() as $article)
        {
            $articleRendering = [];
            $textTitle = $article->getTitle();
            $textContent = $article->getContent();

            if ($langues == 'fr')
            {
                $articleRendering['title'] = $textTitle->getTextFr();
                $articleRendering['content'] = $textContent->getTextFr();
            }
            else
            {
                $articleRendering['title'] = $textTitle->getTextEn();
                $articleRendering['content'] = $textContent->getTextEn();
            }
            $page->getArticles();
        }

        return $this->render('HarasBundle::template_remplissage.html.twig', $table);
    }


}