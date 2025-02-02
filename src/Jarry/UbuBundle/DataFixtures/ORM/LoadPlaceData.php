<?php

namespace Jarry\UbuBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Jarry\UbuBundle\Entity\Place;

class LoadPlaceData extends AbstractFixture implements OrderedFixtureInterface {

    public function uniqid_base36($more_entropy = false) {
        $s = uniqid('', $more_entropy);
        if (!$more_entropy):
            return base_convert($s, 16, 36);
        endif;
        $hex = substr($s, 0, 13);
        $dec = $s[13] . substr($s, 15); // skip the dot
        return base_convert($hex, 16, 36) . base_convert($dec, 10, 36);
    }

    public function load(ObjectManager $em) {
        $place = new Place();
        $place->setName('Maison');
        $place->setAddress('8 rue des pivoines');
        $place->setCity('Le MANS');
        $place->setZip('72000');
        $code = $this->uniqid_base36(true);
        $place->setSecretCode($code);
        $place->setOrmLink('coucou');
        $place->setGpsLat(36.2);
        $place->setGpsLong(18.4);
        $place->setGpsAlt(7.54);
        $place->setCompasX(0.83);
        $place->setCompasY(5.54);
        $place->setCompasZ(-3.18);
        $place->setOwner($em->merge($this->getReference('user-val')));

        $place2 = new Place();
        $place2->setName('Bicoque');
        $place2->setAddress('8 rue des pivoines');
        $place2->setCity('Le MANS');
        $place2->setZip('72000');
        $code2 = $this->uniqid_base36(true);
        $place2->setSecretCode($code2);
        $place2->setOrmLink('coucou');
        $place2->setGpsLat(36.2);
        $place2->setGpsLong(18.4);
        $place2->setGpsAlt(7.54);
        $place2->setCompasX(0.83);
        $place2->setCompasY(5.54);
        $place2->setCompasZ(-3.18);
        $place2->setOwner($em->merge($this->getReference('user-dav')));

        $place3 = new Place();
        $place3->setName('Bidonville');
        $place3->setAddress('8 rue des pivoines');
        $place3->setCity('Le MANS');
        $place3->setZip('72000');
        $code3 = $this->uniqid_base36(true);
        $place3->setSecretCode($code3);
        $place3->setOrmLink('coucou');
        $place3->setGpsLat(36.2);
        $place3->setGpsLong(18.4);
        $place3->setGpsAlt(7.54);
        $place3->setCompasX(0.83);
        $place3->setCompasY(5.54);
        $place3->setCompasZ(-3.18);
        $place3->setOwner($em->merge($this->getReference('user-val')));

        $place3b = new Place();
        $place3b->setName('Lupanard');
        $place3b->setAddress('8 rue des trois pucelles');
        $place3b->setCity('Le MANS');
        $place3b->setZip('72000');
        $code3b = $this->uniqid_base36(true);
        $place3b->setSecretCode($code3b);
        $place3b->setOrmLink('coucou');
        $place3b->setGpsLat(36.2);
        $place3b->setGpsLong(18.4);
        $place3b->setGpsAlt(7.54);
        $place3b->setCompasX(0.83);
        $place3b->setCompasY(5.54);
        $place3b->setCompasZ(-3.18);
        $place3b->setOwner($em->merge($this->getReference('user-root')));

        $place4 = new Place();
        $place4->setName('Château');
        $place4->setAddress('8 rue des pivoines');
        $place4->setCity('Le MANS');
        $place4->setZip('72000');
        $code4 = $this->uniqid_base36(true);
        $place4->setSecretCode($code4);
        $place4->setOrmLink('coucou');
        $place4->setGpsLat(36.2);
        $place4->setGpsLong(18.4);
        $place4->setGpsAlt(7.54);
        $place4->setCompasX(0.83);
        $place4->setCompasY(5.54);
        $place4->setCompasZ(-3.18);
        $place4->setOwner($em->merge($this->getReference('user-val')));

        $place5 = new Place();
        $place5->setName('Manoir');
        $place5->setAddress('8 rue des pivoines');
        $place5->setCity('Le MANS');
        $place5->setZip('72000');
        $code5 = $this->uniqid_base36(true);
        $place5->setSecretCode($code5);
        $place5->setOrmLink('coucou');
        $place5->setGpsLat(36.2);
        $place5->setGpsLong(18.4);
        $place5->setGpsAlt(7.54);
        $place5->setCompasX(0.83);
        $place5->setCompasY(5.54);
        $place5->setCompasZ(-3.18);
        $place5->setOwner($em->merge($this->getReference('user-dav')));

        $place6 = new Place();
        $place6->setName('Villa');
        $place6->setAddress('8 rue des pivoines');
        $place6->setCity('Le MANS');
        $place6->setZip('72000');
        $code6 = $this->uniqid_base36(true);
        $place6->setSecretCode($code6);
        $place6->setOrmLink('coucou');
        $place6->setGpsLat(36.2);
        $place6->setGpsLong(18.4);
        $place6->setGpsAlt(7.54);
        $place6->setCompasX(0.83);
        $place6->setCompasY(5.54);
        $place6->setCompasZ(-3.18);
        $place6->setOwner($em->merge($this->getReference('user-val')));

        $place7 = new Place();
        $place7->setName('Résidence');
        $place7->setAddress('8 rue des pivoines');
        $place7->setCity('Le MANS');
        $place7->setZip('72000');
        $code7 = $this->uniqid_base36(true);
        $place7->setSecretCode($code7);
        $place7->setOrmLink('coucou');
        $place7->setGpsLat(36.2);
        $place7->setGpsLong(18.4);
        $place7->setGpsAlt(7.54);
        $place7->setCompasX(0.83);
        $place7->setCompasY(5.54);
        $place7->setCompasZ(-3.18);
        $place7->setOwner($em->merge($this->getReference('user-val')));

        $em->persist($place);
        $em->persist($place2);
        $em->persist($place3);
        $em->persist($place3b);
        $em->persist($place4);
        $em->persist($place5);
        $em->persist($place6);
        $em->persist($place7);

        $em->flush();

        $this->addReference('place-maison', $place);
        $this->addReference('place-bicoque', $place2);
        $this->addReference('place-bidonville', $place3);
        $this->addReference('place-lupanard', $place3b);
        $this->addReference('place-chateau', $place4);
        $this->addReference('place-manoir', $place5);
        $this->addReference('place-villa', $place6);
        $this->addReference('place-residence', $place7);
    }

    public function getOrder() {
        return 200;
    }

}
