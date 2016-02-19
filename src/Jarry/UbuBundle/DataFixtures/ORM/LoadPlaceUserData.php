<?php

namespace Jarry\UbuBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Jarry\UbuBundle\Entity\PlaceUser;

class LoadPlaceUserData extends AbstractFixture implements OrderedFixtureInterface {

    public function load(ObjectManager $em) {
        $placeUser = new PlaceUser();
        $placeUser->setPlace($em->merge($this->getReference('place-maison')));
        $placeUser->setUser($em->merge($this->getReference('user-val')));
        
        $placeUser2 = new PlaceUser();
        $placeUser2->setPlace($em->merge($this->getReference('place-bicoque')));
        $placeUser2->setUser($em->merge($this->getReference('user-dav')));
        
        $placeUser3 = new PlaceUser();
        $placeUser3->setPlace($em->merge($this->getReference('place-bidonville')));
        $placeUser3->setUser($em->merge($this->getReference('user-val')));
        
        $placeUser3b = new PlaceUser();
        $placeUser3b->setPlace($em->merge($this->getReference('place-lupanard')));
        $placeUser3b->setUser($em->merge($this->getReference('user-root')));
        
        $placeUser4 = new PlaceUser();
        $placeUser4->setPlace($em->merge($this->getReference('place-chateau')));
        $placeUser4->setUser($em->merge($this->getReference('user-val')));
        
        $placeUser5 = new PlaceUser();
        $placeUser5->setPlace($em->merge($this->getReference('place-manoir')));
        $placeUser5->setUser($em->merge($this->getReference('user-dav')));
        
        $placeUser6 = new PlaceUser();
        $placeUser6->setPlace($em->merge($this->getReference('place-villa')));
        $placeUser6->setUser($em->merge($this->getReference('user-val')));
        
        $placeUser7 = new PlaceUser();
        $placeUser7->setPlace($em->merge($this->getReference('place-residence')));
        $placeUser7->setUser($em->merge($this->getReference('user-val')));
        
        $em->persist($placeUser);
        $em->persist($placeUser2);
        $em->persist($placeUser3);
        $em->persist($placeUser3b);
        $em->persist($placeUser4);
        $em->persist($placeUser5);
        $em->persist($placeUser6);
        $em->persist($placeUser7);

        $em->flush();
    }

    public function getOrder() {
        return 250;
    }

}


