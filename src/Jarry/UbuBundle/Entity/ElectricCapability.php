<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Capability;
use Doctrine\ORM\Mapping as ORM;

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
     */
    private $id;
    
    /**
     *@ORM\Column(type="boolean")
     */
    private $onOffActor;
    
    /**
     *@ORM\Column(type="float")
     */
    private $powerSensor;
}

