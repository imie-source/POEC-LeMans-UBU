<?php

namespace Jarry\UbuBundle\Entity\Log;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Events;

/**
 * @ORM\Entity
 * @ORM\Table(name="ubu_main_log")
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"main_log" = "MainLog", "heating_log" = "HeatingLog"})
 */
class MainLog
{
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
     * @ORM\Column(type="bigint")
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
    
    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateOfLog
     *
     * @param \DateTime $dateOfLog
     *
     * @return MainLog
     */
    public function setDateOfLog($dateOfLog)
    {
        $this->dateOfLog = $dateOfLog;

        return $this;
    }

    /**
     * Get dateOfLog
     *
     * @return \DateTime
     */
    public function getDateOfLog()
    {
        return $this->dateOfLog;
    }

    /**
     * Set nodeName
     *
     * @param string $nodeName
     *
     * @return MainLog
     */
    public function setNodeName($nodeName)
    {
        $this->nodeName = $nodeName;

        return $this;
    }

    /**
     * Get nodeName
     *
     * @return string
     */
    public function getNodeName()
    {
        return $this->nodeName;
    }

    /**
     * Set nodeId
     *
     * @param integer $nodeId
     *
     * @return MainLog
     */
    public function setNodeId($nodeId)
    {
        $this->nodeId = $nodeId;

        return $this;
    }

    /**
     * Get nodeId
     *
     * @return integer
     */
    public function getNodeId()
    {
        return $this->nodeId;
    }

    /**
     * Set zoneName
     *
     * @param string $zoneName
     *
     * @return MainLog
     */
    public function setZoneName($zoneName)
    {
        $this->zoneName = $zoneName;

        return $this;
    }

    /**
     * Get zoneName
     *
     * @return string
     */
    public function getZoneName()
    {
        return $this->zoneName;
    }

    /**
     * Set zoneId
     *
     * @param integer $zoneId
     *
     * @return MainLog
     */
    public function setZoneId($zoneId)
    {
        $this->zoneId = $zoneId;

        return $this;
    }

    /**
     * Get zoneId
     *
     * @return integer
     */
    public function getZoneId()
    {
        return $this->zoneId;
    }

    /**
     * Set placeName
     *
     * @param string $placeName
     *
     * @return MainLog
     */
    public function setPlaceName($placeName)
    {
        $this->placeName = $placeName;

        return $this;
    }

    /**
     * Get placeName
     *
     * @return string
     */
    public function getPlaceName()
    {
        return $this->placeName;
    }

    /**
     * Set placeId
     *
     * @param integer $placeId
     *
     * @return MainLog
     */
    public function setPlaceId($placeId)
    {
        $this->placeId = $placeId;

        return $this;
    }

    /**
     * Get placeId
     *
     * @return integer
     */
    public function getPlaceId()
    {
        return $this->placeId;
    }
}
