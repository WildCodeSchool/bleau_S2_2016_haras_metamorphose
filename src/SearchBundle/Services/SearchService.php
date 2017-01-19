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


class SearchService
{

    public function findPost($limit, $requete, Post $post) // CategoriePlateforme $categoriePlateforme
    {
//        Alias 's' = class searchrepository
//        Alias 'p' = jointure parent_id


        $qb = $this->createQueryBuilder('s')
            ->select('s.titre')
            ->orderBy('s.date_create', 'DESC')
            ->setMaxResults( $limit );
        return $qb->getQuery()->getResult();
    }
}