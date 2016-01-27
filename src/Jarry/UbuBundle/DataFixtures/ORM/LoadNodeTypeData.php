<?php

namespace Jarry\UbuBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Jarry\UbuBundle\Entity\NodeType;

class LoadNodeTypeData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em) {
        $heating = new NodeType();
        $heating->setName('Radiator node');
        $heating->setShort_ref('heating');
        
        $electric = new NodeType();
        $electric->setName('Lighning node');
        $electric->setShort_ref('electric');
        
        $em->persist($heating);
        
        $em->flush();
    }
    
    public function getOrder() {
        return 200;
    }
}