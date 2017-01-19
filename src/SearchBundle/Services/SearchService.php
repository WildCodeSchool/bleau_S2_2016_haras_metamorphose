<?php
/**
 * Created by PhpStorm.
 * User: juliengrima
 * Date: 19/01/2017
 * Time: 09:39
 */

namespace SearchBundle\Services;

use ForumBundle\Entity\Post;
use ForumBundle\Entity\CategoriePlateforme;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;

class SearchService extends Controller
{
    protected $container;

    public function __construct(Container $container) {
        $this->container = $container;

    }

    public function getSearch($limit, $requete) // CategoriePlateforme $categoriePlateforme
    {
//        Alias 's' = class searchrepository
//        Alias 'p' = jointure parent_id

        $repository = $this->getDoctrine()
            ->getRepository('ForumBundle:Post');


        $qb = $repository->createQueryBuilder('s')
            ->select('s.titre');
//            ->orderBy('s.date_create', 'DESC')
//            ->setMaxResults( $limit );
        return $qb->getQuery()->getResult();
    }

//    public function findCatPlat ($limit, $requete, Post $post)
//    {
//        // la requête, que vous devez maintenant comprendre et modifier;)
//            $query = $qb->prepare("SELECT titre, contenu, nom
//                                    FROM post, categorie_plateforme
//                                    WHERE post.parent_id = categorie_plateforme.parent_id
//                                    AND contenu = $requete
//                                    OR titre = $requete
//                                    OR nom = $requete
//                                    ORDER BY post.id DESC") OR DIE ();
//
//            return $query->getQuery()->getResult();
//    }
}