<?php

namespace Souk\BackBundle\Repository;

/**
 * CommandesRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommandesRepository extends \Doctrine\ORM\EntityRepository
{
    public function attentesCommandesCommercial($id)
    {
        return $this->createQueryBuilder('p')
            // p.category refers to the "category" property on product
            ->innerJoin('p.annonce', 'a')
            // selects all the category data to avoid the query
            ->addSelect('a')
            ->andWhere('a.commercial = :id')
            ->andWhere('p.etat = 0')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
    public function confirmesCommandesCommercial($id)
    {
        return $this->createQueryBuilder('p')
            // p.category refers to the "category" property on product
            ->innerJoin('p.annonce', 'a')
            // selects all the category data to avoid the query
            ->addSelect('a')
            ->andWhere('a.commercial = :id')
            ->andWhere('p.etat = 1')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
    public function tousCommandesCommercial($id)
    {
        return $this->createQueryBuilder('p')
            // p.category refers to the "category" property on product
            ->innerJoin('p.annonce', 'a')
            // selects all the category data to avoid the query
            ->addSelect('a')
            ->andWhere('a.commercial = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getResult();
    }
}
