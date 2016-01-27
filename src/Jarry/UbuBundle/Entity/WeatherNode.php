<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Node;
use Jarry\UbuBundle\Entity\WeatherCapability;
use Jarry\UbuBundle\Entity\MainCapability;
use Doctrine\ORM\Mapping as ORM;

/**
 * WeatherNode
 */
class WeatherNode extends Node
{
        private $capabilityList = array ();
        
        public function __construct() {
            $capabilityList[] = new WeatherCapability();
            $capabilityList[] = new MainCapability();
        }
}