<?php

namespace HarasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HarasBundle\Entity\Page;
use HarasBundle\Form\PageType;

/**
 * Page controller.
 *
 */
class PageController extends Controller
{
    public function getPageAction(Request $request, Page $page)
    {
        $name = $page->getName();
        $table = [];
        $language = $this->getRequest()->getLocale();
        // récupération du texte propre à la page
        foreach ($page->getTexts() as $text)
        {
            $table[$text->getName()] = $text->getTranslation($language);
        }
        // page template
        if($name == 'section1' || $name == 'section2' || $name == 'section3' || $name == 'section4')
        {
             // récupération des média
            foreach ($page->getMedias() as $media)
            {
                $table[$media->getName()] = $media->getMediaTranslation($language);
            }
            // récupération des articles
            $table['articles'] = [];
            $articleRendering = [];
            foreach ($page->getArticles() as $article)
            {
                $textTitle = $article->getTitle();
                $textContent = $article->getContent();
                $articleRendering['title'] = $textTitle->getTranslation($language);
                $articleRendering['content'] = $textContent->getTranslation($language);
                $articleRendering['structure'] = $article->getStructure();
                // récupération des médias de l'article
                foreach ($article->getMedias() as $media)
                {
                $articleRendering['medias'][] = $media->getMediaTranslation($language);
                }
            }
            // Organisation des articles par ordre chronologique inverse
            array_unshift($table['articles'], $articleRendering);
            return $this->render('HarasBundle::template.html.twig', $table);
        }
        // page contact
        else if($name == 'contact')
        {
            $form = $this->createForm('HarasBundle\Form\contactType', $page);
            $form->handleRequest($request);
            $send=false;
            if ($form->isSubmitted() && $form->isValid()) 
            {
                $subject = $form->get('subject')->getData();
                $from = $form->get('from')->getData();
                $body = $form->get('body')->getData();
                $this->sendMail($subject,$from,$body);
                $send=true;
                return $this->render('@Haras/contact.html.twig', array('send' => $send, 'form' => $form->createView()));
            }
            return $this->render('@Haras/contact.html.twig', array('form' => $form->createView(), 'page' => $page));
        }



            return $this->render('HarasBundle::'.$name.'.html.twig', $table);
    }


    public function sendMail($subject, $from, $body)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject($subject)
            ->setFrom($from)
            ->setTo('michael.combescot@gmail.com')
            ->setBody($body)
        ;
        $this->get('mailer')->send($message);
    }

    /**
     * Lists all Page entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('HarasBundle:Page')->findAll();
        $table = [];
        foreach ($pages as $page)
        {
            $table[$page->getId()] = $page->getName();
        }
        return $this->render('page/index.html.twig', $table);
    }

    /**
     * Creates a new Page entity.
     *
     */
    public function newAction(Request $request)
    {
        $page = new Page();
        $form = $this->createForm('HarasBundle\Form\PageType', $page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();

            return $this->redirectToRoute('page_show', array('name' => $page->getName()));
        }

        return $this->render('page/new.html.twig', array(
            'page' => $page,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Page entity.
     *
     */
    public function showAction(Page $page)
    {
        $deleteForm = $this->createDeleteForm($page);
        return $this->render('page/show.html.twig', array(
            'page' => $page,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Page entity.
     *
     */
    public function editAction(Request $request, Page $page)
    {
        $deleteForm = $this->createDeleteForm($page);
        $editForm = $this->createForm('HarasBundle\Form\PageType', $page);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();

            return $this->redirectToRoute('page_edit', array('name' => $page->getName()));
        }

        return $this->render('page/edit.html.twig', array(
            'page' => $page,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Page entity.
     *
     */
    public function deleteAction(Request $request, Page $page)
    {
        $form = $this->createDeleteForm($page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($page);
            $em->flush();
        }

        return $this->redirectToRoute('page_index');
    }

    /**
     * Creates a form to delete a Page entity.
     *
     * @param Page $page The Page entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Page $page)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('page_delete', array('name' => $page->getName())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
