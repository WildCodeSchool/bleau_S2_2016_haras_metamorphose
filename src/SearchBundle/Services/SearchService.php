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

class SearchService extends Controller
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

    public function findCatPlat ($message = 'Access Denied.', \Exception $previous = null)
    {
        // la requête, que vous devez maintenant comprendre et modifier;)
            $query = $bdd->prepare("SELECT titre, contenu, nom
                                    FROM post, categorie_plateforme
                                    WHERE post.parent_id = categorie_plateforme.parent_id
                                    AND contenu = $requete
                                    OR titre = $requete
                                    OR nom = $requete
                                    ORDER BY post.id DESC") OR DIE ();
    }
}