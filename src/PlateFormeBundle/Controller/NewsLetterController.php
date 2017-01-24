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

        return $this->render('@PlateForme/newsletter/index.html.twig', array(
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
            $newsLetter->setDateCreation(new \DateTime());
            $newsLetter->setEtat(false);

            if(empty($newsLetter->getUrl())) {
                $newsLetter->setPj(false);
            } else {
                $newsLetter->setPj(true);
            }

            $em->persist($newsLetter);
            $em->flush($newsLetter);

            return $this->redirectToRoute('newsletter_show', array('id' => $newsLetter->getId()));
        }

        return $this->render('@PlateForme/newsletter/new.html.twig', array(
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

        return $this->render('@PlateForme/newsletter/show.html.twig', array(
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
//            TODO FAIRE MISE A JOUR PJ SI AJOUT DANS L'EDIT

            return $this->redirectToRoute('newsletter_index');
        }

        return $this->render('@PlateForme/newsletter/edit.html.twig', array(
            'newsLetter' => $newsLetter,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a newsLetter entity.
     *
     */
    public function deleteAction($id)
    {
        if ($id) {
            $em = $this->getDoctrine()->getManager();
            $newsletter = $em->getRepository('PlateFormeBundle:NewsLetter')->findOneById($id);
            $em->remove($newsletter);
            //$em->remove($url);
            $em->flush();

            return $this->redirectToRoute('newsletter_index');
        } else
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
            ->add('submit', 'submit', array('label' => 'Delete',
                'attr' => array(
                    'onclick' => 'return confirm("Êtes-vous sûr ?")'
                )))
            ->getForm()
        ;
    }


    /**
     * Creates a form to delete a newsLetter entity.
     *
     */
    protected function getUsersMail(){
        $em = $this->getDoctrine()->getManager();
        // Inscrit dans table newsletter (=pas membre du forum)
        $users_actifs = $em->getRepository('PlateFormeBundle:AbonnementNews')->findBy(array('actif' => true));
        // Inscrit dans table user (=membre du forum)
        $userForum = $em->getRepository('UserBundle:user')->findBy(array('newsletter' => true));
        $destinataires = '';

        foreach ($users_actifs as $key => $abonnementNews){
            if ($destinataires == '')
                $destinataires = $abonnementNews->getEmail();
            else
                $destinataires .= ', ' . $abonnementNews->getEmail();
        }

        foreach ($userForum as $key => $user){
            if ($destinataires == '')
                $destinataires = $user->getEmail();
            else
                $destinataires .= ', ' . $user->getEmail();
        }

        return explode(", ", $destinataires);
    }

    /**
     * envoye newsletter.
     *
     */
    public function sendMailAction($id){

        $em = $this->getDoctrine()->getManager();
        $newsLetterAEnvoyer = $em->getRepository('PlateFormeBundle:NewsLetter')->findOneById($id);
        $destinataires = $this->getUsersMail();
        $file = $newsLetterAEnvoyer->getWebPath();
        $desabonnement = '<p style="margin-top: 60px; text-align: center;">Pour vous desabonner, <a href="' . __DIR__ . $this->generateUrl('desabonnement_newsletter') .'">cliquez ici</a><p>';

            $message = \Swift_Message::newInstance()
                ->setSubject($newsLetterAEnvoyer->getLibelle())
                ->setFrom(array($this->getParameter('mailer_user') => 'Haras'))
                ->setCc(array($this->getParameter('mailer_user') => 'Haras'))
                ->setBcc($destinataires)
//                ->setBody(
//                    $newsLetterAEnvoyer->getObjet() );
//                    $desabonnement, 'text/html')
                ->setBody(
                    $this->renderView(
                        '@PlateForme/newsletter/corpsMailNewsletter.html.twig',
                        array(
                            'contenu' => $newsLetterAEnvoyer->getObjet(),
                            'titre' => $newsLetterAEnvoyer->getLibelle(),
                        )
                    ) .
                    $desabonnement,
                    'text/html'
                );

                   // Test l'existance des pièces jointes
                    if ($newsLetterAEnvoyer->getUrl() != null)
                    {
                        //  ->attach(\Swift_Attachment::fromPath($file));
                    } else {

                    }

        $this->get('mailer')->send($message);

        $newsLetterAEnvoyer->setEtat(true);
        $newsLetterAEnvoyer->setDateEnvoie(new \DateTime());

        $em->persist($newsLetterAEnvoyer);
        $em->flush();

        $this->addFlash('notice', 'Newsletter ' . $newsLetterAEnvoyer->getLibelle() . ' a été expédiée');

        return $this->redirectToRoute('newsletter_index');
    }

}
