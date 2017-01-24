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

        foreach ($titres as $key => $titre){

            /*--- Si $titre correspond a la requete de départ il check uniquement le 1er tableau---*/
//            if (in_array($requete, $titre)){

                $requete_str = '/' . $requete . '/';

                foreach ($titres as $valeur) {

                    if (preg_match ($requete_str, $valeur['contenu'], $resultat)) {

//                        $resultat['contenu'] = $valeur;

                        dump ($valeur, $resultat);
                        die();

                        // on renvois la valeur du titre en fonction du mot trouvé dans le contenu
                        return $valeur;
                    }
                }
//            }
        }
    }
}