<?php

namespace PlateFormeBundle\Services;

class CsvRepository{

    private $em;

    public function __construct(\Doctrine\ORM\EntityManager $em)
    {
        $this->em = $em;
    }

    public function getFields($linkEntity, $fieldsEntity){
        $repository = $this->em->getRepository($linkEntity);

        $qb = $repository->createQueryBuilder('r')
            ->select('r.' . $fieldsEntity[0]);
        for ($i=1; $i < count($fieldsEntity); $i++){
            $qb->addSelect('r.' . $fieldsEntity[$i]);
        }
        return $qb->getQuery()->getScalarResult();
    }
}