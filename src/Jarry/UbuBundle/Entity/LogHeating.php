<?php

namespace Jarry\UbuBundle\Entity;

/**
 * LogHeating
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
}

