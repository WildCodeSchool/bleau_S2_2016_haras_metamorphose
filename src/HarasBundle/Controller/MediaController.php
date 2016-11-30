<?php

namespace HarasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\Form\Extension\Core\Type\FileType;
use HarasBundle\Entity\Article;
use HarasBundle\Entity\Media;
use HarasBundle\Form\MediaType;

/**
 * Media controller.
 *
 */
class MediaController extends Controller
{
    /**
     * Displays a form to edit an existing Media entity.
     *
     */
    public function editAction(Request $request, Media $media)
    {
        $editForm = $this->createForm('HarasBundle\Form\MediaType', $media);
        $editForm->add('file', FileType::class, array(
                'label' => 'File to download: ',
                'data_class' => null,
                'required' => false
            ));
		$editForm->handleRequest($request);
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            if($media->getFile() != null)	// Si le fichier du media a été changé
                $this->get('media.interface')->mediaUpload($media);

            $em = $this->getDoctrine()->getManager();
            $em->persist($media);
            $em->flush();

			// On redirige vers la page associée (car l'edit de media n'est appelé seul que lorsqu'il est directement dans la page
			// Dans un article le chemin de retour sera celui de l'article.
			return $this->redirectToRoute('page_show', [
				'name' => $media->getPages()[0]->getName(),
			]);
		}

        return $this->render('media/edit.html.twig', array(
            'page' => $media->getPages()[0],
            'medium' => $media,
            'edit_form' => $editForm->createView(),
        ));
    }
}
