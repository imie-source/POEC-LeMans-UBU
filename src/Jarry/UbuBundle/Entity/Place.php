<?php

namespace Jarry\UbuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Events;
use Jarry\UbuBundle\Entity\EntityBase as EntityBase;

/**
 * @ORM\Entity
 * @ORM\Table(name="place")
 */
class Place extends EntityBase
{
    
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
     * @ORM\ManyToOne(targetEntity="User", inversedBy="owner_places")
     * @ORM\JoinColumn(name="owner_id", referencedColumnName="id")
     */
    private $owner;
    
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
     * @ORM\OneToMany(targetEntity="Zone", mappedBy="place", cascade=("remove"))
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
    /**
     * @var string
     */
    private $address_street;

    /**
     * @var string
     */
    private $address_number;

    /**
     * @var string
     */
    private $address_city;

    /**
     * @var string
     */
    private $address_zip;

    /**
     * @var string
     */
    private $octomap_link;

    /**
     * @var string
     */
    private $unique_secret_code;

    /**
     * @ORM\OneToMany(targetEntity="PlaceUser", mappedBy="place")
     */
    private $places_users;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Place
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
     * Set addressStreet
     *
     * @param string $addressStreet
     *
     * @return Place
     */
    public function setAddressStreet($addressStreet)
    {
        $this->address_street = $addressStreet;

        return $this;
    }

    /**
     * Get addressStreet
     *
     * @return string
     */
    public function getAddressStreet()
    {
        return $this->address_street;
    }

    /**
     * Set addressNumber
     *
     * @param string $addressNumber
     *
     * @return Place
     */
    public function setAddressNumber($addressNumber)
    {
        $this->address_number = $addressNumber;

        return $this;
    }

    /**
     * Get addressNumber
     *
     * @return string
     */
    public function getAddressNumber()
    {
        return $this->address_number;
    }

    /**
     * Set addressCity
     *
     * @param string $addressCity
     *
     * @return Place
     */
    public function setAddressCity($addressCity)
    {
        $this->address_city = $addressCity;

        return $this;
    }

    /**
     * Get addressCity
     *
     * @return string
     */
    public function getAddressCity()
    {
        return $this->address_city;
    }

    /**
     * Set addressZip
     *
     * @param string $addressZip
     *
     * @return Place
     */
    public function setAddressZip($addressZip)
    {
        $this->address_zip = $addressZip;

        return $this;
    }

    /**
     * Get addressZip
     *
     * @return string
     */
    public function getAddressZip()
    {
        return $this->address_zip;
    }

    /**
     * Set octomapLink
     *
     * @param string $octomapLink
     *
     * @return Place
     */
    public function setOctomapLink($octomapLink)
    {
        $this->octomap_link = $octomapLink;

        return $this;
    }

    /**
     * Get octomapLink
     *
     * @return string
     */
    public function getOctomapLink()
    {
        return $this->octomap_link;
    }

    /**
     * Set gpsLat
     *
     * @param float $gpsLat
     *
     * @return Place
     */
    public function setGpsLat($gpsLat)
    {
        $this->gps_lat = $gpsLat;

        return $this;
    }

    /**
     * Get gpsLat
     *
     * @return float
     */
    public function getGpsLat()
    {
        return $this->gps_lat;
    }

    /**
     * Set gpsLong
     *
     * @param float $gpsLong
     *
     * @return Place
     */
    public function setGpsLong($gpsLong)
    {
        $this->gps_long = $gpsLong;

        return $this;
    }

    /**
     * Get gpsLong
     *
     * @return float
     */
    public function getGpsLong()
    {
        return $this->gps_long;
    }

    /**
     * Set gpsAlt
     *
     * @param float $gpsAlt
     *
     * @return Place
     */
    public function setGpsAlt($gpsAlt)
    {
        $this->gps_alt = $gpsAlt;

        return $this;
    }

    /**
     * Get gpsAlt
     *
     * @return float
     */
    public function getGpsAlt()
    {
        return $this->gps_alt;
    }

    /**
     * Set compasX
     *
     * @param float $compasX
     *
     * @return Place
     */
    public function setCompasX($compasX)
    {
        $this->compas_x = $compasX;

        return $this;
    }

    /**
     * Get compasX
     *
     * @return float
     */
    public function getCompasX()
    {
        return $this->compas_x;
    }

    /**
     * Set compasY
     *
     * @param float $compasY
     *
     * @return Place
     */
    public function setCompasY($compasY)
    {
        $this->compas_y = $compasY;

        return $this;
    }

    /**
     * Get compasY
     *
     * @return float
     */
    public function getCompasY()
    {
        return $this->compas_y;
    }

    /**
     * Set compasZ
     *
     * @param float $compasZ
     *
     * @return Place
     */
    public function setCompasZ($compasZ)
    {
        $this->compas_z = $compasZ;

        return $this;
    }

    /**
     * Get compasZ
     *
     * @return float
     */
    public function getCompasZ()
    {
        return $this->compas_z;
    }

    /**
     * Set ownerId
     *
     * @param integer $ownerId
     *
     * @return Place
     */
    public function setOwnerId($ownerId)
    {
        $this->owner_id = $ownerId;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return integer
     */
    public function getOwnerId()
    {
        return $this->getOwner()->getId();
    }

    /**
     * Set uniqueSecretCode
     *
     * @param string $uniqueSecretCode
     *
     * @return Place
     */
    public function setUniqueSecretCode($uniqueSecretCode)
    {
        $this->unique_secret_code = $uniqueSecretCode;

        return $this;
    }

    /**
     * Get uniqueSecretCode
     *
     * @return string
     */
    public function getUniqueSecretCode()
    {
        return $this->unique_secret_code;
    }



    /**
     * Set address
     *
     * @param string $address
     *
     * @return Place
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return Place
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zip
     *
     * @param string $zip
     *
     * @return Place
     */
    public function setZip($zip)
    {
        $this->zip = $zip;

        return $this;
    }

    /**
     * Get zip
     *
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }

    /**
     * Set secretCode
     *
     * @param string $secretCode
     *
     * @return Place
     */
    public function setSecretCode($secretCode)
    {
        $this->secretCode = $secretCode;

        return $this;
    }

    /**
     * Get secretCode
     *
     * @return string
     */
    public function getSecretCode()
    {
        return $this->secretCode;
    }

    /**
     * Set ormLink
     *
     * @param string $ormLink
     *
     * @return Place
     */
    public function setOrmLink($ormLink)
    {
        $this->ormLink = $ormLink;

        return $this;
    }

    /**
     * Get ormLink
     *
     * @return string
     */
    public function getOrmLink()
    {
        return $this->ormLink;
    }
    
    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Set owner
     *
     * @param \Jarry\UbuBundle\Entity\User $owner
     *
     * @return Place
     */
    public function setOwner(\Jarry\UbuBundle\Entity\User $owner = null)
    {
        $this->owner = $owner;
        if (!$owner->getOwnerPlaces()->contains($this)) {
            $owner->addOwnerPlace($this);
        }
        return $this;
    }

    /**
     * Get owner
     *
     * @return \Jarry\UbuBundle\Entity\User
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set user
     *
     * @param \Jarry\UbuBundle\Entity\User $user
     *
     * @return Place
     */
    public function setUser(\Jarry\UbuBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Jarry\UbuBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    
    public function toString() {
        return $this->name;
    }
}
