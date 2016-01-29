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
     * @ORM\Column(type="integer")
     */
    private $securityLevel;

    /**
     * @ORM\ManyToOne(targetEntity="Zone", inversedBy="nodes")
     * @ORM\JoinColumn(name="zone_id", referencedColumnName="id")
     */
    private $zone;
    
    /**
     * @ORM\OneToMany(targetEntity="MainCapability", mappedBy="node")
     */
    private $capabilities;
    
    


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
     * Constructor
     */
    public function __construct()
    {
        $this->capabilities = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add capability
     *
     * @param \Jarry\UbuBundle\Entity\MainCapability $capability
     *
     * @return Node
     */
    public function addCapability(\Jarry\UbuBundle\Entity\MainCapability $capability)
    {
        $this->capabilities[] = $capability;

        return $this;
    }

    /**
     * Remove capability
     *
     * @param \Jarry\UbuBundle\Entity\MainCapability $capability
     */
    public function removeCapability(\Jarry\UbuBundle\Entity\MainCapability $capability)
    {
        $this->capabilities->removeElement($capability);
    }

    /**
     * Get capabilities
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCapabilities()
    {
        return $this->capabilities;
    }
    
    function getSecurityLevel() {
        return $this->securityLevel;
    }

    function getIp_address() {
        return $this->ip_address;
    }

    function setSecurityLevel($securityLevel) {
        $this->securityLevel = $securityLevel;
    }

    function setIp_address($ip_address) {
        $this->ip_address = $ip_address;
    }


}
