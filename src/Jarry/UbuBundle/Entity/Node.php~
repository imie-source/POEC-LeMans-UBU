<?php

namespace Jarry\UbuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Events;
use Doctrine\Common\Collections\ArrayCollection;
use Jarry\UbuBundle\Entity\EntityBase as EntityBase;
use Jarry\UbuBundle\Entity\MainCapability as MainCapability;

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
     * Set ip
     *
     * @param string $ip
     *
     * @return Node
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
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
}
