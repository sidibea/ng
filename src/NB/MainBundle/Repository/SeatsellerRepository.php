<?php

namespace NB\MainBundle\Repository;

/**
 * SeatsellerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SeatsellerRepository extends \Doctrine\ORM\EntityRepository
{
    public function getTotal(){

        $qb = $this->createQueryBuilder('s');
        $qb->setMaxResults( 1 );
        $qb->orderBy('s.id', 'DESC');
        return $qb->getQuery()->getSingleResult();
    }
}
