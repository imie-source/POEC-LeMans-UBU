<?php

namespace Jarry\UbuBundle\Entity;

/**
 * NodeType
 */
class NodeType
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $short_ref;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $nodes;

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
     * Set name
     *
     * @param string $name
     *
     * @return NodeType
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
     * Set shortRef
     *
     * @param string $shortRef
     *
     * @return NodeType
     */
    public function setShortRef($shortRef)
    {
        $this->short_ref = $shortRef;

        return $this;
    }

    /**
     * Get shortRef
     *
     * @return string
     */
    public function getShortRef()
    {
        return $this->short_ref;
    }

    /**
     * Add node
     *
     * @param \Jarry\UbuBundle\Entity\Node $node
     *
     * @return NodeType
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
}
