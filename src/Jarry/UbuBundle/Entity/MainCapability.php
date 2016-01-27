<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Capability;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name='log_main')
 */
class MainCapability extends Capability
{
    //private $nameOfTable = 'log_main';
    
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="datetime")
     */
    private $dateOfLog;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nodeName;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $nodeId;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $zoneName;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $zoneId;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $placeName;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $placeId;
}