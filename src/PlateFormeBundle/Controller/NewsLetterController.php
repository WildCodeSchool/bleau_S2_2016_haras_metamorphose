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
            $newsLetter->setEtat(true);
            $newsLetter->setPj(false);

            // Nécessaire pour récupérer Id newsletter, et incrémntation
            // permet d'avoir dans la méthode preUpload le n° de la NL
            // dans nom du fichier enregisté
            $em->persist($newsLetter);
            $em->flush($newsLetter);

            $newsLetter->preUpload();
            $newsLetter->upload();

            // Changement du boolean url en fonction du choix user dans form
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
            $em =$this->getDoctrine()->getManager();

            $newsLetter->setEtat(true);
            $newsLetter->setPj(false);

            // Nécessaire pour récupérer Id newsletter, et incrémntation
            // permet d'avoir dans la méthode preUpload le n° de la NL
            // dans nom du fichier enregisté
            $em->persist($newsLetter);
            $em->flush($newsLetter);

            $newsLetter->preUpload();
            $newsLetter->upload();

            // Changement du boolean url en fonction du choix user dans form
            if(empty($newsLetter->getUrl())) {
                $newsLetter->setPj(false);
            } else {
                $newsLetter->setPj(true);
            }

            $em->persist($newsLetter);

            $em->flush($newsLetter);

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
//
            if($newsletter->getUrl() != null) {
                $newsletter->removeUpload();
            }


            $em->flush();

            return $this->redirectToRoute('newsletter_index');
        } else
            return $this->redirectToRoute('newsletter_edit');
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
     * Récupération user inscrit à la newsletter.
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
        $file = $newsLetterAEnvoyer->getAbsolutePath();

                if ($newsLetterAEnvoyer->getUrl() != null){
                    $message = \Swift_Message::newInstance()
                        ->setSubject($newsLetterAEnvoyer->getObjet())
                        ->setFrom(array($this->getParameter('mailer_user') => 'Le Haras de la métamorphose'))
                        ->setBcc($destinataires)
                        ->setBody(
                            $this->renderView(
                                '@PlateForme/newsletter/corpsMailNewsletter.html.twig',
                                array(
                                    'contenu' => $newsLetterAEnvoyer->getObjet(),
                                    'titre' => $newsLetterAEnvoyer->getLibelle()
                                )
                            ),
                            'text/html'
                        )
                        ->attach(\Swift_Attachment::fromPath($file));
                }
                else{
                    $message = \Swift_Message::newInstance()
                        ->setSubject($newsLetterAEnvoyer->getObjet())
                        ->setFrom(array($this->getParameter('mailer_user') => 'Le Haras de la métamorphose'))
                        ->setBcc($destinataires)
                        ->setCc(array($this->getParameter('mailer_user') => 'Le Haras de la métamorphose'))
                        ->setBody(
                            $this->renderView(
                                '@PlateForme/newsletter/corpsMailNewsletter.html.twig',
                                array(
                                    'contenu' => $newsLetterAEnvoyer->getObjet(),
                                    'titre' => $newsLetterAEnvoyer->getLibelle()
                                )
                            ),
                            'text/html'
                        );
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
