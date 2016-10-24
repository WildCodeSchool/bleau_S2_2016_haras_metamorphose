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
    public function homepageAction()
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('HarasBundle:Page')->findOneBy
        (
            ['id' => 1]
        );
        $tableau = [];
        $language = $this->getRequest()->getLocale();
        foreach ($page->getTexts() as $text)
        {
            $text->getTranslation($language);
        }

        return $this->render('HarasBundle::index.html.twig', $tableau);
    }

    public function headerAction()
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('HarasBundle:Page')->findOneBy
        (
            ['name' => 'header']
        );
        $tableau = [];
        $language = $this->getRequest()->getLocale();
        foreach ($page->getTexts() as $text)
        {
            $text->getTranslation($language);
        }

        return $this->render('HarasBundle::template.html.twig', $tableau);
    }

    public function templateAction(Page $page)
    {
        $em = $this->getDoctrine()->getManager();

        $table = [];
        $language = $this->getRequest()->getLocale();

        //récupère les textes et les met dans un tableau
        foreach ($page->getTexts() as $text)
        {
            $table[$text->getName()] = $text->getTranslation($language);
        }

        foreach ($page->getMedias() as $media)
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

            foreach ($article->getMedias() as $media)
            {
                $articleRendering[$media->getName()] = $media->getMediaTranslation($language);
            }
            $table['articles'][] = $articleRendering;
        }

        return $this->render('@Haras/template.html.twig', $table);
    }

    public function contactAction()
    {
        return $this->render('HarasBundle::contact.html.twig');
    }










    /**
     * Lists all Page entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pages = $em->getRepository('HarasBundle:Page')->findAll();

        return $this->render('page/index.html.twig', array(
            'pages' => $pages,
        ));
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

            return $this->redirectToRoute('page_show', array('id' => $page->getId()));
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

            return $this->redirectToRoute('page_edit', array('id' => $page->getId()));
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
            ->setAction($this->generateUrl('page_delete', array('id' => $page->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
