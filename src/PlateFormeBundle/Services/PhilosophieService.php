<?php
/**
 * Created by PhpStorm.
 * User: juliengrima
 * Date: 27/01/2017
 * Time: 11:23
 */

namespace PlateFormeBundle\Services;

use ForumBundle\ForumBundle;
use ForumBundle\Entity\Post;
use ForumBundle\Entity\CategoriePlateforme;
use PlateFormeBundle\Entity\Philosophie;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class PhilosophieService extends Controller
{
    protected $container;

    public function __construct(Container $container) {
        $this->container = $container;

    }

    public function getPhiloService()
    {

        // Création d'un nouvel objet Philosophie en cas de BdD vide
        // Règle de gestion, un seul élément Philosophie dans la BdD,
        // pas de possibilité d'ajouter un nouvel élément.
        $em = $this->getDoctrine()->getManager();
        // Variable sans S parce que unique
        $philosophie = $em->getRepository('PlateFormeBundle:Philosophie')->findAll();

        if (empty($philosophie)) {

            return $philo = $this->container->get('templating')->render('@PlateForme/layout.html.twig', array(
                'philosophie' => 'Champ vide pour le moment !'
            ));

        }
        else {

            return $philo = $this->container->get('templating')->render('@PlateForme/layout.html.twig', array(
                'philosophie' => $philosophie
            ));
        }
    }
}