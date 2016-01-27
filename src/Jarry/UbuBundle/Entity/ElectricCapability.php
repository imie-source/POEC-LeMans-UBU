<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Capability;
/**
 * ElectricCapability
 */
class ElectricCapability extends Capability
{
    private $nameOfTable = 'log_electric';
    
    private $onOfActor;
    private $powerSensor;
}

