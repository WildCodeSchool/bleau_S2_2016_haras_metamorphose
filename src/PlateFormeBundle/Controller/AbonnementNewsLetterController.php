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
    public function newAction(Request $request)
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
        }
        // User present dans la base => mise à jour du boolean newsletter = true
        else {
            $users_existants->setNewsletter(true);
            $em->persist($users_existants);
        }

        $this->addFlash(
            'notice',
            'Votre demande a été enregistrée'
        );
        
        $em->flush();
        return $this->redirectToRoute('plate_forme_homepage');
    }
}