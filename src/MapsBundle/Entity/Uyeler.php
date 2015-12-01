<?php

namespace MapsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Table(name="Uyeler")
 * @ORM\Entity(repositoryClass="MapsBundle\Entity\UyelerRepository")
 */
class Uyeler implements UserInterface, \Serializable
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
    
    public function __construct()
    {
        $this->isActive = true;
        // may not be needed, see section on salt below
        // $this->salt = md5(uniqid(null, true));
    }

    public function getUsername()
    {
        return $this->uyerumuz;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getPassword()
    {
        return $this->uyesifre;
    }

    public function getRoles()
    {
        return array('ROLE_ADMIN');
    }

    public function eraseCredentials()
    {
    }

    /** @see \Serializable::serialize() */
    public function serialize()
    {
        return serialize(array(
            $this->uyeid,
            $this->uyeeposta,
            $this->uyesifre,
            // see section on salt below
            // $this->salt,
        ));
    }

    /** @see \Serializable::unserialize() */
    public function unserialize($serialized)
    {
        list (
            $this->uyeid,
            $this->uyeeposta,
            $this->uyesifre,
            // see section on salt below
            // $this->salt
        ) = unserialize($serialized);
    }
    
    /**
     * @var integer
     */
    private $uyeid;

    /**
     * @var string
     */
    private $uyeadi;

    /**
     * @var string
     */
    private $uyesoyadi;

    /**
     * @var string
     */
    private $uyerumuz;

    /**
     * @var string
     */
    private $uyeeposta;

    /**
     * @var string
     */
    private $uyesifre;

    /**
     * @var \DateTime
     */
    private $uyetarih;


    /**
     * Get uyeid
     *
     * @return integer
     */
    public function getUyeid()
    {
        return $this->uyeid;
    }

    /**
     * Set uyeadi
     *
     * @param string $uyeadi
     *
     * @return Uyeler
     */
    public function setUyeadi($uyeadi)
    {
        $this->uyeadi = $uyeadi;

        return $this;
    }

    /**
     * Get uyeadi
     *
     * @return string
     */
    public function getUyeadi()
    {
        return $this->uyeadi;
    }

    /**
     * Set uyesoyadi
     *
     * @param string $uyesoyadi
     *
     * @return Uyeler
     */
    public function setUyesoyadi($uyesoyadi)
    {
        $this->uyesoyadi = $uyesoyadi;

        return $this;
    }

    /**
     * Get uyesoyadi
     *
     * @return string
     */
    public function getUyesoyadi()
    {
        return $this->uyesoyadi;
    }

    /**
     * Set uyerumuz
     *
     * @param string $uyerumuz
     *
     * @return Uyeler
     */
    public function setUyerumuz($uyerumuz)
    {
        $this->uyerumuz = $uyerumuz;

        return $this;
    }

    /**
     * Get uyerumuz
     *
     * @return string
     */
    public function getUyerumuz()
    {
        return $this->uyerumuz;
    }

    /**
     * Set uyeeposta
     *
     * @param string $uyeeposta
     *
     * @return Uyeler
     */
    public function setUyeeposta($uyeeposta)
    {
        $this->uyeeposta = $uyeeposta;

        return $this;
    }

    /**
     * Get uyeeposta
     *
     * @return string
     */
    public function getUyeeposta()
    {
        return $this->uyeeposta;
    }

    /**
     * Set uyesifre
     *
     * @param string $uyesifre
     *
     * @return Uyeler
     */
    public function setUyesifre($uyesifre)
    {
        $this->uyesifre = $uyesifre;

        return $this;
    }

    /**
     * Get uyesifre
     *
     * @return string
     */
    public function getUyesifre()
    {
        return $this->uyesifre;
    }

    /**
     * Set uyetarih
     *
     * @param \DateTime $uyetarih
     *
     * @return Uyeler
     */
    public function setUyetarih($uyetarih)
    {
        $this->uyetarih = $uyetarih;

        return $this;
    }

    /**
     * Get uyetarih
     *
     * @return \DateTime
     */
    public function getUyetarih()
    {
        return $this->uyetarih;
    }
}
