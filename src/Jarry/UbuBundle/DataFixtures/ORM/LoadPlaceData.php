<?php

namespace Jarry\UbuBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Jarry\UbuBundle\Entity\Place;

class LoadPlaceData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em) {
        $place = new Place();
        $place->setName('Maison');
        
        $place2 = new Place();
        $place2->setName('Bicoque');
        
        $place3 = new Place();
        $place3->setName('Bidonville');
        
        $place4 = new Place();
        $place4->setName('Château');
        
        $place5 = new Place();
        $place5->setName('Manoir');
        
        $place6 = new Place();
        $place6->setName('Villa');
        
        $place7 = new Place();
        $place7->setName('Résidence');
               
        $em->persist($place);
        $em->persist($place2);
        $em->persist($place3);
        $em->persist($place4);
        $em->persist($place5);
        $em->persist($place6);
        $em->persist($place7);
        
        $em->flush();
        
        $this->addReference('maison', $place);
        $this->addReference('bicoque', $place2);
        $this->addReference('bidonville', $place3);
        $this->addReference('chateau', $place4);
        $this->addReference('manoir', $place5);
        $this->addReference('villa', $place6);
        $this->addReference('residence', $place7);
   
    }
    
    public function getOrder() {
        return 200;
    }
}