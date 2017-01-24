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
use ForumBundle\ForumBundle;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface as Container;


class SearchService extends Controller
{
    protected $container;

    public function __construct(Container $container) {
        $this->container = $container;

    }

    public function getSearchPostTitre($limit){
//        Alias 's' = class searchrepository

        $repository = $this->getDoctrine()
            ->getRepository('ForumBundle:Post');

        $qb = $repository->createQueryBuilder('s')
            ->select('s.titre', 's.contenu')
            ->orderBy('s.dateCreate', 'ASC');
//            ->setMaxResults( $limit );

        $qb_str = strtolower($qb);

        return $qb_str = $qb->getQuery()->getResult();
    }

}