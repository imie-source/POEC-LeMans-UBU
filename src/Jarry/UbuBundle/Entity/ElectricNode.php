<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Node;
use Jarry\UbuBundle\Entity\ElectricCapability;

/**
 * ElectricNode
 */
class ElectricNode extends Node
{
        private $capabilityList = array ();
        
        public function __construct() {
            $capabilityList[] = new ElectricCapability();
        }
}