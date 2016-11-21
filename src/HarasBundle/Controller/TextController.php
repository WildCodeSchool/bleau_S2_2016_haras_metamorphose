<?php

namespace HarasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HarasBundle\Entity\Text;
use HarasBundle\Entity\Page;
use HarasBundle\Form\TextType;

/**
 * Text controller.
 *
 */
class TextController extends Controller
{
    /**
     * Displays a form to edit an existing Text entity.
     *
     */
    public function editAction(Request $request, Page $page, Text $text)
    {
        $editForm = $this->createForm('HarasBundle\Form\TextType', $text);

        if($page->getName() == 'homepage')
        {
            $editForm
				->add('textFr', 'textarea', array(
					'attr' => array('maxlength' => 255)
					))
            	->add('textEn', 'textarea', array(
					'attr' => array('maxlength' => 255)
					))
			;
        }

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($text);
            $em->flush();

            return $this->redirectToRoute('page_show', array(
                'name' => $page->getName()
                ));
        }
        $editForm->remove('pages');

        return $this->render('text/edit.html.twig', array(
            'text' => $text,
            'page' => $page,
            'edit_form' => $editForm->createView(),
        ));
    }
}
