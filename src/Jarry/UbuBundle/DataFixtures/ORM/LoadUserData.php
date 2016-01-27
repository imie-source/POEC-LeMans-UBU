<?php

namespace Jarry\UbuBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

use Jarry\UbuBundle\Entity\User;

class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em) {
        $root = new User();
        $root->setUsername('root');
        $root->setLogin('root');
        $root->setPassword('toor');
        
        $first = new User();
        $first->setUsername('François Premier');
        $first->setLogin('francois');
        $first->setPassword('premier');
        
        $em->persist($root);
        $em->persist($first);
        
        $em->flush();
    }
    
    public function getOrder() {
        return 100;
    }
}