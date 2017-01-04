<?php
/**
 * Created by PhpStorm.
 * User: juliengrima
 * Date: 04/01/2017
 * Time: 16:33
 */

namespace SearchBundle\Controller;


use FOS\JsRoutingBundle\Controller\Controller;
use PDO;

class SearchEngineController extends Controller
{

    public function searchAction(){
        // on vérifie d'abord l'existence du POST et aussi si la requete n'est pas vide.
        if(isset($_POST['requete']) && $_POST['requete'] != NULL)

        {
            $bdd= new PDO('mysql:host=localhost;dbname=haras;charset=utf8', 'root', 'root');

            // on crée une variable $requete pour faciliter l'écriture de la requête SQL,
            // mais aussi pour empêcher les éventuels malins qui utiliseraient du PHP ou du JS,
            // avec la fonction htmlspecialchars().
            $requete = htmlspecialchars($_POST['requete']);

            // la requête, que vous devez maintenant comprendre et modifier;)
            $query = $bdd->prepare("SELECT post.titre, post.contenu, categorie_plateforme.nom 
                                    FROM post, categorie_plateforme
                                    WHERE post.titre, post.contenu, categorie_plateforme.nom  
                                    LIKE '%$requete%' 
                                    ORDER BY id DESC") or die ();

            //on execute la requete
            $query->execute(array(
                'requete' => $requete
            ));

            //$donnees = $reponse->fetch();

            // on utilise la fonction mysql_num_rows pour compter les résultats pour vérifier
            $nb_resultats = mysql_num_rows($query);

            // si le nombre de résultats est supérieur à 0, on continue
            if($nb_resultats != 0)

            {
                // maintenant, on va afficher les résultats et la page qui les donne ainsi que
                // leur nombre, avec un peu de code HTML pour faciliter la tâche.
                return $this->render('@Search/Default/index.html.twig', array(
                    'query' => $query,
                ));
            }
            // sinon on retourne à la page d'accueil avec un message
            else

            {
                return $this->render('@PLateForme/Default/index.html.twig');

//                $this->addFlash(
//                    'success',
//                    'La recherche ne donne aucun résultats'
//                );
            }
        }
        // Si le post est vide on retourne à la page d'accueil
        else
        {
            return $this->render('@PLateForme/Default/index.html.twig');

//            $this->addFlash(
//                'success',
//                'Le champ de recherche est vide'
//            );
        }

    }
}