<?php
/**
 * Created by PhpStorm.
 * User: juliengrima
 * Date: 19/01/2017
 * Time: 09:39
 */

namespace SearchBundle\Services;

use ForumBundle\ForumBundle;
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

    public function getSearchPostTitre($requete){
//        Alias 's' = class searchrepository
//        Alias 'c' = categorie

        $repository = $this->getDoctrine()
            ->getRepository('ForumBundle:Post');

        $qb = $repository->createQueryBuilder('p')
            ->select('p.titre, p.contenu, p.id, p.dateCreate, c.nom, c.id')
            ->join('p.categorie', 'c')
            ->where('REGEXP(p.titre, :regexp) != false')
            ->orWhere('REGEXP(p.contenu, :regexp)  != false')
            ->setParameter('regexp', $requete)
            ->orderBy('p.dateCreate', 'DESC');
        return $qb->getQuery()->getResult();
    }
}