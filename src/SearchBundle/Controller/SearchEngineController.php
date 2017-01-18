<?php
/**
 * Created by PhpStorm.
 * User: juliengrima
 * Date: 04/01/2017
 * Time: 16:33
 */

namespace SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use ForumBundle\Entity\Post;
use ForumBundle\Entity\CategoriePlateforme;
use Symfony\Component\HttpFoundation\Request;
use SearchBundle\Repository\SearchRepository;

class SearchEngineController extends Controller
{
    // METHODE DE RECHERCHE PAR MOTS
    public function searchAction(Request $request, Entity\Post $post, Entity\CategoriePlateforme $categoriePlateforme)
    {
        // on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
        if(isset($_POST['requete']) && $_POST['requete'] != NULL)

        {
            // on crée une variable $requete pour faciliter l'écriture de la requête SQL,
            // mais aussi pour empêcher les éventuels malins qui utiliseraient du PHP ou du JS,
            // avec la fonction htmlspecialchars().
            $requete = htmlspecialchars($_POST['requete']);


            // Appel du repository avec laquelle on demande une requete sql
            $repository = $this->getDoctrine()->getManager()->getRepository(SearchRepository::class);

            // on boucle pour récuperer le résultat de repository
            foreach ($repository as $resultats) {

                $resultat = $repository->findBy($requete);

            }


            // si le nombre de résultats est supérieur à 0, renvoie un résultat
            if($resultat != 0)

            {
                // maintenant, on va afficher les résultats et la page qui les donne ainsi que
                // leur nombre, avec un peu de code HTML pour faciliter la tâche.
                return $this->render('@Search/Default/index.html.twig', array(
                    'resultat' => $resultat,
                ));
            }
            // sinon on retourne à la page d'accueil avec un message
            else

            {
//                $this->addFlash(
//                    'success',
//                    'La recherche ne donne aucun résultats'
//                );

                return $this->render('@PlateForme/Default/index.html.twig');

            }
        }
        // Si le post est vide on retourne à la page d'accueil
        else
        {
//            $this->addFlash(
//                'success',
//                'Le champ de recherche est vide'
//            );

            return $this->render('@PlateForme/Default/index.html.twig');
        }
    }

}