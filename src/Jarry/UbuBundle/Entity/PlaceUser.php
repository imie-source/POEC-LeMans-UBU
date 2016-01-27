<?php

namespace Jarry\UbuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Jarry\UbuBundle\Entity\EntityBase as EntityBase;

/**
 * @ORM\Entity
 * @ORM\Table(name='place_user')
 */
class PlaceUser extends EntityBase
{

    /**
     * @ManyToOne(targetEntity="User", inversedBy="places_users")
     * @JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ManyToOne(targetEntity="Place", inversedBy="places_users")
     * @JoinColumn(name="place_id", referencedColumnName="id")
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
    /**
     * @var integer
     */
    private $id;


}
