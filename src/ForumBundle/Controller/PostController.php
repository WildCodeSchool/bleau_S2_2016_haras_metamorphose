<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\Post;
use ForumBundle\Entity\CategoriePlateforme;
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
    public function indexAction(Request $request)
    {
        // Connexion à la BdD
        $em = $this->getDoctrine()->getManager();
        // Ramene le Fil de discussion parent et actif
        $postParents = $em->getRepository('ForumBundle:Post')->findBy(array('actif'=> 1, 'parent' => null));

        $nbPostEnfants = array();
        foreach ($postParents as $postParent) {
            $nbPostEnfants[$postParent->getId()] = count($em->getRepository('ForumBundle:Post')->findBy(array( 'parent' => $postParent->getId(), 'actif'=> 1)));
        }

        // Ramene les catégories  (actif = oui)
        $categories = $em->getRepository('ForumBundle:CategoriePlateforme')->findBy(array('actif'=> 1, 'parent' => null));
        // Ramene sous catégorie
        // SELECT * FROM `categorie_plateforme` WHERE `parent_id` is NOT null and actif = 1
        $repository = $em->getRepository('ForumBundle:CategoriePlateforme');
        $sousCategories = $repository->getSousCategorie();

        $lastPostByCat1 = array();
        $lastPostByCat2 = array();
        $lastPostByCat3 = array();
        $lastPostByCat4 = array();
//        foreach ($categories as $categorie) {
            foreach ($postParents as $postParent) {
                if ($postParent->getCategorie()->getParent()->getId() == 1) {
                  $arrayProvisoire = array();
                  $arrayProvisoire[] = $postParent;
                  $lastPostByCat1 = array_slice($arrayProvisoire, -1, 1, true);
                }
                elseif ($postParent->getCategorie()->getParent()->getId() == 2) {
                  $arrayProvisoire = array();
                  $arrayProvisoire[] = $postParent;
                  $lastPostByCat2 = array_slice($arrayProvisoire, -1, 1, true);
                }
                elseif ($postParent->getCategorie()->getParent()->getId() == 3) {
                  $arrayProvisoire = array();
                  $arrayProvisoire[] = $postParent;
                  $lastPostByCat3 = array_slice($arrayProvisoire, -1, 1, true);
                }
                elseif ($postParent->getCategorie()->getParent()->getId() == 4) {
                  $arrayProvisoire = array();
                  $arrayProvisoire[] = $postParent;
                  $lastPostByCat4 = array_slice($arrayProvisoire, -1, 1, true);
                }
            }

        return $this->render('@Forum/post/index.html.twig', array(
            'postParents' => $postParents,
            'categories' => $categories,
            'sousCategories' => $sousCategories,
            'lastPostCat1' => $lastPostByCat1,
            'lastPostCat2' => $lastPostByCat2,
            'lastPostCat3' => $lastPostByCat3,
            'lastPostCat4' => $lastPostByCat4,
            'nbPostEnfants' => $nbPostEnfants,
        ));
    }

    /**
     * Creates a new post entity.
     *
     */
    public function newAction(Request $request, CategoriePlateforme $cat, Post $id)
    {
        $post = new Post();
        $form = $this->createForm('ForumBundle\Form\PostType', $post);

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

            // Ajout date de la saisie
            $post->setDateCreate(new \DateTime());

            // Ajout Enfant
//            $post->addEnfant($post->getEnfant());

            // Ajout user null pour le moment
//            $post->setUser(null);

            // Ajout +1 sur nbPost sur User

            $em->persist($post);
            $em->flush($post);

            $this->addFlash(
                'notice',
                'Votre message a été enregistré'
            );

            return $this->redirectToRoute('post_showAllPost', array('id' => $post->getParent()->getId()) );
        }

        return $this->render('@Forum/post/new.html.twig', array(
            'post' => $post,
            'form' => $form->createView(),
            'cat' => $request->get('cat'),
            'id' => $request->get('id'),
        ));
    }

        /**
     * Creates a new post entity.
     *
     */
    public function newParentAction(Request $request, CategoriePlateforme $cat)
    {
        $post = new Post();
        $form = $this->createForm('ForumBundle\Form\PostType', $post);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            // Enregistrement en BdD
            // Ajout de la catégorie au post
            $post->setCategorie($cat);
            // Ajout actif
            $post->setActif(true);

            // Ajout date de la saisie
            $post->setDateCreate(new \DateTime());


            // Ajout Enfant
//            $post->addEnfant($post->getEnfant());

            // Ajout user null pour le moment
//            $post->setUser(null);

            // Ajout +1 sur nbPost sur User

            $em->persist($post);
            $em->flush($post);
            return $this->redirectToRoute('post_showAllPost', array('id' => $post->getId()) );

        }

        return $this->render('@Forum/post/newParent.html.twig', array(
            'post' => $post,
            'form' => $form->createView(),
            'cat' => $request->get('cat'),
        ));
    }

    /**
     * Finds and displays a post entity.
     *
     */
    public function showAction(Post $post)
    {
        $deleteForm = $this->createDeleteForm($post);

        return $this->render('@Forum/post/show.html.twig', array(
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
        // Récupération des post en BdD
        // Post parent
        $postParents = $em->getRepository('ForumBundle:Post')->findBy(array( 'id' => $idPostFirst, 'actif'=> 1));
        // Post enfant + mise en place pagination
        $findPostEnfants = $em->getRepository('ForumBundle:Post')->findBy(array( 'parent' => $idPostFirst, 'actif'=> 1));
        $paginator  = $this->get('knp_paginator');
        $postEnfants = $paginator->paginate($findPostEnfants, $request->query->getInt('page', 1), 2);


        return $this->render('@Forum/post/showAllPost.html.twig', array(
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
        $editForm = $this->createForm('ForumBundle\Form\PostType', $post);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            // Redirection sur le fil de discussion initial
            // pour post parent
            if($post->getParent() == null) {
                return $this->redirectToRoute('post_showAllPost', array('id' => $post->getId()));
            }
            // pour post enfant
            else {
            return $this->redirectToRoute('post_showAllPost', array('id' => $post->getParent()->getId()));
            }
        }

        // Direction pour post parent
        if($post->getParent() == null) {
            return $this->render('@Forum/post/edit.html.twig', array(
                'id' => $post->getId(),
                'post' => $post,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView()
            ));
        // Direction pour post enfant
        } else {
            return $this->render('@Forum/post/edit.html.twig', array(
                'post' => $post,
                'edit_form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView()
            ));
        }
    }

    /**
     * Desactives a post entity.
     *
     */
    public function desactiveAction(Post $post) {
        // Si post Parent, désactive également les post enfant, actif = false
        if ($post->getParent() == null) {
            $em = $this->getDoctrine()->getManager();
            // Récupération des post enfant dans BdD
            $postEnfants = $em->getRepository('ForumBundle:Post')->findBy(array( 'parent' => $post->getId(), 'actif'=> 1));

            // Enregistrement en BdD
            // Enfant : actif = false
            foreach ($postEnfants as $postEnfant) {
                $postEnfant->setActif(false);
                $em->persist($postEnfant);
                $em->flush($postEnfant);
            }
            // Enfant : actif = false
            $post->setActif(false);
            $em->persist($post);
            $em->flush($post);

            return $this->redirectToRoute('post_index');

        // Si post Enfant, desactive que le post selectionné
        } else {
            $em = $this->getDoctrine()->getManager();
            $post->setActif(false);
            $em->persist($post);
            $em->flush($post);

            return $this->redirectToRoute('post_showAllPost', array('id' => $post->getParent()->getId()) );
        }
    }

    /**
     * Reactives a post entity.
     *
     */
    public function reactiveAction(Post $post) {
        // Si post Parent, réactive également les post enfant, actif = true
        if ($post->getParent() == null and $post->getActif() == true) {
            $em = $this->getDoctrine()->getManager();
            // Récupération des post enfant dans BdD
            $postEnfants = $em->getRepository('ForumBundle:Post')->findBy(array( 'parent' => $post->getId(), 'actif'=> 0));

            // Enregistrement en BdD
            // Enfant : actif = true
            foreach ($postEnfants as $postEnfant) {
                $postEnfant->setActif(true);
                $em->persist($postEnfant);
                $em->flush($postEnfant);
            }
            // Parent : actif = true
            $post->setActif(true);
            $em->persist($post);
            $em->flush($post);

            return $this->redirectToRoute('post_index');

        // Si post Enfant, réactive que le post selectionné
        } else {
            $em = $this->getDoctrine()->getManager();
            $post->setActif(true);
            $em->persist($post);
            $em->flush($post);

            return $this->redirectToRoute('post_showAllPost', array('id' => $post->getParent()->getId()) );
        }
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
