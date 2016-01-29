<?php

namespace Jarry\UbuBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Jarry\UbuBundle\Entity\MainCapability;

use DateTime;
use DateTimeZone;

class LoadMainCapability extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em) {
        $places = ['maison', 'bicoque', 'bidonville','lupanard' ,'chateau', 'manoir', 'villa', 'residence'];
        $zones = ['10' => 'chambre','11' =>  'cuisine','12' =>  'séjour','13' =>  'couloir','14' =>  'salle_de_bain'];
        $node = ['rad1', 'rad2', 'lum1', 'lum2', 'stor1', 'stor2', 'stor3'];
        foreach ($places as $placeName) {
            foreach ($zones as $ip => $zoneName) {
                foreach ($node as $nodeName) {
                    $dateOfLog = new DateTime('2012-03-09 17:26:30', new DateTimeZone('Europe/Paris'));
                    for ($i = 0; $i < 30; $i++) {
                        
                        $capa = new MainCapability();
                        $capa->setNode($em->merge($this->getReference('node-'.$nodeName.'-'.$placeName.'-'.$zoneName)));
                        $capa->setNodeName($capa->getNode()->getName());
                        $capa->setPlaceName($capa->getNode()->getZone()->getPlace()->getName());
                        $capa->setZoneName($capa->getNode()->getZone()->getName());
                        //$capa->setNodeId($capa->getNode()->getId());
                        //$capa->setZoneId($capa->getNode()->getZone()->getId());
                        //$capa->setPlaceId($capa->getNode()->getZone()->getPlace()->getId());
                        $capa->setDateOfLog($dateOfLog);
                        
                        $em->persist($capa);
                        
                        
                    }
                }
            }
        }
        $em->flush();
    }
    
     public function getOrder() {
        return 500;
    }
}

