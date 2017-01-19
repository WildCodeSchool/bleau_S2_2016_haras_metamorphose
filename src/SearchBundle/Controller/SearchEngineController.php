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
        if(isset($_POST['requete']) && $_POST['requete'] != NULL)

        {
            // on crée une variable $requete pour faciliter l'écriture de la requête SQL,
            // mais aussi pour empêcher les éventuels malins qui utiliseraient du PHP ou du JS,
            // avec la fonction htmlspecialchars().
            $requete = htmlspecialchars($_POST['requete']);

            $limit = 25;

            // Appel du service avec laquelle on demande une requete sql
//            $em = $this->getDoctrine()->getManager();
            $repository = $this->container->get('search.service')->getSearch($requete, $limit);

            // Appel du service pour checker $requete dans multi array $repository
            $resultat = $this->container->get('multiarray.service')->in_multi_array($requete, $repository);


            // Fonction pour lire $repository en tant que tableau multi-dimensionnel
            function in_multi_array($requete, $repository)
            {
                foreach ($repository as $key => $resultat) {

                    // si $item n'est pas un tableau
                    if (!is_array ($resultat)) {

                        // si item est égal à ma requete
                        if ($resultat == $requete) return true;

                    }
                    // Item est un tableau
                    else {
                        // regarde si le tableau match avec la requete
                        //if ($key == $value) return true;

                        // See if this array matches our value
                        if (in_array ($requete, $resultat)){

                            return true;
                        }
                        // recherche ce tableau
                        else if (in_multi_array ($requete, $resultat)){

                            return true;
                        }
                    }
                }

                // il ne trouve pas de valeur
                return false;

            }






            if ($resultat != false) {

                foreach ($resultat as $resultats){

                }

                // maintenant, on va afficher la page qui va afficher les résultats
                return $this->render('@Search/Default/index.html.twig', array(
                    'resultats' => $resultats,
                ));
            }
            else {

                $this->addFlash(
                    'success',
                    'La recherche ne donne aucun résultats'
                );

                return $this->render('@PlateForme/Default/index.html.twig');
            }
        }

           // si le résultat est identique au mot recherché on affiche la page de résultats
//            if($resultat == $requete)
//
//            {
                // maintenant, on va afficher la page qui va afficher les résultats
//                return $this->render('@Search/Default/index.html.twig', array(
//                    'resultat' => $resultat,
//                ));
//            }
//         sinon on retourne à la page d'accueil avec un message
//            else
//
//            {
//                $this->addFlash(
//                    'success',
//                    'La recherche ne donne aucun résultats'
//                );
//
//                return $this->render('@PlateForme/Default/index.html.twig');
//
//            }
//        }
//        // Si le post est vide on retourne à la page d'accueil
//        else
//        {
//            $this->addFlash(
//                'success',
//                'Le champ de recherche est vide'
//            );
//
//            return $this->render('@PlateForme/Default/index.html.twig');
//        }
    }

}