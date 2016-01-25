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
}

