<?php

namespace Jarry\UbuBundle\Repository;

use Doctrine\ORM\EntityRepository as Repository;
use Doctrine\Common\Collections\ArrayCollection as Collection;

class UserRepository extends Repository {

    public function getUsersPlace($placeID) {
        $qb = $this->createQueryBuilder('u')
                ->join('u.places_users', 'PlaceUser')
                ->where('PlaceUser.place = :placeid')
                ->setParameter('placeid', $placeID);

        $result = $qb->getQuery()->getResult();

        return $users = new Collection($result);
    }
    
    
}
