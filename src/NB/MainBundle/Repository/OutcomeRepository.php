<?php

namespace NB\MainBundle\Repository;

/**
 * OutcomeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OutcomeRepository extends \Doctrine\ORM\EntityRepository
{
    public function getSolde($users){
        $queryBuilder = $this
            ->createQueryBuilder('o')
            ->innerJoin('o.seatseller', 'u')
            ->select('SUM(o.montant) As solde')
            ->where('u.id = :users')
            ->setParameter('users', $users);
        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();
        // On récupère les résultats à partir de la Query
        $results = $query->getResult();

        return $results;
    }
}
