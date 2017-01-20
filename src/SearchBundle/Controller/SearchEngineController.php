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
            $requete_str = htmlspecialchars($_POST['requete']);
            $requete_strtolower = strtolower($requete_str);
            $requete = $requete_strtolower;

            $limit = 25;

            // Appel du service avec laquelle on demande une requete sql
            $titres = $this->container->get('search.service')->getSearchPostTitre($requete, $limit);

            // Appel du service pour checker $requete dans multi array $repository
            $resultat = $this->container->get('multiarray.service')->multiArray($titres, $requete);

            if ($resultat != false){

                $resultats = $this->getDoctrine()->getRepository('ForumBundle:Post')->findBy($resultat);

                // maintenant, on va afficher la page qui va afficher les résultats
                return $this->render('@Search/Default/index.html.twig', array(
                    'resultats' => $resultats,
                ));

            }
            else {

                    $this->addFlash(
                        'success',
                        '!!! Le mot recherché n\'a pas été trouvé !!!'
                    );

                return $this->render('@Search/Default/index.html.twig', array(
                    'resultats' => '',
                ));

//                $this->addFlash(
//                    'success',
//                    'La recherche ne donne aucun résultats'
//                );

//                return $this->render('@PlateForme/homepage_plateforme.html.twig');
            }
        }
    }

}