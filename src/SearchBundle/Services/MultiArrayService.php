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
    public function multiArray($repositories, $requete){

        $result = array();
        foreach ($repositories as $repository){
            if (in_array($requete, $repository)){
                $result[] = $requete;
            }
        }
        return $result;
    }

}