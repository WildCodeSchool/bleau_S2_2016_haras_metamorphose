<?php

namespace PlateFormeBundle\Controller;

use PlateFormeBundle\Entity\AbonnementNews;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Newsletter controller.
 *
 */
class AbonnementNewsLetterController extends Controller
{
    /**
     * Creates a new AbonnementNewsLetter entity.
     *
     */
    public function abonnementNewsletterAction(Request $request)
    {
        // Connexion à la BdD
        $em = $this->getDoctrine()->getManager();
        $email = $request->request->get('email');

        $users_existants = $em->getRepository('UserBundle:User')->findOneByEmail($email);

        // User non présent dans la BdD, incription dans table AbonnementNews
        // de son email
        if ($users_existants == null) {
            $user = new AbonnementNews();
            $user->setEmail($email);
            $user->setActif(true);
            $user->setDateInscription(new \DateTime());

            $em->persist($user);

            // Génération email de confirmation
            $message = \Swift_Message::newInstance()
                ->setSubject('Inscription à la newsletter du Haras de la métamorphose')
                ->setFrom(array($this->getParameter('mailer_user') => 'Le Haras de la métamorphose'))
                ->setTo($user->getEmail())
                ->setBody('<p> Merci pour votre inscrption à notre newsletter </p>',
                    'text/html'
                );
        }
        // User present dans la base => mise à jour du boolean newsletter = true
        else {
            $users_existants->setNewsletter(true);
            $em->persist($users_existants);

            // Génération email de confirmation
            $message = \Swift_Message::newInstance()
                ->setSubject('Inscription à la newsletter du Haras de la métamorphose')
                ->setFrom(array($this->getParameter('mailer_user') => 'Le Haras de la métamorphose'))
                ->setTo($users_existants->getEmail())
                ->setBody('<p> Merci pour votre inscrption à notre newsletter </p>',
                    'text/html'
                );
        }



        $this->get('mailer')->send($message);


        $this->addFlash('notice', 'Votre demande a été enregistrée');

        $em->flush();
        return $this->redirectToRoute('plate_forme_homepage');
    }



    /**
     * Desabonnement  AbonnementNewsLetter.
     *
     */
    public function desabonnementNewsletterAction(Request $request){

        $em = $this->getDoctrine()->getManager();
        $mail = $request->request->get('email');

        if ($mail != null){
            // Inscrit dans table newsletter abonné
            $user = $em->getRepository('PlateFormeBundle:AbonnementNews')->findOneByEmail($mail);
            // Inscrit membre du forum
            $userForum = $em->getRepository('UserBundle:user')->findOneByEmail($mail);

            /*if(empty($user) and empty($userForum)) {
                $this->addFlash('notice', 'Cette adresse n\'est pas répértoriée' );
            }*/

            if(!empty($user)) {
                $user->setActif(false);
                $em->persist($user);

                // Génération email de confirmation
                $message = \Swift_Message::newInstance()
                    ->setSubject('Désinscription à la newsletter du Haras de la métamorphose')
                    ->setFrom(array($this->getParameter('mailer_user') => 'Le Haras de la métamorphose'))
                    ->setTo($user->getEmail())
                    ->setBody('<p>Votre demande de désinscrption à notre newsletter à bien été prise en compte</p>',
                        'text/html'
                    );
            }
            elseif (!empty($userForum)) {
                $userForum->setNewsletter(false);
                $em->persist($userForum);

                // Génération email de confirmation
                $message = \Swift_Message::newInstance()
                    ->setSubject('Désinscription à la newsletter du Haras de la métamorphose')
                    ->setFrom(array($this->getParameter('mailer_user') => 'Le Haras de la métamorphose'))
                    ->setTo($userForum->getEmail())
                    ->setBody('<p>Votre demande de désinscrption à notre newsletter à bien été prise en compte</p>',
                        'text/html'
                    );
            } else {
                $this->addFlash('notice', 'Cette adresse n\'est pas répértoriée' );
                return $this->render('@PlateForme/newsletter/desabonnementlNewsletter.html.twig');
            }

            $this->get('mailer')->send($message);

            $this->addFlash('notice', 'Votre demande a été enregistrée');
            $em->flush();

           return $this->redirectToRoute('newsletter_index');
        }
        else{

            return $this->render('@PlateForme/newsletter/desabonnementlNewsletter.html.twig');
        }

    }

    /**
     * Lists all abonnes newsLetter .
     *
     */
    public function indexAbonnesAction()
    {
        $em = $this->getDoctrine()->getManager();
        // Inscrit dans table newsletter (=pas membre du forum)
        $userNL = $em->getRepository('PlateFormeBundle:AbonnementNews')->findBy(array('actif' => true));
        // Inscrit dans table user (=membre du forum)
        $userForum = $em->getRepository('UserBundle:user')->findBy(array('newsletter' => true));

        $titre = 'Abonnés à la newsletter';
        $titre1 = 'Membres du forum';
        $titre2 = 'Non membres du forum';
        return $this->render('@PlateForme/newsletter/indexAbonne.html.twig', array(
            'abonnesForums' => $userForum,
            'abonnesNLs' => $userNL,
            'titre' => $titre,
            'titre1' =>$titre1,
            'titre2' =>$titre2,
        ));
    }

    public function indexAbonnesInactifAction()
    {
        $em = $this->getDoctrine()->getManager();
        // Inscrit dans table newsletter (=pas membre du forum)
        $userNL = $em->getRepository('PlateFormeBundle:AbonnementNews')->findBy(array('actif' => false));
        // Inscrit dans table user (= membre du forum)
        $userForum = $em->getRepository('UserBundle:user')->findBy(array('newsletter' => false));

        $titre = 'Désinscrits de la newsletter';
        $titre1 = 'Membres du forum';
        $titre2 = 'Non membres du forum';
        return $this->render('@PlateForme/newsletter/indexAbonne.html.twig', array(
            'abonnesForums' => $userForum,
            'abonnesNLs' => $userNL,
            'titre' => $titre,
            'titre1' =>$titre1,
            'titre2' =>$titre2,
        ));
    }
}