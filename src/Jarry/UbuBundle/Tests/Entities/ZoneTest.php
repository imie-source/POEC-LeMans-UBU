<?php
    namespace Jarry\UbuBundle\Tests\Entities;
    
    use Jarry\UbuBundle\Entity\Zone;
    use Jarry\UbuBundle\Entity\Node;
    
    class ZoneTest extends \PHPUnit_Framework_TestCase{
        /**
         * @before
         */
        public function setUp(){
            $this->zone = new Zone();
            
            $this->node1 = new Node();
            $this->node2 = new Node();
        }
        
        /**
         * @test
         */
        public function addNodeTest(){
            $this->zone->addNode($this->node1);
            
            $this->assertContains($this->node1, $this->zone->getNodes());
        }
        
        /**
         * @test
         */
        public function removeNodeTest(){
            $this->zone->addNode($this->node1);
            $this->zone->removeNode($this->node1);
            
            $this->assertNotContains($this->node1, $this->zone->getNodes());
        }
        
        /**
         * @test
         */
        public function remove2NodeTest(){
            $this->zone->addNode($this->node1);
            $this->zone->addNode($this->node2);
            
            $this->zone->removeNode($this->node1);
            
            $this->assertContains($this->node2, $this->zone->getNodes());
        }
    }

