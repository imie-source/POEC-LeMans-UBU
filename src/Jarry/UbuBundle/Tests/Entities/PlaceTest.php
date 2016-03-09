<?php
    namespace Jarry\UbuBundle\Tests\Entities;
    
    use Jarry\UbuBundle\Entity\Place;
    use Jarry\UbuBundle\Entity\Zone;
    use Jarry\UbuBundle\Entity\PlaceUser;
    use Jarry\UbuBundle\Entity\User;
    
    class PlaceTest extends \PHPUnit_Framework_TestCase{
        /**
         * @before
         */
        public function setUp(){
            $this->place = new Place();
            
            $this->zone1 = new Zone();
            $this->zone2 = new Zone();
            
            $this->user1 = new User();
            $this->user2 = new User();
            
            $this->placeuser1 = new PlaceUser();
            $this->placeuser2 = new PlaceUser();
            
            $this->placeuser1->setUser($this->user1);
            $this->placeuser2->setUser($this->user2);
            
            $this->place->addZone($this->zone1);
            $this->place->addZone($this->zone2);
            $this->place->setOwner($this->user1);
            $this->place->addPlacesUser($this->placeuser1);
        }
        
        
        /**
         * @test
         */
        public function getsetNameTest(){
            $this->place->setName('bidon');
            
            $this->assertEquals('bidon', $this->place->getName());
        }
        
        /**
         * @test
         */
        public function addZoneTest(){
            
            $this->zone3 = new Zone();
            
            $this->place->addZone($this->zone3);
            
            $this->assertContainsOnlyInstancesOf(Zone::class, $this->place->getZones());
            $this->assertCount(3, $this->place->getZones());
        }
        
        /**
         * @test
         */
        public function removeZoneTest(){
            $this->place->removeZone($this->zone2);
            
            $this->assertNotContains($this->zone2, $this->place->getZones());
        }
        
        /**
         * @test
         */
        public function addPlaceUserTest(){
            $this->place->addPlacesUser($this->placeuser2);
            
            $this->assertContainsOnly(PlaceUser::class, $this->place->getPlacesUsers());
            $this->assertCount(2, $this->place->getPlacesUsers());
        }
        
        /**
         * @test
         */
        public function removePlaceUserTest(){
            $this->place->removePlacesUser($this->placeuser1);
            
            $this->assertNotContains($this->placeuser1, $this->place->getPlacesUsers());
        }
        
        /**
         * @test
         */
        public function remove2PlaceUserTest(){
            $this->place->addPlacesUser($this->placeuser2);
            $this->place->removePlacesUser($this->placeuser1);
            
            $this->assertContains($this->placeuser2, $this->place->getPlacesUsers());
        }
    }