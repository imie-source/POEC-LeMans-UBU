<?php

namespace Jarry\UbuBundle\Entity;

/**
 * Zone
 */
class Zone
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $nodes;

    /**
     * @var \Jarry\UbuBundle\Entity\Place
     */
    private $place;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->nodes = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add node
     *
     * @param \Jarry\UbuBundle\Entity\Node $node
     *
     * @return Zone
     */
    public function addNode(\Jarry\UbuBundle\Entity\Node $node)
    {
        $this->nodes[] = $node;

        return $this;
    }

    /**
     * Remove node
     *
     * @param \Jarry\UbuBundle\Entity\Node $node
     */
    public function removeNode(\Jarry\UbuBundle\Entity\Node $node)
    {
        $this->nodes->removeElement($node);
    }

    /**
     * Get nodes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * Set place
     *
     * @param \Jarry\UbuBundle\Entity\Place $place
     *
     * @return Zone
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
    /**
     * @var string
     */
    private $name;

    /**
     * @var boolean
     */
    private $in_out_status;

    /**
     * @var float
     */
    private $pos_long;

    /**
     * @var float
     */
    private $pos_lat;

    /**
     * @var float
     */
    private $pos_alt;

    /**
     * @var float
     */
    private $octo_x;

    /**
     * @var float
     */
    private $octo_y;

    /**
     * @var float
     */
    private $octo_z;

    /**
     * @var \Jarry\UbuBundle\Entity\Zone
     */
    private $father_zone;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Zone
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set inOutStatus
     *
     * @param boolean $inOutStatus
     *
     * @return Zone
     */
    public function setInOutStatus($inOutStatus)
    {
        $this->in_out_status = $inOutStatus;

        return $this;
    }

    /**
     * Get inOutStatus
     *
     * @return boolean
     */
    public function getInOutStatus()
    {
        return $this->in_out_status;
    }

    /**
     * Set posLong
     *
     * @param float $posLong
     *
     * @return Zone
     */
    public function setPosLong($posLong)
    {
        $this->pos_long = $posLong;

        return $this;
    }

    /**
     * Get posLong
     *
     * @return float
     */
    public function getPosLong()
    {
        return $this->pos_long;
    }

    /**
     * Set posLat
     *
     * @param float $posLat
     *
     * @return Zone
     */
    public function setPosLat($posLat)
    {
        $this->pos_lat = $posLat;

        return $this;
    }

    /**
     * Get posLat
     *
     * @return float
     */
    public function getPosLat()
    {
        return $this->pos_lat;
    }

    /**
     * Set posAlt
     *
     * @param float $posAlt
     *
     * @return Zone
     */
    public function setPosAlt($posAlt)
    {
        $this->pos_alt = $posAlt;

        return $this;
    }

    /**
     * Get posAlt
     *
     * @return float
     */
    public function getPosAlt()
    {
        return $this->pos_alt;
    }

    /**
     * Set octoX
     *
     * @param float $octoX
     *
     * @return Zone
     */
    public function setOctoX($octoX)
    {
        $this->octo_x = $octoX;

        return $this;
    }

    /**
     * Get octoX
     *
     * @return float
     */
    public function getOctoX()
    {
        return $this->octo_x;
    }

    /**
     * Set octoY
     *
     * @param float $octoY
     *
     * @return Zone
     */
    public function setOctoY($octoY)
    {
        $this->octo_y = $octoY;

        return $this;
    }

    /**
     * Get octoY
     *
     * @return float
     */
    public function getOctoY()
    {
        return $this->octo_y;
    }

    /**
     * Set octoZ
     *
     * @param float $octoZ
     *
     * @return Zone
     */
    public function setOctoZ($octoZ)
    {
        $this->octo_z = $octoZ;

        return $this;
    }

    /**
     * Get octoZ
     *
     * @return float
     */
    public function getOctoZ()
    {
        return $this->octo_z;
    }

    /**
     * Set fatherZone
     *
     * @param \Jarry\UbuBundle\Entity\Zone $fatherZone
     *
     * @return Zone
     */
    public function setFatherZone(\Jarry\UbuBundle\Entity\Zone $fatherZone = null)
    {
        $this->father_zone = $fatherZone;

        return $this;
    }

    /**
     * Get fatherZone
     *
     * @return \Jarry\UbuBundle\Entity\Zone
     */
    public function getFatherZone()
    {
        return $this->father_zone;
    }
}
