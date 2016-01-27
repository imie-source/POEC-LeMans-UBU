<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Node;
use Jarry\UbuBundle\Entity\ElectricCapability;
use Jarry\UbuBundle\Entity\LightningCapability;

/**
 * LightningNode
 */
class LightningNode extends Node
{
        private $capabilityList = array ();
        
        public function __construct() {
            $capabilityList[] = new ElectricCapability();
            $capabilityList[] = new LightningCapability();
        }
}