<?php

namespace Jarry\UbuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Events;
use Jarry\UbuBundle\Entity\EntityBase as EntityBase;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends EntityBase
{    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $username;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $login;
    
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $password;

    /**
     * @ORM\OneToMany(targetEntity="PlaceUser", mappedBy="user")
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
    
    /**
     * @var string
     */
    private $first_name;

    /**
     * @var string
     */
    private $last_name;

    /**
     * @var \DateTime
     */
    private $date_of_birth;

    /**
     * @var boolean
     */
    private $is_female;

    /**
     * @var string
     */
    private $locale;

    /**
     * @var string
     */
    private $time_zone;

    /**
     * @var string
     */
    private $address_purchase_street;

    /**
     * @var string
     */
    private $address_purchase_number;

    /**
     * @var string
     */
    private $address_purchase_city;

    /**
     * @var string
     */
    private $address_purchase_zip;

    /**
     * @var string
     */
    private $email;

    /**
     * @var boolean
     */
    private $is_root;

    /**
     * @var string
     */
    private $salt;

    /**
     * @var int
     */
    private $facebook_id;

    /**
     * @var int
     */
    private $twitter_id;

    /**
     * @var int
     */
    private $google_plus_id;

    /**
     * @var boolean
     */
    private $enable_account;

    /**
     * @var boolean
     */
    private $locking_account;

    /**
     * @var \DateTime
     */
    private $create_at;

    /**
     * @var \DateTime
     */
    private $last_login_at;

    /**
     * @var string
     */
    private $folder_of_face;

    /**
     * @var string
     */
    private $folder_of_voice;

    /**
     * @var string
     */
    private $td_model_fill_path;

    /**
     * @var string
     */
    private $maps_path;


    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->first_name = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->last_name = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set dateOfBirth
     *
     * @param \DateTime $dateOfBirth
     *
     * @return User
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->date_of_birth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return \DateTime
     */
    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    /**
     * Set isFemale
     *
     * @param boolean $isFemale
     *
     * @return User
     */
    public function setIsFemale($isFemale)
    {
        $this->is_female = $isFemale;

        return $this;
    }

    /**
     * Get isFemale
     *
     * @return boolean
     */
    public function getIsFemale()
    {
        return $this->is_female;
    }

    /**
     * Set locale
     *
     * @param string $locale
     *
     * @return User
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set timeZone
     *
     * @param string $timeZone
     *
     * @return User
     */
    public function setTimeZone($timeZone)
    {
        $this->time_zone = $timeZone;

        return $this;
    }

    /**
     * Get timeZone
     *
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Set addressPurchaseStreet
     *
     * @param string $addressPurchaseStreet
     *
     * @return User
     */
    public function setAddressPurchaseStreet($addressPurchaseStreet)
    {
        $this->address_purchase_street = $addressPurchaseStreet;

        return $this;
    }

    /**
     * Get addressPurchaseStreet
     *
     * @return string
     */
    public function getAddressPurchaseStreet()
    {
        return $this->address_purchase_street;
    }

    /**
     * Set addressPurchaseNumber
     *
     * @param string $addressPurchaseNumber
     *
     * @return User
     */
    public function setAddressPurchaseNumber($addressPurchaseNumber)
    {
        $this->address_purchase_number = $addressPurchaseNumber;

        return $this;
    }

    /**
     * Get addressPurchaseNumber
     *
     * @return string
     */
    public function getAddressPurchaseNumber()
    {
        return $this->address_purchase_number;
    }

    /**
     * Set addressPurchaseCity
     *
     * @param string $addressPurchaseCity
     *
     * @return User
     */
    public function setAddressPurchaseCity($addressPurchaseCity)
    {
        $this->address_purchase_city = $addressPurchaseCity;

        return $this;
    }

    /**
     * Get addressPurchaseCity
     *
     * @return string
     */
    public function getAddressPurchaseCity()
    {
        return $this->address_purchase_city;
    }

    /**
     * Set addressPurchaseZip
     *
     * @param string $addressPurchaseZip
     *
     * @return User
     */
    public function setAddressPurchaseZip($addressPurchaseZip)
    {
        $this->address_purchase_zip = $addressPurchaseZip;

        return $this;
    }

    /**
     * Get addressPurchaseZip
     *
     * @return string
     */
    public function getAddressPurchaseZip()
    {
        return $this->address_purchase_zip;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set isRoot
     *
     * @param boolean $isRoot
     *
     * @return User
     */
    public function setIsRoot($isRoot)
    {
        $this->is_root = $isRoot;

        return $this;
    }

    /**
     * Get isRoot
     *
     * @return boolean
     */
    public function getIsRoot()
    {
        return $this->is_root;
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
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set salt
     *
     * @param string $salt
     *
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set facebookId
     *
     * @param \int $facebookId
     *
     * @return User
     */
    public function setFacebookId(\int $facebookId)
    {
        $this->facebook_id = $facebookId;

        return $this;
    }

    /**
     * Get facebookId
     *
     * @return \int
     */
    public function getFacebookId()
    {
        return $this->facebook_id;
    }

    /**
     * Set twitterId
     *
     * @param \int $twitterId
     *
     * @return User
     */
    public function setTwitterId(\int $twitterId)
    {
        $this->twitter_id = $twitterId;

        return $this;
    }

    /**
     * Get twitterId
     *
     * @return \int
     */
    public function getTwitterId()
    {
        return $this->twitter_id;
    }

    /**
     * Set googlePlusId
     *
     * @param \int $googlePlusId
     *
     * @return User
     */
    public function setGooglePlusId(\int $googlePlusId)
    {
        $this->google_plus_id = $googlePlusId;

        return $this;
    }

    /**
     * Get googlePlusId
     *
     * @return \int
     */
    public function getGooglePlusId()
    {
        return $this->google_plus_id;
    }

    /**
     * Set enableAccount
     *
     * @param boolean $enableAccount
     *
     * @return User
     */
    public function setEnableAccount($enableAccount)
    {
        $this->enable_account = $enableAccount;

        return $this;
    }

    /**
     * Get enableAccount
     *
     * @return boolean
     */
    public function getEnableAccount()
    {
        return $this->enable_account;
    }

    /**
     * Set lockingAccount
     *
     * @param boolean $lockingAccount
     *
     * @return User
     */
    public function setLockingAccount($lockingAccount)
    {
        $this->locking_account = $lockingAccount;

        return $this;
    }

    /**
     * Get lockingAccount
     *
     * @return boolean
     */
    public function getLockingAccount()
    {
        return $this->locking_account;
    }

    /**
     * Set createAt
     *
     * @param \DateTime $createAt
     *
     * @return User
     */
    public function setCreateAt($createAt)
    {
        $this->create_at = $createAt;

        return $this;
    }

    /**
     * Get createAt
     *
     * @return \DateTime
     */
    public function getCreateAt()
    {
        return $this->create_at;
    }

    /**
     * Set lastLoginAt
     *
     * @param \DateTime $lastLoginAt
     *
     * @return User
     */
    public function setLastLoginAt($lastLoginAt)
    {
        $this->last_login_at = $lastLoginAt;

        return $this;
    }

    /**
     * Get lastLoginAt
     *
     * @return \DateTime
     */
    public function getLastLoginAt()
    {
        return $this->last_login_at;
    }

    /**
     * Set folderOfFace
     *
     * @param string $folderOfFace
     *
     * @return User
     */
    public function setFolderOfFace($folderOfFace)
    {
        $this->folder_of_face = $folderOfFace;

        return $this;
    }

    /**
     * Get folderOfFace
     *
     * @return string
     */
    public function getFolderOfFace()
    {
        return $this->folder_of_face;
    }

    /**
     * Set folderOfVoice
     *
     * @param string $folderOfVoice
     *
     * @return User
     */
    public function setFolderOfVoice($folderOfVoice)
    {
        $this->folder_of_voice = $folderOfVoice;

        return $this;
    }

    /**
     * Get folderOfVoice
     *
     * @return string
     */
    public function getFolderOfVoice()
    {
        return $this->folder_of_voice;
    }

    /**
     * Set tdModelFillPath
     *
     * @param string $tdModelFillPath
     *
     * @return User
     */
    public function setTdModelFillPath($tdModelFillPath)
    {
        $this->td_model_fill_path = $tdModelFillPath;

        return $this;
    }

    /**
     * Get tdModelFillPath
     *
     * @return string
     */
    public function getTdModelFillPath()
    {
        return $this->td_model_fill_path;
    }

    /**
     * Set mapsPath
     *
     * @param string $mapsPath
     *
     * @return User
     */
    public function setMapsPath($mapsPath)
    {
        $this->maps_path = $mapsPath;

        return $this;
    }

    /**
     * Get mapsPath
     *
     * @return string
     */
    public function getMapsPath()
    {
        return $this->maps_path;
    }
    /**
     * @var integer
     */
    private $id;



    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }
}
