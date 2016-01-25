<?php

namespace Jarry\UbuBundle\Entity;

/**
 * Place
 */
class Place
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $places_users;

    /**
     * @var \Doctrine\Common\Collections\Collection
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
    private $name;

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
     * @var float
     */
    private $gps_lat;

    /**
     * @var float
     */
    private $gps_long;

    /**
     * @var float
     */
    private $gps_alt;

    /**
     * @var float
     */
    private $compas_x;

    /**
     * @var float
     */
    private $compas_y;

    /**
     * @var float
     */
    private $compas_z;

    /**
     * @var int
     */
    private $owner_id;

    /**
     * @var string
     */
    private $unique_secret_code;


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
     * @param \int $ownerId
     *
     * @return Place
     */
    public function setOwnerId(\int $ownerId)
    {
        $this->owner_id = $ownerId;

        return $this;
    }

    /**
     * Get ownerId
     *
     * @return \int
     */
    public function getOwnerId()
    {
        return $this->owner_id;
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
}
