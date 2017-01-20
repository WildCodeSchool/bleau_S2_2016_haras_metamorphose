<?php
/**
 * Created by PhpStorm.
 * User: juliengrima
 * Date: 19/01/2017
 * Time: 15:43
 */

namespace SearchBundle\Services;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class MultiArrayService extends Controller
{
    protected $container;

    public function __construct(Container $container) {
        $this->container = $container;

    }

    // Fonction pour lire $repository en tant que tableau multi-dimensionnel
    public function multiArray($titres, $requete){

            $result = array();
            foreach ($titres as $key => $titre){

                /*--- Si $titre correspond a la requete de départ il check uniquement le 1er tableau---*/
                if (in_array($requete, $titre)){
                    $result['titre'] = $titre['titre'];

                    return $titre;
                }
                /*--- Sinon on boucle sur le 2nd tableau et on check la valeur de retour est egale à la requete---*/
                else{
                    foreach ($titres as $valeur){

                        $array = in_array($requete, $valeur);
                        $requete_str = '/' . $requete . '/'; // il faut inverser les lignes
                        // car sinon forcément on ne peut trouver la valeur dans in_array
                        preg_match($requete_str, $array);
                        $result['contenu'] = $array;
                    }
                }
            }
            return $result;
    }

}