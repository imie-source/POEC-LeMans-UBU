<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Capability;
/**
 * LightningCapability
 */
class LightningCapability extends Capability
{
    private $nameOfTable = 'log_lightning';
    
    private $dimmerActor;
    private $colorActor;
    private $luxSensor;
    private $powerSensor;
}