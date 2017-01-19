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
    public function in_multi_array($requete, $repository)
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

}