<?php

namespace HarasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HarasBundle\Entity\Text;
use HarasBundle\Form\TextType;

/**
 * Text controller.
 *
 */
class TextController extends Controller
{
    /**
     * Lists all Text entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $texts = $em->getRepository('HarasBundle:Text')->findAll();

        return $this->render('text/index.html.twig', array(
            'texts' => $texts,
        ));
    }

    /**
     * Creates a new Text entity.
     *
     */
    public function newAction(Request $request)
    {
        $text = new Text();
        $form = $this->createForm('HarasBundle\Form\TextType', $text);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($text);
            $em->flush();

            return $this->redirectToRoute('text_show', array('id' => $text->getId()));
        }

        return $this->render('text/new.html.twig', array(
            'text' => $text,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Text entity.
     *
     */
    public function showAction(Text $text)
    {
        $deleteForm = $this->createDeleteForm($text);

        return $this->render('text/show.html.twig', array(
            'text' => $text,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Text entity.
     *
     */
    public function editAction(Request $request, Text $text)
    {
        $deleteForm = $this->createDeleteForm($text);
        $editForm = $this->createForm('HarasBundle\Form\TextType', $text);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($text);
            $em->flush();

            return $this->redirectToRoute('text_edit', array('id' => $text->getId()));
        }

        return $this->render('text/edit.html.twig', array(
            'text' => $text,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Text entity.
     *
     */
    public function deleteAction(Request $request, Text $text)
    {
        $form = $this->createDeleteForm($text);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($text);
            $em->flush();
        }

        return $this->redirectToRoute('text_index');
    }

    /**
     * Creates a form to delete a Text entity.
     *
     * @param Text $text The Text entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Text $text)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('text_delete', array('id' => $text->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
