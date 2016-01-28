<?php

namespace Jarry\UbuBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Jarry\UbuBundle\Entity\Zone;

class LoadZoneData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em) {
        $places = ['maison', 'bicoque', 'bidonville','lupanard' ,'chateau', 'manoir', 'villa', 'residence'];
        $zones = ['chambre', 'cuisine', 'séjour', 'couloir', 'salle_de_bain'];
        foreach ($places as $placeName) {
            foreach ($zones as $zoneName) {
                $entity = new Zone();
                $entity->setPlace($em->merge($this->getReference('place-'.$placeName)));
                $entity->setName($zoneName);
                $entity->setInOutStatus(FALSE);
                $entity->setPostLat(2.25);
                $entity->setPostLong(5.75);
                $entity->setPosAlt(4.05);
                $entity->setOctoX(0.75);
                $entity->setOctoY(0.35);
                $entity->setOctoZ(78.3);
                
                $em->persist($entity);
                
                $this->addReference('zone-'.$placeName.'-'.$zoneName, $entity);
                
                
            }
            
        }
        $em->flush();
    }
    
    public function getOrder() {
        return 300;
    }
}