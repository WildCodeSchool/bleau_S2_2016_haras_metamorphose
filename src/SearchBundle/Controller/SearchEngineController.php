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

            // Appel du service avec lequelle on demande une requete Dql du champ titre
            $champTitre = $this->container->get('search.service')->getSearchPostTitre ($requete);

            // Si le champ titre ne retourne aucune valeur
            if (empty($champTitre)) {

                $this->addFlash (
                    'success',
                    '!!! Le mot recherché n\'a pas été trouvé !!!'
                );

                return $this->render ('@Search/Default/index.html.twig', array (
                    'resultats' => '',
                ));

            }
            // sinon si le champ titre contient une valeur on retourne un resultat
            else {

                // maintenant, on va afficher la page qui va afficher les résultats
                return $this->render ('@Search/Default/index.html.twig', array (
                    'resultats' => $champTitre,
                ));
            }
        }
        else {

            $this->addFlash (
                'success',
                '!!! Attention, n\'oubliez pas d\écrire un mot !!!'
            );

            return $this->render ('@Search/Default/index.html.twig', array (
                'resultats' => '',
            ));

        }
    }

}