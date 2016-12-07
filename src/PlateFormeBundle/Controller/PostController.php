<?php

namespace PlateFormeBundle\Controller;

use PlateFormeBundle\Entity\Post;
use PlateFormeBundle\Entity\CategoriePlateforme;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Post controller.
 *
 */
class PostController extends Controller
{
    /**
     * Lists all post entities.
     *
     */
    public function indexAction()
    {
        // Connexion à la BdD
        $em = $this->getDoctrine()->getManager();
        // Ramene le Fil de discussion parent et actif
        $postParents = $em->getRepository('PlateFormeBundle:Post')->findBy(array('actif'=> 1, 'parent' => null));
        // Ramene Toute la table catégorie  (actif = oui)
        $allCategories = $em->getRepository('PlateFormeBundle:CategoriePlateforme')->findBy(array('actif'=> 1));
        // Ramene les catégories (out sous catégorie = parent = null) actives
        $categories = $em->getRepository('PlateFormeBundle:CategoriePlateforme')->findBy(array('actif'=> 1,'parent' => null ));
        // Ramene sous catégorie
        // SELECT * FROM `categorie_plateforme` WHERE `parent_id` is NOT null and actif = 1
        $repository = $em->getRepository('PlateFormeBundle:CategoriePlateforme');
        $sousCategories = $repository->getSousCategorie();
        return $this->render('@PlateForme/post/index.html.twig', array(
            'postParents' => $postParents,
            'allCategories' => $allCategories,
            'categories' => $categories,
            'sousCategories' => $sousCategories,
        ));
    }

    /**
     * Creates a new post entity.
     *
     */
    public function newAction(Request $request, CategoriePlateforme $cat, Post $id)
    {
        $post = new Post();
        $form = $this->createForm('PlateFormeBundle\Form\PostType', $post);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            // Enregistrement en BdD

            // Ajout de l'id Parent au post
            $post->setParent($id);

            // Ajout de la catégorie du parent au post
            $post->setCategorie($cat);

            // Ajout actif
            $post->setActif(true);

            // Ajout Enfant
//            $post->addEnfant($post->getEnfant());

            // Ajout user null pour le moment
//            $post->setUser(null);
//            var_dump($post);

            // Ajout +1 sur nbPost sur User

            $em->persist($post);
            $em->flush($post);

            return $this->redirectToRoute('post_index');
        }

        return $this->render('@PlateForme/post/new.html.twig', array(
            'post' => $post,
            'form' => $form->createView(),
            'cat' => $request->get('cat'),
            'id' => $request->get('id'),
        ));
    }

    /**
     * Finds and displays a post entity.
     *
     */
    public function showAction(Post $post)
    {
        $deleteForm = $this->createDeleteForm($post);

        return $this->render('@PlateForme/post/show.html.twig', array(
            'post' => $post,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Finds and displays a post entity.
     *
     */
    public function showAllPostAction(Request $request)
    {

        // Connexion à la BdD
        $em = $this->getDoctrine()->getManager();
        // Ramene le Fil de discussion parent et actif

        // Récupération du numéro du post fil de discussion
        $idPostFirst = $request->get('id');
        $postParents = $em->getRepository('PlateFormeBundle:Post')->findBy(array( 'id' => $idPostFirst, 'actif'=> 1));
        $postEnfants = $em->getRepository('PlateFormeBundle:Post')->findBy(array( 'parent' => $idPostFirst, 'actif'=> 1));

        return $this->render('@PlateForme/post/showAllPost.html.twig', array(
            'postParents' => $postParents,
            'postEnfants' => $postEnfants,
        ));
    }


    /**
     * Displays a form to edit an existing post entity.
     *
     */
    public function editAction(Request $request, Post $post)
    {
        $deleteForm = $this->createDeleteForm($post);
        $editForm = $this->createForm('PlateFormeBundle\Form\PostType', $post);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('post_edit', array('id' => $post->getId()));
        }

        return $this->render('@PlateForme/post/edit.html.twig', array(
            'post' => $post,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a post entity.
     *
     */
    public function deleteAction(Request $request, Post $post)
    {
        $form = $this->createDeleteForm($post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($post);
            $em->flush($post);
        }

        return $this->redirectToRoute('post_index');
    }

    /**
     * Creates a form to delete a post entity.
     *
     * @param Post $post The post entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Post $post)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('post_delete', array('id' => $post->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
