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
        
        $jac = new User();
        $jac->setUsername('Jacky & Michel');
        $jac->setLogin('jacky');
        $jac->setPassword('michel');
        
        $val = new User();
        $val->setUsername('Valentin Provost');
        $val->setPassword('provost');
        $val->setLogin('valentin');
        
        $dav = new User();
        $dav->setUsername('David Girault');
        $dav->setLogin('david');
        $dav->setPassword('girault');
        
        $em->persist($root);
        $em->persist($first);
        $em->persist($val);
        $em->persist($dav);
        
        $em->flush();
        
        $this->addReference('user-root', $root);
        $this->addReference('user-first', $first);
        $this->addReference('user-jac', $jac);
        $this->addReference('user-val', $val);
        $this->addReference('user-dav', $dav);
    }
    
    public function getOrder() {
        return 100;
    }
}