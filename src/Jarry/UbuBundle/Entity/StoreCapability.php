<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\MainCapability;

class StoreCapability extends MainCapability
{
   
    private $upDownActor;
    
    private $dimmerActor;
    
    private $upSensor;
    
    private $downSensor;
   
    private $luxSensor;
    
    private $encoderSensor;
    
    protected $capaName = 'Store';

}
