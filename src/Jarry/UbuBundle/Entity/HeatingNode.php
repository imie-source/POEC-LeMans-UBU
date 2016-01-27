<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Node;
use Jarry\UbuBundle\Entity\ElectricCapability;
use Jarry\UbuBundle\Entity\HeatingCapability;
use Jarry\UbuBundle\Entity\MainCapability;
use Doctrine\ORM\Mapping as ORM;

/**
 * ElectricNode
 */
class HeatingNode extends Node
{
        private $capabilityList = array ();
        
        public function __construct() {
            $capabilityList[] = new ElectricCapability();
            $capabilityList[] = new HeatingCapability();
            $capabilityList[] = new MainCapability();
        }
}