<?php

namespace Jarry\UbuBundle\Entity;

/**
 * Node
 */
class Node
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Jarry\UbuBundle\Entity\Zone
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
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $type_id;

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
     * Set typeId
     *
     * @param \int $typeId
     *
     * @return Node
     */
    public function setTypeId(\int $typeId)
    {
        $this->type_id = $typeId;

        return $this;
    }

    /**
     * Get typeId
     *
     * @return \int
     */
    public function getTypeId()
    {
        return $this->type_id;
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
}
