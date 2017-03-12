<?php

namespace NB\MainBundle\Repository;

/**
 * ReservationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ReservationRepository extends \Doctrine\ORM\EntityRepository
{
    public function getTotalRows(){

        $qb = $this->createQueryBuilder('r');
        $qb->setMaxResults( 1 );
        $qb->orderBy('r.id', 'DESC');
      //  dump($qb->getQuery()->getSingleResult()); exit;
        return $qb->getQuery()->getSingleResult();
    }

    public function getUsersReservation($user, $limit = null){

        if($limit != null){
            $queryBuilder = $this
                ->createQueryBuilder('r')
                ->where('r.channel =:channel')
                ->andWhere('r.channel_id = :channelId')
                ->setParameters(array('channel' => 'web', 'channelId' => $user->getId()))
                ->orderBy('r.dateAdd')
                ->setMaxResults($limit)

            ;
            // On récupère la Query à partir du QueryBuilder
            $query = $queryBuilder->getQuery();
            // On récupère les résultats à partir de la Query
            $results = $query->getResult();

            return $results;
        }else{
            $queryBuilder = $this
                ->createQueryBuilder('r')
                ->where('r.channel =:channel')
                ->andWhere('r.channel_id = :channelId')
                ->setParameters(array('channel' => 'web', 'channelId' => $user->getId()))
                ->orderBy('r.dateAdd')
                ->setParameters(array('channel' => 'web', 'channelId' => $user->getId()))
            ;
            // On récupère la Query à partir du QueryBuilder
            $query = $queryBuilder->getQuery();
            // On récupère les résultats à partir de la Query
            $results = $query->getResult();

            return $results;
        }

    }


    public function getBookedSeats($bus, $doj)
    {
        $queryBuilder = $this
            ->createQueryBuilder('r')
            ->leftJoin('r.travel', 't')
            ->select('SUM(r.seats) As booked')
            ->where('t.bus =:bus')
            ->andWhere('r.doj = :doj')
            ->setParameters(array('bus' => $bus, 'doj' => $doj));
        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();
        // On récupère les résultats à partir de la Query
        $results = $query->getResult();
        $results = $results[0];


      // var_dump($results['booked']); exit;
        return $results['booked'];

    }

    public function findByTicketNo($ticketNo){

        $queryBuilder = $this
            ->createQueryBuilder('r')
            ->Join('r.tickets', 't')
            ->where('t.ticketNo =:tk')
            ->setParameters(array('tk' => $ticketNo));
        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();
        // On récupère les résultats à partir de la Query
        $results = $query->getResult();
       // $results = $results[0];


//       echo "<pre>"; var_dump($results); var_dump($ticketNo); exit;
        return $results[0];


    }

    public function getTicket($TID){
        $queryBuilder = $this
            ->createQueryBuilder('r')
            ->innerJoin('r.tickets', 't')
            ->where('t.ticketNo =:TID')
            ->setParameter('TID', $TID);
        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();
        // On récupère les résultats à partir de la Query
        $results = $query->getResult();
        //$results = $results;


        // var_dump($results['booked']); exit;
        return $results[0];
    }

    public function findReservationByTicketId($id){

        $queryBuilder = $this
            ->createQueryBuilder('r')
            ->innerJoin('r.tickets', 't')
            ->where('t.id =:TID')
            ->setParameter('TID', $id);
        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();
        // On récupère les résultats à partir de la Query
        $results = $query->getResult();
        //$results = $results;


        // var_dump($results['booked']); exit;
        return $results;

    }

    public function getLatests($user){

        $queryBuilder = $this
            ->createQueryBuilder('r')
            ->where('r.channel_id = :user')
            ->andWhere('r.confirmed = :f')
            ->setParameters([
                'user' => $user,
                'f' => true
            ])
            ->setMaxResults(8)
        ;
        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();
        // On récupère les résultats à partir de la Query
        $results = $query->getResult();
        //$results = $results;


        // var_dump($results['booked']); exit;
        return $results;

    }



    public function getBookingNumber($user){

        $queryBuilder = $this
            ->createQueryBuilder('r')
            ->where('r.channel_id = :user')
            ->setParameter('user', $user)
        ;
        // On récupère la Query à partir du QueryBuilder
        $query = $queryBuilder->getQuery();
        // On récupère les résultats à partir de la Query
        $results = $query->getResult();
        //$results = $results;


        // var_dump($results['booked']); exit;
        return $results;

    }


    public function NombrebilletVenduCeMois($user){

        $sql = "select
                    count(id) as total
                    from
                reservation
                where
                channel = 'seatseller' and channel_id = $user and
                 MONTH(date_add) = MONTH(CURRENT_DATE)";
        $connection = $this->_em->getConnection();
        $query = $connection->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();


        //dump($result[0]); exit;

        return $result[0];

    }

    public function CumulComissionCeMois($user){

        $sql = "select
                    count(r.id) as total,
                     ((sum(v.prix) * 4)/100 ) AS somme
                    from
                reservation r
                inner join voyages v on v.id = r.voyages_id
                where
                r.channel = 'seatseller' and r.channel_id = $user and
                 MONTH(r.date_add) = MONTH(CURRENT_DATE)";

        $connection = $this->_em->getConnection();
        $query = $connection->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();


        //dump($result[0]); exit;

        return $result[0];
    }

    public function reservationRecente($user){

        $sql = "select
                    t.ticketNo, t.nom as client, r.doj, a.nom as axes
                    from
                reservation r
                left join voyages v on v.id = r.voyages_id
                left join ticket t on t.id = r.tickets_id
                left join axes a on a.id = v.axes_id
                where
                r.channel = 'seatseller' and r.channel_id = $user
                order by r.date_add DESC
                LIMIT 10";

        $connection = $this->_em->getConnection();
        $query = $connection->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();


        //dump($result[0]); exit;

        return $result;

    }

    public function listeReservation($user){

        $sql = "select
                    t.ticketNo, t.nom as client, r.doj, a.nom as axes, v.prix, r.date_add, v.heure_depart
                    from
                reservation r
                left join voyages v on v.id = r.voyages_id
                left join ticket t on t.id = r.tickets_id
                left join axes a on a.id = v.axes_id
                where
                r.channel = 'seatseller' and r.channel_id = $user
                order by r.date_add DESC
                ";

        $connection = $this->_em->getConnection();
        $query = $connection->prepare($sql);
        $query->execute();
        $result = $query->fetchAll();


        //dump($result[0]); exit;

        return $result;
    }
}





