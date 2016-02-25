<?php

namespace Jarry\UbuBundle\Repository;

use Doctrine\ORM\EntityRepository as Repository;
use Doctrine\Common\Collections\ArrayCollection as Collection;

class PlaceRepository extends Repository {

    public function getPlacesUsers($userID) {
        $qb = $this->createQueryBuilder('p')
                ->join('p.places_users', 'PlaceUser')
                ->where('PlaceUser.user = :userid')
                ->setParameter('userid', $userID);

        $result = $qb->getQuery()->getResult();

        return $places = new Collection($result);
    }
    /*
    public function getUsersPlace($placeID) {
        $qb = $this->createQueryBuilder('user')
                ->join('user.places_users', 'PlaceUser')
                ->where('PlaceUser.place = :placeid')
                ->setParameter('placeid', $placeID);

        $result = $qb->getQuery()->getResult();

        return $users = new Collection($result);
    }*/

}
