<?php

namespace Jarry\UbuBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Jarry\UbuBundle\Entity\Log\HeatingLog;

class LoadHeatingLogData extends AbstractFixture implements OrderedFixtureInterface
{
   public function load(ObjectManager $em) {
       $placeList = [
           1 => 'maison',
           2 => 'bicoque',
           3 => 'bidonville',
           4 => 'lupanard',
           5 => 'chateau',
           6 => 'manoir',
           7 => 'villa',
           8 => 'residence'];
       $zoneList = [
           21 => 'cuisine',
           22 => 'chambre',
           23 => 'séjour',
           24 => 'couloir',
           25 => 'salle_de_bain'
       ];
       $nodeList = [
           100 => 'Radiateur 1',
           101 => 'Radiateur 2',
           
       ];
       $dateList = [
           '2016-01-29 11:59:10',
           '2016-01-29 12:09:10',
           '2016-01-29 12:19:10',
           '2016-01-29 12:29:10',
           '2016-01-29 12:39:10',
           '2016-01-29 12:49:10',
           '2016-01-29 12:59:10',
           '2016-01-29 13:09:10'
       ];
       
       foreach ($placeList as $pl => $place) {
           foreach ($zoneList as $zo => $zone) {
               foreach ($nodeList as $no => $node) {
                   foreach ($dateList as $dt => $uneDate) {
                       $cetteDate = new \DateTime($uneDate);
                       
                       $entity = new HeatingLog();
                       $entity->setDateOfLog($cetteDate);
                       $nodeObject = $em->merge($this->getReference('node-rad1-'.$place.'-'.$zone));
                       $entity->setNodeId($nodeObject->getId());
                       $entity->setNodeName($node);
                       $entity->setZoneId($nodeObject->getZone()->getId());
                       $entity->setZoneName($zone);
                       $entity->setPlaceId($nodeObject->getZone()->getPlace()->getId());
                       $entity->setPlaceName($place);
                       $entity->setTempActor(28.7);
                       $entity->setTempEnvSensor(24.9);
                       $entity->setTempTargetSensor(45.3);
                       
                       $em->persist($entity);
                       
                       $entity = new HeatingLog();
                       $entity->setDateOfLog($cetteDate);
                       $nodeObject = $em->merge($this->getReference('node-rad2-'.$place.'-'.$zone));
                       $entity->setNodeId($nodeObject->getId());
                       $entity->setNodeName($node);
                       $entity->setZoneId($nodeObject->getZone()->getId());
                       $entity->setZoneName($zone);
                       $entity->setPlaceId($nodeObject->getZone()->getPlace()->getId());
                       $entity->setPlaceName($place);
                       $entity->setTempActor(28.7);
                       $entity->setTempEnvSensor(24.9);
                       $entity->setTempTargetSensor(45.3);
                       
                       $em->persist($entity);
                       
                   }
                   
               }
               
           }
       }
       
       $em->flush();
        
    }
    
    public function getOrder() {
        return 1100;
    }
}