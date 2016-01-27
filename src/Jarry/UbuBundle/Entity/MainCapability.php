<?php

namespace Jarry\UbuBundle\Entity;

use Jarry\UbuBundle\Entity\Capability;
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
    
    private $dateOfLog;
    
    private $nodeName;
    
    private $nodeId;
    
    private $zoneName;
    
    private $zoneId;
    
    private $placeName;
    
    private $placeId;
}