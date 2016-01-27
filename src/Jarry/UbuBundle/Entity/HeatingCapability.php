<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Capability;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name='log_heating')
 */
class HeatingCapability extends Capability
{
    //private $nameOfTable = 'log_heating';
    
    // ne pas rater la méthode qui permet de gérer l'id
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     */
    private $id;
    
    /**
     *@ORM\Column(type="float")
     */
    private $tempActor;
    
    /**
     *@ORM\Column(type="float")
     */
    private $tempTargetSensor;
    
    /**
     *@ORM\Column(type="float")
     */
    private $tempEnvSensor;
}