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
    public function getPageAction($name)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('HarasBundle:Page')->findOneBy
        (
            ['name' => $name]
        );
        $table = [];
        $language = $this->getRequest()->getLocale();
        foreach ($page->getTexts() as $text)
        {
            $table[$text->getName()] = $text->getTranslation($language);
        }
        return $this->render('HarasBundle::'.$name.'.html.twig', $table);
    }


    public function templateAction(Page $page)
    {
        $em = $this->getDoctrine()->getManager();

//		Generate the table containing all the variables for the view
        $table = [];
        $language = $this->getRequest()->getLocale();

//		Add the page's category to the view.
		$table['category'] = strval($page->getCategory());	// prefer strval() over $category->getName() as category can be null
//		Add texts and medias to the view (respectively as strings and arrays of strings ['path', 'alt']
		foreach ($page->getTexts() as $text)
        {
            $table[$text->getName()] = $text->getTranslation($language);
        }
        foreach ($page->getMedias() as $media)
        {
            $table[$media->getName()] = $media->getMediaTranslation($language);
        }

//		The page's articles are sent via an 'articles' array to the view.
        $table['articles'] = [];
        foreach ($page->getArticles() as $article)
        {
            $articleRendering = [];
			$articleRendering['id'] = $article->getId();
            $textTitle = $article->getTitle();
            $textContent = $article->getContent();
            $articleRendering['title'] = $textTitle->getTranslation($language);
            $articleRendering['content'] = $textContent->getTranslation($language);
			$articleRendering['structure'] = $article->getStructure();
            foreach ($article->getMedias() as $media)	// Be careful! The medias are stored in a table even when there's only one!
            {
                $articleRendering['medias'][] = $media->getMediaTranslation($language);
            }
            array_unshift($table['articles'], $articleRendering);	// The articles are prepended so that the views get
														// them in reversed order (chronologically from last to first)
        }
        return $this->render('@Haras/template.html.twig', $table);
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
