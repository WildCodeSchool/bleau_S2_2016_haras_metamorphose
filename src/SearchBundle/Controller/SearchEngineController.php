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
var_dump($requete);
            // Appel du repository avec laquelle on demande une requete sql
            $em = $this->getDoctrine()->getManager();
            $repository = $this->container->get('search.service')->getSearch($requete, $limit);
var_dump($repository);
            $resultat = in_array($requete, $repository, true); //$epository = tableau associatif
var_dump($resultat); die;

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