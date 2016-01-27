<?php

namespace Jarry\UbuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="logHeating")
 */
class LogHeating
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Jarry\UbuBundle\Entity\Node
     */
    private $node;


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
     * Set node
     *
     * @param \Jarry\UbuBundle\Entity\Node $node
     *
     * @return LogHeating
     */
    public function setNode(\Jarry\UbuBundle\Entity\Node $node = null)
    {
        $this->node = $node;

        return $this;
    }

    /**
     * Get node
     *
     * @return \Jarry\UbuBundle\Entity\Node
     */
    public function getNode()
    {
        return $this->node;
    }
    /**
     * @var \DateTime
     */
    private $creating_date;

    /**
     * @var float
     */
    private $temp_target;

    /**
     * @var float
     */
    private $temp_env;

    /**
     * @var string
     */
    private $node_name;

    /**
     * @var string
     */
    private $zone_name;

    /**
     * @var string
     */
    private $place_name;

    /**
     * @var \Jarry\UbuBundle\Entity\Zone
     */
    private $zone;

    /**
     * @var \Jarry\UbuBundle\Entity\Place
     */
    private $place;


    /**
     * Set creatingDate
     *
     * @param \DateTime $creatingDate
     *
     * @return LogHeating
     */
    public function setCreatingDate($creatingDate)
    {
        $this->creating_date = $creatingDate;

        return $this;
    }

    /**
     * Get creatingDate
     *
     * @return \DateTime
     */
    public function getCreatingDate()
    {
        return $this->creating_date;
    }

    /**
     * Set tempTarget
     *
     * @param float $tempTarget
     *
     * @return LogHeating
     */
    public function setTempTarget($tempTarget)
    {
        $this->temp_target = $tempTarget;

        return $this;
    }

    /**
     * Get tempTarget
     *
     * @return float
     */
    public function getTempTarget()
    {
        return $this->temp_target;
    }

    /**
     * Set tempEnv
     *
     * @param float $tempEnv
     *
     * @return LogHeating
     */
    public function setTempEnv($tempEnv)
    {
        $this->temp_env = $tempEnv;

        return $this;
    }

    /**
     * Get tempEnv
     *
     * @return float
     */
    public function getTempEnv()
    {
        return $this->temp_env;
    }

    /**
     * Set nodeName
     *
     * @param string $nodeName
     *
     * @return LogHeating
     */
    public function setNodeName($nodeName)
    {
        $this->node_name = $nodeName;

        return $this;
    }

    /**
     * Get nodeName
     *
     * @return string
     */
    public function getNodeName()
    {
        return $this->node_name;
    }

    /**
     * Set zoneName
     *
     * @param string $zoneName
     *
     * @return LogHeating
     */
    public function setZoneName($zoneName)
    {
        $this->zone_name = $zoneName;

        return $this;
    }

    /**
     * Get zoneName
     *
     * @return string
     */
    public function getZoneName()
    {
        return $this->zone_name;
    }

    /**
     * Set placeName
     *
     * @param string $placeName
     *
     * @return LogHeating
     */
    public function setPlaceName($placeName)
    {
        $this->place_name = $placeName;

        return $this;
    }

    /**
     * Get placeName
     *
     * @return string
     */
    public function getPlaceName()
    {
        return $this->place_name;
    }

    /**
     * Set zone
     *
     * @param \Jarry\UbuBundle\Entity\Zone $zone
     *
     * @return LogHeating
     */
    public function setZone(\Jarry\UbuBundle\Entity\Zone $zone = null)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return \Jarry\UbuBundle\Entity\Zone
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set place
     *
     * @param \Jarry\UbuBundle\Entity\Place $place
     *
     * @return LogHeating
     */
    public function setPlace(\Jarry\UbuBundle\Entity\Place $place = null)
    {
        $this->place = $place;

        return $this;
    }

    /**
     * Get place
     *
     * @return \Jarry\UbuBundle\Entity\Place
     */
    public function getPlace()
    {
        return $this->place;
    }
}
