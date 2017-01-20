<?php

namespace PlateFormeBundle\Controller;

use PlateFormeBundle\Entity\NewsLetter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Newsletter controller.
 *
 */
class NewsLetterController extends Controller
{
    /**
     * Lists all newsLetter entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $newsLetters = $em->getRepository('PlateFormeBundle:NewsLetter')->findAll();

        return $this->render('newsletter/index.html.twig', array(
            'newsLetters' => $newsLetters,
        ));
    }

    /**
     * Creates a new newsLetter entity.
     *
     */
    public function newAction(Request $request)
    {
        $newsLetter = new Newsletter();
        $form = $this->createForm('PlateFormeBundle\Form\NewsLetterType', $newsLetter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($newsLetter);
            $em->flush($newsLetter);

            return $this->redirectToRoute('newsletter_show', array('id' => $newsLetter->getId()));
        }

        return $this->render('newsletter/new.html.twig', array(
            'newsLetter' => $newsLetter,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a newsLetter entity.
     *
     */
    public function showAction(NewsLetter $newsLetter)
    {
        $deleteForm = $this->createDeleteForm($newsLetter);

        return $this->render('newsletter/show.html.twig', array(
            'newsLetter' => $newsLetter,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing newsLetter entity.
     *
     */
    public function editAction(Request $request, NewsLetter $newsLetter)
    {
        $deleteForm = $this->createDeleteForm($newsLetter);
        $editForm = $this->createForm('PlateFormeBundle\Form\NewsLetterType', $newsLetter);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('newsletter_edit', array('id' => $newsLetter->getId()));
        }

        return $this->render('newsletter/edit.html.twig', array(
            'newsLetter' => $newsLetter,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a newsLetter entity.
     *
     */
    public function deleteAction(Request $request, NewsLetter $newsLetter)
    {
        $form = $this->createDeleteForm($newsLetter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($newsLetter);
            $em->flush($newsLetter);
        }

        return $this->redirectToRoute('newsletter_index');
    }

    /**
     * Creates a form to delete a newsLetter entity.
     *
     * @param NewsLetter $newsLetter The newsLetter entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(NewsLetter $newsLetter)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('newsletter_delete', array('id' => $newsLetter->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
