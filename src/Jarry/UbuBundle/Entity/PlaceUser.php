<?php

namespace Jarry\UbuBundle\Entity;

/**
 * PlaceUser
 */
class PlaceUser
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Jarry\UbuBundle\Entity\Place
     */
    private $place;

    /**
     * @var \Jarry\UbuBundle\Entity\User
     */
    private $user;


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
     * Set place
     *
     * @param \Jarry\UbuBundle\Entity\Place $place
     *
     * @return PlaceUser
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

    /**
     * Set user
     *
     * @param \Jarry\UbuBundle\Entity\User $user
     *
     * @return PlaceUser
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
}
