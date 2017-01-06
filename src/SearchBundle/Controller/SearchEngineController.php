<?php
/**
 * Created by PhpStorm.
 * User: juliengrima
 * Date: 04/01/2017
 * Time: 16:33
 */

namespace SearchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class SearchEngineController extends Controller
{

    public function searchAction(){

        $em = $this->getDoctrine()->getManager();

        // on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
        if(isset($_POST['requete']) && $_POST['requete'] != NULL)

        {
            // on crée une variable $requete pour faciliter l'écriture de la requête SQL,
            // mais aussi pour empêcher les éventuels malins qui utiliseraient du PHP ou du JS,
            // avec la fonction htmlspecialchars().
            $requete = htmlspecialchars($_POST['requete']);

            $result = $em->getRepository('SearchBundle:Search')->findByRequete($query);

            //$donnees = $reponse->fetch();

            // on utilise la fonction mysql_num_rows pour compter les résultats pour vérifier
            $nb_resultats = $query->rowCount();

            // si le nombre de résultats est supérieur à 0, on continue
            if($nb_resultats != 0)

            {
                // maintenant, on va afficher les résultats et la page qui les donne ainsi que
                // leur nombre, avec un peu de code HTML pour faciliter la tâche.
                return $this->render('@Search/Default/index.html.twig', array(
                    'query' => $query,
                    'nb_resultats' => $nb_resultats,
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