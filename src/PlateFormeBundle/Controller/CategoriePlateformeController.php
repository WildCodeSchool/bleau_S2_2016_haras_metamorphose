<?php

namespace PlateFormeBundle\Controller;

use PlateFormeBundle\Entity\CategoriePlateforme;
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
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categoriePlateformes = $em->getRepository('PlateFormeBundle:CategoriePlateforme')->findAll();

        return $this->render('@PlateForme/categorieplateforme/index.html.twig', array(
            'categoriePlateformes' => $categoriePlateformes,
        ));
    }

    /**
     * Creates a new categoriePlateforme entity.
     *
     */
    public function newAction(Request $request)
    {
        $categoriePlateforme = new Categorieplateforme();
        $form = $this->createForm('PlateFormeBundle\Form\CategoriePlateformeType', $categoriePlateforme);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoriePlateforme);
            $em->flush($categoriePlateforme);

            return $this->redirectToRoute('categorieplateforme_show', array('id' => $categoriePlateforme->getId()));
        }

        return $this->render('@PlateForme/categorieplateforme/new.html.twig', array(
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

        return $this->render('@PlateForme/categorieplateforme/show.html.twig', array(
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
        $editForm = $this->createForm('PlateFormeBundle\Form\CategoriePlateformeType', $categoriePlateforme);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('categorieplateforme_edit', array('id' => $categoriePlateforme->getId()));
        }

        return $this->render('@PlateForme/categorieplateforme/edit.html.twig', array(
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
