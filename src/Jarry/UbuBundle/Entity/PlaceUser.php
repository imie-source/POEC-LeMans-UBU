<?php

namespace Jarry\UbuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Events;
use Jarry\UbuBundle\Entity\EntityBase as EntityBase;


use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="ubu_place_user")
 */
class PlaceUser extends EntityBase
{

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="places_users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Place", inversedBy="places_users")
     * @ORM\JoinColumn(name="place_id", referencedColumnName="id")
     */
    private $place;


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
