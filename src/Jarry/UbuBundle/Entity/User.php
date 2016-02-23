<?php
// src/AppBundle/Entity/User.php

namespace Jarry\UbuBundle\Entity;

#use FOS\UserBundle\Entity\User as BaseUser;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 * 
 * @ORM\HasLifecycleCallbacks()
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="PlaceUser", mappedBy="user")
     */
    protected $places_users;
    
    /**

     * @ORM\OneToMany(targetEntity="Place", mappedBy="owner")
     */
    protected $owner_places;


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
    /** @ORM\PrePersist */
    public function setCreatedAtValue()
    {
        $this->setRoles(array('ROLE_USER'));
    }
    
    /**
     * @var string
     */
    protected $first_name;

    /**
     * @var string
     */
    protected $last_name;

    /**
     * @var \DateTime
     */
    protected $date_of_birth;

    /**
     * @var boolean
     */
    protected $is_female;

    /**
     * @var string
     */
    protected $locale;

    /**
     * @var string
     */
    protected $time_zone;

    /**
     * @var string
     */
    protected $address_purchase_street;

    /**
     * @var string
     */
    protected $address_purchase_number;

    /**
     * @var string
     */
    protected $address_purchase_city;

    /**
     * @var string
     */
    protected $address_purchase_zip;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var boolean
     */
    protected $is_root;

    /**
     * @var string
     */
    protected $salt;

    /**
     * @var int
     */
    protected $facebook_id;

    /**
     * @var int
     */
    protected $twitter_id;

    /**
     * @var int
     */
    protected $google_plus_id;

    /**
     * @var boolean
     */
    protected $enable_account;

    /**
     * @var boolean
     */
    protected $locking_account;

    /**
     * @var \DateTime
     */
    protected $created_at;

    /**
     * @var \DateTime
     */
    protected $last_login_at;

    /**
     * @var string
     */
    protected $folder_of_face;

    /**
     * @var string
     */
    protected $folder_of_voice;

    /**
     * @var string
     */
    protected $td_model_fill_path;

    /**
     * @var string
     */
    protected $maps_path;


    public function __construct()
    {
        parent::__construct();
        $this->places_users = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return User
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Add ownerPlace
     *
     * @param \Jarry\UbuBundle\Entity\Place $ownerPlace
     *
     * @return User
     */
    public function addOwnerPlace(\Jarry\UbuBundle\Entity\Place $ownerPlace)
    {
        $this->owner_places[] = $ownerPlace;

        return $this;
    }

    /**
     * Remove ownerPlace
     *
     * @param \Jarry\UbuBundle\Entity\Place $ownerPlace
     */
    public function removeOwnerPlace(\Jarry\UbuBundle\Entity\Place $ownerPlace)
    {
        $this->owner_places->removeElement($ownerPlace);
    }

    /**
     * Get ownerPlaces
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOwnerPlaces()
    {
        return $this->owner_places;
    }
}
