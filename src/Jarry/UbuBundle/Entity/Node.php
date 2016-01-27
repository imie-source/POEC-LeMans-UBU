<?php

namespace Jarry\UbuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name='node')
 */
class Node
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;
    
    /**
     * @ORM\Column(type="string", length=15)
     */
    private $ip;

    /**
     * @ManyToOne(targetEntity="Zone", inversedBy="nodes")
     * @JoinColumn(name="zone_id", referencedColumnName="id")
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
}

