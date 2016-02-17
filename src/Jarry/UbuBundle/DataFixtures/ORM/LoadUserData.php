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
        $root->setEmail('root@domain.com');
        $root->setPlainPassword('toor');
        $root->setEnabled(true);
        
        $val = new User();
        $val->setUsername('Chouwibaka');
        $val->setEmail("valentin@domain.com");
        $val->setPlainPassword('prout');
        $val->setEnabled(true);
        
        $dav = new User();
        $dav->setUsername('david');
        $dav->setEmail('david@domain.com');
        $dav->setPlainPassword('davidgirault');
        $dav->setEnabled(true);
        
        $em->persist($root);
        $em->persist($val);
        $em->persist($dav);
        
        $em->flush();
        
        $this->addReference('user-root', $root);
        $this->addReference('user-val', $val);
        $this->addReference('user-dav', $dav);
    }
    
    public function getOrder() {
        return 100;
    }
}