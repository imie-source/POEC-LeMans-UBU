<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Capability;
/**
 * StoreCapability
 */
class StoreCapability extends Capability
{
    private $nameOfTable = 'log_store';
    
    private $upDownActor;
    private $dimmerActor;
    private $upSensor;
    private $downSensor;
    private $luxSensor;
    private $encoderSensor;
}