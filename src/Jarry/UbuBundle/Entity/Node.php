<?php

namespace Jarry\UbuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Events;
use Jarry\UbuBundle\Entity\EntityBase as EntityBase;

/**
 * @ORM\Entity
 * @ORM\Table(name="node")
 */
class Node extends EntityBase
{
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ip;

    /**
     * @ORM\ManyToOne(targetEntity="Zone", inversedBy="nodes")
     * @ORM\JoinColumn(name="zone_id", referencedColumnName="id")
     */
    private $zone;


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
     * Set zone
     *
     * @param \Jarry\UbuBundle\Entity\Zone $zone
     *
     * @return Node
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
     * @var string
     */
    private $ip_address;

    /**
     * @var \Jarry\UbuBundle\Entity\NodeType
     */
    private $node_type;


    /**
     * Set ipAddress
     *
     * @param string $ipAddress
     *
     * @return Node
     */
    public function setIpAddress($ipAddress)
    {
        $this->ip_address = $ipAddress;

        return $this;
    }

    /**
     * Get ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Node
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
     * Set nodeType
     *
     * @param \Jarry\UbuBundle\Entity\NodeType $nodeType
     *
     * @return Node
     */
    public function setNodeType(\Jarry\UbuBundle\Entity\NodeType $nodeType = null)
    {
        $this->node_type = $nodeType;

        return $this;
    }

    /**
     * Get nodeType
     *
     * @return \Jarry\UbuBundle\Entity\NodeType
     */
    public function getNodeType()
    {
        return $this->node_type;
    }
    /**
     * @var integer
     */
    private $id;


}
