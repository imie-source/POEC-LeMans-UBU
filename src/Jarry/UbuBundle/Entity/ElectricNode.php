<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Node;
use Jarry\UbuBundle\Entity\ElectricCapability;
use Jarry\UbuBundle\Entity\MainCapability;

/**
 * ElectricNode
 */
class ElectricNode extends Node
{
        private $capabilityList = array ();
        
        public function __construct() {
            $capabilityList[] = new ElectricCapability();
            $capabilityList[] = new MainCapability();
        }
}