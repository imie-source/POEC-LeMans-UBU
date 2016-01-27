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
    
    // ne pas rater la méthode qui permet de gérer l'id
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * 
     */
    private $id;
    
    private $onOffActor;
    private $powerSensor;
}

