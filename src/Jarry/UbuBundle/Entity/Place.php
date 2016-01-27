<?php

namespace Jarry\UbuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name='place')
 */
class Place
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
     * @ORM\Column(type="string", length=255)
     */
    private $address;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $city;
    
    /**
     * @ORM\Column(type="string", length=5)
     */
    private $zip;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $secretCode;
    
    /**
     * @ManyToOne(targetEntity="User")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $ownerID;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ormLink;
    
    /**
     * @ORM\Column(type="float")
     */
    private $gps_lat;
    
    /**
     * @ORM\Column(type="float")
     */
    private $gps_long;
    
    /**
     * @ORM\Column(type="float")
     */
    private $gps_alt;
    
    /**
     * @ORM\Column(type="float")
     */
    private $compas_x;
    
    /**
     * @ORM\Column(type="float")
     */
    private $compas_y;
    
    /**
     * @ORM\Column(type="float")
     */
    private $compas_z;
    
    /**
     * @OneToMany(targetEntity="Zone", mappedBy="zones")
     */
    private $zones;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->places_users = new \Doctrine\Common\Collections\ArrayCollection();
        $this->zones = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Add placesUser
     *
     * @param \Jarry\UbuBundle\Entity\PlaceUser $placesUser
     *
     * @return Place
     */
    public function addPlacesUser(\Jarry\UbuBundle\Entity\PlaceUser $placesUser)
    {
        $this->places_users[] = $placesUser;

        return $this;
    }

    /**
     * Remove placesUser
     *
     * @param \Jarry\UbuBundle\Entity\PlaceUser $placesUser
     */
    public function removePlacesUser(\Jarry\UbuBundle\Entity\PlaceUser $placesUser)
    {
        $this->places_users->removeElement($placesUser);
    }

    /**
     * Get placesUsers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPlacesUsers()
    {
        return $this->places_users;
    }

    /**
     * Add zone
     *
     * @param \Jarry\UbuBundle\Entity\Zone $zone
     *
     * @return Place
     */
    public function addZone(\Jarry\UbuBundle\Entity\Zone $zone)
    {
        $this->zones[] = $zone;

        return $this;
    }

    /**
     * Remove zone
     *
     * @param \Jarry\UbuBundle\Entity\Zone $zone
     */
    public function removeZone(\Jarry\UbuBundle\Entity\Zone $zone)
    {
        $this->zones->removeElement($zone);
    }

    /**
     * Get zones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getZones()
    {
        return $this->zones;
    }
}

