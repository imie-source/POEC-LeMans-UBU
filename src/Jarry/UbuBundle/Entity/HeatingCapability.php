<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Capability;
/**
 * HeatingCapability
 */
class HeatingCapability extends Capability
{
    private $nameOfTable = 'log_heating';
    
    private $tempActor;
    private $tempTargetSensor;
    private $tempEnvSensor;
}