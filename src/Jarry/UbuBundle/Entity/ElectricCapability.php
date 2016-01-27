<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Capability;
/**
 * @ORM\Entity
 * @ORM\Table(name='log_electric')
 */
class ElectricCapability extends Capability
{
    //private $nameOfTable = 'log_electric';
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    private $onOffActor;
    private $powerSensor;
}

