<?php

namespace ForumBundle\Controller;

use ForumBundle\Entity\CategoriePlateforme;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Categorieplateforme controller.
 *
 */
class CategoriePlateformeController extends Controller
{
    /**
     * Lists all categoriePlateforme entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        // Ramene les catégories  (actif = oui) et mise en place du paginator
        $findCategoriePlateformes = $em->getRepository('ForumBundle:CategoriePlateforme')->findBy(array('actif'=> 1, 'parent' => null));
        $paginator  = $this->get('knp_paginator');
        $categoriePlateformes = $paginator->paginate($findCategoriePlateformes, $request->query->getInt('page', 1), 5);

        // Ramene sous catégorie
        $repository = $em->getRepository('ForumBundle:CategoriePlateforme');
        $sousCategories = $repository->getSousCategorie();

        return $this->render('@Forum/categorieplateforme/index.html.twig', array(
            'categoriePlateformes' => $categoriePlateformes,
            'sousCategories' => $sousCategories,
        ));
    }

    /**
     * Creates a new categoriePlateforme entity.
     *
     */
    public function newSousCatAction(Request $request, CategoriePlateforme $cat)
    {
        $categoriePlateforme = new Categorieplateforme();
        $form = $this->createForm('ForumBundle\Form\CategoriePlateformeType', $categoriePlateforme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // Ajout de la catégorie
            $categoriePlateforme->setParent($cat);

            // Ajout actif
            $categoriePlateforme->setActif(true);

            $em->persist($categoriePlateforme);
            $em->flush($categoriePlateforme);

            $this->addFlash(
                'notice',
                'Votre sous-catégorie a bien été enregistrée'
            );

            return $this->redirectToRoute('categorieplateforme_index');
        }

        return $this->render('@Forum/categorieplateforme/newSousCategorie.html.twig', array(
            'categoriePlateforme' => $categoriePlateforme,
            'form' => $form->createView(),
            'cat' => $request->get('cat'),
        ));
    }

    /**
     * Creates a new categoriePlateforme entity.
     *
     */
    public function newCatAction(Request $request)
    {
        $categoriePlateforme = new Categorieplateforme();
        $form = $this->createForm('ForumBundle\Form\CategoriePlateformeType', $categoriePlateforme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            // Ajout actif
            $categoriePlateforme->setActif(true);

            $em->persist($categoriePlateforme);
            $em->flush($categoriePlateforme);

            $this->addFlash(
                'notice',
                'Votre catégorie a bien été enregistrée'
            );

            return $this->redirectToRoute('categorieplateforme_index');
        }

        return $this->render('@Forum/categorieplateforme/newCategorie.html.twig', array(
            'categoriePlateforme' => $categoriePlateforme,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categoriePlateforme entity.
     *
     */
    public function showAction(CategoriePlateforme $categoriePlateforme)
    {
        $deleteForm = $this->createDeleteForm($categoriePlateforme);

        return $this->render('@Forum/categorieplateforme/show.html.twig', array(
            'categoriePlateforme' => $categoriePlateforme,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categoriePlateforme entity.
     *
     */
    public function editAction(Request $request, CategoriePlateforme $categoriePlateforme)
    {
        $deleteForm = $this->createDeleteForm($categoriePlateforme);
        $editForm = $this->createForm('ForumBundle\Form\CategoriePlateformeType', $categoriePlateforme);

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();
                // Message flash pour catégorie
                if($categoriePlateforme->getParent() == null)
                $this->addFlash(
                    'notice',
                    $categoriePlateforme->getNom() . ' a été modifiée'
                );
                // Message flash pour sous-catégorie
                else {
                    $this->addFlash(
                    'notice',
                    $categoriePlateforme->getNom() . ' a été modifiée'
                );
            }
            return $this->redirectToRoute('categorieplateforme_index');
        }

        return $this->render('@Forum/categorieplateforme/edit.html.twig', array(
            'categoriePlateforme' => $categoriePlateforme,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a categoriePlateforme entity.
     *
     */
    public function deleteAction(Request $request, CategoriePlateforme $categoriePlateforme)
    {
        $form = $this->createDeleteForm($categoriePlateforme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categoriePlateforme);
            $em->flush($categoriePlateforme);
        }

        return $this->redirectToRoute('categorieplateforme_index');
    }

    /**
     * Creates a form to delete a categoriePlateforme entity.
     *
     * @param CategoriePlateforme $categoriePlateforme The categoriePlateforme entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CategoriePlateforme $categoriePlateforme)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('categorieplateforme_delete', array('id' => $categoriePlateforme->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
