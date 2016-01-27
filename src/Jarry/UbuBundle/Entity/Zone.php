<?php

namespace Jarry\UbuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name='zone')
 */
class Zone
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
     * @ORM\Column(type="boolean")
     */
    private $in_out_status;
    
    /**
     * @ORM\Column(type="float")
     */
    private $post_lat;
    
    /**
     * @ORM\Column(type="float")
     */
    private $post_long;
    
    /**
     * @ORM\Column(type="float")
     */
    private $pos_alt;
    
    /**
     * @ORM\Column(type="float")
     */
    private $octo_x;
    
    /**
     * @ORM\Column(type="float")
     */
    private $octo_y;
    
    /**
     * @ORM\Column(type="float")
     */
    private $octo_z;

    /**
     * @OneToMany(targetEntity="Node", mappedBy="zone")
     */
    private $nodes;

    /**
     * @ManyToOne(targetEntity="Place", inversedBy="zones")
     * @JoinColumn(name="place_id", referencedColumnName="id")
     */
    private $place;
    
    /**
     * @OneToOne(targetEntity="Zone")
     * @JoinColumn(name="zone_id", referencedColumnName="id")
     */
    private $mother_zone;

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

