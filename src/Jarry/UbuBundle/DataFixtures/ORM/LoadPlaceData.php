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
        $place->setAddress('8 rue des pivoines');
        $place->setCity('Le MANS');
        $place->setZip('72000');
        $place->setSecretCode('THIS_IS_A_SECRET-CODE');
        $place->setOrmLink('coucou');
        $place->setGpsLat(36.2);
        $place->setGpsLong(18.4);
        $place->setGpsAlt(7.54);
        $place->setCompasX(0.83);
        $place->setCompasY(5.54);
        $place->setCompasZ(-3.18);
        
        $place2 = new Place();
        $place2->setName('Bicoque');
        $place2->setAddress('8 rue des pivoines');
        $place2->setCity('Le MANS');
        $place2->setZip('72000');
        $place2->setSecretCode('THIS_IS_A_SECRET-CODE');
        $place2->setOrmLink('coucou');
        $place2->setGpsLat(36.2);
        $place2->setGpsLong(18.4);
        $place2->setGpsAlt(7.54);
        $place2->setCompasX(0.83);
        $place2->setCompasY(5.54);
        $place2->setCompasZ(-3.18);
        
        $place3 = new Place();
        $place3->setName('Bidonville');
        $place3->setAddress('8 rue des pivoines');
        $place3->setCity('Le MANS');
        $place3->setZip('72000');
        $place3->setSecretCode('THIS_IS_A_SECRET-CODE');
        $place3->setOrmLink('coucou');
        $place3->setGpsLat(36.2);
        $place3->setGpsLong(18.4);
        $place3->setGpsAlt(7.54);
        $place3->setCompasX(0.83);
        $place3->setCompasY(5.54);
        $place3->setCompasZ(-3.18);
        
        $place4 = new Place();
        $place4->setName('Château');
        $place4->setAddress('8 rue des pivoines');
        $place4->setCity('Le MANS');
        $place4->setZip('72000');
        $place4->setSecretCode('THIS_IS_A_SECRET-CODE');
        $place4->setOrmLink('coucou');
        $place4->setGpsLat(36.2);
        $place4->setGpsLong(18.4);
        $place4->setGpsAlt(7.54);
        $place4->setCompasX(0.83);
        $place4->setCompasY(5.54);
        $place4->setCompasZ(-3.18);
        
        $place5 = new Place();
        $place5->setName('Manoir');
        $place5->setAddress('8 rue des pivoines');
        $place5->setCity('Le MANS');
        $place5->setZip('72000');
        $place5->setSecretCode('THIS_IS_A_SECRET-CODE');
        $place5->setOrmLink('coucou');
        $place5->setGpsLat(36.2);
        $place5->setGpsLong(18.4);
        $place5->setGpsAlt(7.54);
        $place5->setCompasX(0.83);
        $place5->setCompasY(5.54);
        $place5->setCompasZ(-3.18);
        
        $place6 = new Place();
        $place6->setName('Villa');
        $place6->setAddress('8 rue des pivoines');
        $place6->setCity('Le MANS');
        $place6->setZip('72000');
        $place6->setSecretCode('THIS_IS_A_SECRET-CODE');
        $place6->setOrmLink('coucou');
        $place6->setGpsLat(36.2);
        $place6->setGpsLong(18.4);
        $place6->setGpsAlt(7.54);
        $place6->setCompasX(0.83);
        $place6->setCompasY(5.54);
        $place6->setCompasZ(-3.18);
        
        $place7 = new Place();
        $place7->setName('Résidence');
        $place7->setAddress('8 rue des pivoines');
        $place7->setCity('Le MANS');
        $place7->setZip('72000');
        $place7->setSecretCode('THIS_IS_A_SECRET-CODE');
        $place7->setOrmLink('coucou');
        $place7->setGpsLat(36.2);
        $place7->setGpsLong(18.4);
        $place7->setGpsAlt(7.54);
        $place7->setCompasX(0.83);
        $place7->setCompasY(5.54);
        $place7->setCompasZ(-3.18);
               
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