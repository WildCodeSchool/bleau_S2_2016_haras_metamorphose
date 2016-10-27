<?php

namespace HarasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HarasBundle\Entity\Media;
use HarasBundle\Form\MediaType;

/**
 * Media controller.
 *
 */
class MediaController extends Controller
{

    private function uploadMediaFileAndSetPath(Media $media, $form)
    {
		$file = $form->get('file')->getData();
        $name = $media->getName();
        $extension = $file->guessExtension();
        $media->setPath('bundles/haras/images/'.$name.'.'.$extension);
        $file->move($this->getParameter('medias_directory'),$name.'.'.$extension);
    }

    /**
     * Lists all Media entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $media = $em->getRepository('HarasBundle:Media')->findAll();

        return $this->render('media/index.html.twig', array(
            'media' => $media,
        ));
    }

    /**
     * Creates a new Media entity.
     *
     */
    public function newAction(Request $request)
    {
        $media = new Media();
        $form = $this->createForm('HarasBundle\Form\MediaType', $media);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->uploadMediaFileAndSetPath($media, $form);
            // persist entity in db
            $em = $this->getDoctrine()->getManager();
            $em->persist($media);
            $em->flush();

            return $this->redirectToRoute('media_show', array('id' => $media->getId()));
        }

        return $this->render('media/new.html.twig', array(
            'medium' => $media,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Media entity.
     *
     */
    public function showAction(Media $medium)
    {
        $deleteForm = $this->createDeleteForm($medium);

        return $this->render('media/show.html.twig', array(
            'medium' => $medium,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Media entity.
     *
     */
    public function editAction(Request $request, Media $media)
    {
        $deleteForm = $this->createDeleteForm($media);
        $editForm = $this->createForm('HarasBundle\Form\MediaType', $media);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->uploadMediaFileAndSetPath($media, $editForm);
            $em = $this->getDoctrine()->getManager();
            $em->persist($media);
            $em->flush();

            return $this->redirectToRoute('media_index');
        }

        return $this->render('media/edit.html.twig', array(
            'medium' => $media,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Media entity.
     *
     */
    public function deleteAction(Request $request, Media $medium)
    {
        $form = $this->createDeleteForm($medium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // supression du fichier en même temps que l'entité
            $fileName = explode('images/',$medium->getPath());
            unlink($this->getParameter('medias_directory').$fileName[1]);
            $em = $this->getDoctrine()->getManager();
            $em->remove($medium);
            $em->flush();
        }

        return $this->redirectToRoute('media_index');
    }

    /**
     * Creates a form to delete a Media entity.
     *
     * @param Media $medium The Media entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Media $medium)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('media_delete', array('id' => $medium->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
