<?php

namespace Jarry\UbuBundle\Entity;



class MainCapability
{
    protected $dateOfLog;
    
    protected $nodeName;
    
    protected $capaName = 'main';
    
    protected $nodeId;
   
    protected $zoneName;

    protected $zoneId;

    protected $placeName;
 
    protected $placeId;
    
    protected $node;
    
    public function getCapaName() {
        return $this->capaName;
    }

    public function setCapaName($capaName) {
        $this->capaName = $capaName;
    }



}
