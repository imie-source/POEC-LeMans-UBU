<?php

namespace Jarry\UbuBundle\Entity;

/**
 * User
 */
class User
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
     * Constructor
     */
    public function __construct()
    {
        $this->places_users = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return User
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
}

