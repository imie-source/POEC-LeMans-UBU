<?php

namespace Jarry\UbuBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Jarry\UbuBundle\Entity\Node;

class LoadNodeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em) {
        $places = ['maison', 'bicoque', 'bidonville','lupanard' ,'chateau', 'manoir', 'villa', 'residence'];
        $zones = ['10' => 'chambre','11' =>  'cuisine','12' =>  'séjour','13' =>  'couloir','14' =>  'salle_de_bain'];
        foreach ($places as $placeName) {
            foreach ($zones as $ip => $zoneName) {
                $radia1 = new Node();
                $radia1->setZone($em->merge($this->getReference('zone-'.$placeName.'-'.$zoneName)));
                $radia1->setName('Radiateur 1');
                $radial->setSecurityLevel(10);
                $radia1->setIp('192.168.'.$ip.'.1');
                
                $radia2 = new Node();
                $radia2->setZone($em->merge($this->getReference('zone-'.$placeName.'-'.$zoneName)));
                $radia2->setName('Radiateur 2');
                $radia2->setSecurityLevel(10);
                $radia2->setIp('192.168.'.$ip.'.2');
                
                $lum1 = new Node();
                $lum1->setZone($em->merge($this->getReference('zone-'.$placeName.'-'.$zoneName)));
                $lum1->setName('Lumière 1');
                $luml->setSecurityLevel(10);
                $lum1->setIp('192.168.'.$ip.'.3');
                
                $lum2 = new Node();
                $lum2->setZone($em->merge($this->getReference('zone-'.$placeName.'-'.$zoneName)));
                $lum2->setName('Lumière 2');
                $lum2->setSecurityLevel(10);
                $lum2->setIp('192.168.'.$ip.'.4');
                
                $stor1 = new Node();
                $stor1->setZone($em->merge($this->getReference('zone-'.$placeName.'-'.$zoneName)));
                $stor1->setName('Volet 1');
                $stor1->setSecurityLevel(50);
                $stor1->setIp('192.168.'.$ip.'.5');
                
                $stor2 = new Node();
                $stor2->setZone($em->merge($this->getReference('zone-'.$placeName.'-'.$zoneName)));
                $stor2->setName('Volet 2');
                $stor2->setSecurityLevel(50);
                $stor2->setIp('192.168.'.$ip.'.6');
                
                $stor3 = new Node();
                $stor3->setZone($em->merge($this->getReference('zone-'.$placeName.'-'.$zoneName)));
                $stor3->setName('Volet 3');
                $stor3->setSecurityLevel(50);
                $stor3->setIp('192.168.'.$ip.'.7'); 
                
                $em->persist($radia1);
                $em->persist($radia2);
                $em->persist($lum1);
                $em->persist($lum2);
                $em->persist($stor1);
                $em->persist($stor2);
                $em->persist($stor3);
                
                $this->addReference('node-rad1-'.$placeName.'-'.$zoneName, $radia1);
                $this->addReference('node-rad2-'.$placeName.'-'.$zoneName, $radia2);
                $this->addReference('node-lum1-'.$placeName.'-'.$zoneName, $lum1);
                $this->addReference('node-lum2-'.$placeName.'-'.$zoneName, $lum2);
                $this->addReference('node-stor1-'.$placeName.'-'.$zoneName, $stor1);
                $this->addReference('node-stor2-'.$placeName.'-'.$zoneName, $stor2);
                $this->addReference('node-stor3-'.$placeName.'-'.$zoneName, $stor3);            
                
            }
            
        }
        $em->flush();
    }
    
    public function getOrder() {
        return 400;
    }
}