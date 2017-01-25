<?php
/**
 * Created by PhpStorm.
 * User: juliengrima
 * Date: 04/01/2017
 * Time: 16:33
 */

namespace SearchBundle\Controller;

use SearchBundle\SearchBundle;
use SearchBundle\Services\SearchService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;

class SearchEngineController extends Controller
{
    // METHODE DE RECHERCHE PAR MOTS
    public function searchAction(Request $request)
    {
        // on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
        if(isset($_POST['requete']) && $_POST['requete'] != NULL) {
            // on crée une variable $requete pour faciliter l'écriture de la requête de SearchService,
            // mais aussi pour empêcher les éventuels malins qui utiliseraient du PHP ou du JS,
            // avec la fonction htmlspecialchars().

            $requete_str = htmlspecialchars($_POST['requete']);
            $requete = strtolower($requete_str);


            $limit = 25;

            // Appel du service avec laquelle on demande une requete Dql
            $champTitre = $this->container->get ('search.service')->getSearchPostTitre ($requete, $limit);

            // Si tout les services repondent favorablement
            if (empty($champTitre)) {

                // Appel du service avec laquelle on demande une requete Dql
                $champContenu = $this->container->get ('search.service')->getSearchPostContenu ($requete, $limit);
//                dump($requete, $table); die;

                if (empty($champContenu)) {

                    $this->addFlash (
                        'success',
                        '!!! Le mot recherché n\'a pas été trouvé !!!'
                    );

                    return $this->render ('@Search/Default/index.html.twig', array (
                        'resultats' => '',
                    ));
                } else {

//                    $resultats = $this->getDoctrine()->getRepository('ForumBundle:Post')->findBy($table);

                    // maintenant, on va afficher la page qui va afficher les résultats
                    return $this->render ('@Search/Default/index.html.twig', array (
                        'resultats' => $champContenu,
                    ));
                }
            }
            else {
//                    $resultats = $this->getDoctrine()->getRepository('ForumBundle:Post')->findBy($table);

                // maintenant, on va afficher la page qui va afficher les résultats
                return $this->render ('@Search/Default/index.html.twig', array (
                    'resultats' => $champTitre,
                ));
            }
        }
        else {

            $this->addFlash (
                'success',
                '!!! Pas de mot inséré !!!'
            );

            return $this->render ('@Search/Default/index.html.twig', array (
                'resultats' => '',
            ));

        }
    }

}