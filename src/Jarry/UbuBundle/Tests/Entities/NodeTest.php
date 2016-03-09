<?php
    namespace Jarry\UbuBundle\Tests\Entities;
    
    use Jarry\UbuBundle\Entity\Node;
    use Jarry\UbuBundle\Entity\MainCapability;
    use Jarry\UbuBundle\Entity\ElectricCapability;
    use Jarry\UbuBundle\Entity\HeatingCapability;
    use Jarry\UbuBundle\Entity\LightningCapability;
    use Jarry\UbuBundle\Entity\StoreCapability;
    
    class NodeTest extends \PHPUnit_Framework_TestCase{
        /**
         * @before
         */
        public function setUp(){
            
            $this->nodeRAD = new Node();
            $this->nodeLUM = new Node();
            $this->nodeSTO = new Node();
        }
        
        /**
         * @test
         */
        public function radTest(){
            $this->nodeRAD->setNodeType('rad');
            
            $this->assertCount(2, $this->nodeRAD->getCapabilities());
            $this->assertContainsOnlyInstancesOf(MainCapability::class, $this->nodeRAD->getCapabilities());
            $this->assertInstanceOf(ElectricCapability::class, $this->nodeRAD->getCapabilities()[0]);
            $this->assertInstanceOf(HeatingCapability::class, $this->nodeRAD->getCapabilities()[1]);
        }
        
        /**
         * @test
         */
        public function lumTest(){
            $this->nodeLUM->setNodeType('lum');
            
            $this->assertCount(2, $this->nodeLUM->getCapabilities());
            $this->assertContainsOnlyInstancesOf(MainCapability::class, $this->nodeLUM->getCapabilities());
            $this->assertInstanceOf(ElectricCapability::class, $this->nodeLUM->getCapabilities()[0]);
            $this->assertInstanceOf(LightningCapability::class, $this->nodeLUM->getCapabilities()[1]);
        }
        
        /**
         * @test
         */
        public function stoTest(){
            $this->nodeSTO->setNodeType('sto');
            
            $this->assertCount(2, $this->nodeSTO->getCapabilities());
            $this->assertContainsOnlyInstancesOf(MainCapability::class, $this->nodeSTO->getCapabilities());
            $this->assertInstanceOf(ElectricCapability::class, $this->nodeSTO->getCapabilities()[0]);
            $this->assertInstanceOf(StoreCapability::class, $this->nodeSTO->getCapabilities()[1]);
        }
    }