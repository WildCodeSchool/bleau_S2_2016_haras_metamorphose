<?php

namespace HarasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

use HarasBundle\Entity\Article;
use HarasBundle\Entity\Text;
use HarasBundle\Entity\Media;
use HarasBundle\Entity\ArticleStructure;
use HarasBundle\Entity\Page;
use HarasBundle\Form\ArticleType;

/**
 * Article controller.
 *
 */
class ArticleController extends Controller
{
    /**
     * Lists all Article entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $articles = $em->getRepository('HarasBundle:Article')->findAll();

        return $this->render('article/index.html.twig', array(
            'articles' => $articles,
        ));
    }

    /**
     * Creates a new Article entity.
     *
     */

    public function newSelectAction(Request $request, Page $page)
    {
        $form = $this->createForm('HarasBundle\Form\ArticleSelectType');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
            return $this->redirectToRoute('article_new', array(
                'name' => $form->get('name')->getData(),
                'structure' => $form->get('structure')->getData()->getId(),
                'page' => $page->getId()
                ));
        }

        return $this->render('article/newSelectStructure.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    public function newAction(Request $request, Page $page, ArticleStructure $structure, $name)
    {
        $article = new Article();
        $form = $this->createForm('HarasBundle\Form\ArticleType', $article);
        if($structure->getName() == 'slider')
        {
            $form
                ->remove('title')
                ->remove('content')
                ->add('medias')
                ;
        }
        else
        {
            $form->add('medias');
        }
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $article->setStructure($structure);
            $article->setName($name);
            $article->addPage($page);
            if($structure->getName() != 'slider')
            {
                $article->getTitle()->setName($name.' | Title');
                $article->getContent()->setName($name.' | Content');
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article_show', array('id' => $article->getId()));
        }

        return $this->render('article/new.html.twig', array(
            'article' => $article,
            'form' => $form->createView()
        ));
    }

    /**
     * Finds and displays a Article entity.
     *
     */
    public function showAction(Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);

        return $this->render('article/show.html.twig', array(
            'article' => $article,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Article entity.
     *
     */
    public function editAction(Request $request, Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $editForm = $this->createForm('HarasBundle\Form\ArticleType', $article);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article_edit', array('id' => $article->getId()));
        }

        $editForm->remove('title');
        $editForm->remove('content');
        $editForm->remove('structure');
        $editForm->remove('medias');
        $editForm->remove('createdAt');




        return $this->render('article/edit.html.twig', array(
            'article' => $article,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Article entity.
     *
     */
    public function deleteAction(Request $request, Article $article)
    {
        $form = $this->createDeleteForm($article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();
        }

        return $this->redirectToRoute('article_index');
    }

    /**
     * Creates a form to delete a Article entity.
     *
     * @param Article $article The Article entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('article_delete', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
