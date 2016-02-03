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
           1 => 'Maison',
           2 => 'Bicoque',
           3 => 'Bidonville',
           4 => 'Lupanard',
           5 => 'Château',
           6 => 'Manoir',
           7 => 'Villa',
           8 => 'Résidence'];
       $zoneList = [
           21 => 'Cuisine',
           22 => 'Chambre',
           23 => 'Séjour',
           24 => 'Couloir',
           25 => 'Salle de bain'
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
                       $entity->setNodeId(1);
                       $entity->setNodeName($node);
                       $entity->setZoneId(1);
                       $entity->setZoneName($zone);
                       $entity->setPlaceId(1);
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