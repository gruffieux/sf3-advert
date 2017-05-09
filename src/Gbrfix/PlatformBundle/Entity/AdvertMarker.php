<?php

namespace Gbrfix\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * AdvertMarker
 *
 * @ORM\Table(name="advert_marker")
 * @ORM\Entity(repositoryClass="Gbrfix\PlatformBundle\Repository\AdvertMarkerRepository")
 */
class AdvertMarker
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="state", type="smallint")
     */
    private $state;
    
    /**
     * @ORM\ManyToOne(targetEntity="Gbrfix\PlatformBundle\Entity\Advert")
     * @ORM\JoinColumn(nullable=false)
     */
    private $advert;
    
    /**
     * @ORM\ManyToOne(targetEntity="Gbrfix\UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set state
     *
     * @param integer $state
     *
     * @return AdvertMarker
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set advert
     *
     * @param \Gbrfix\PlatformBundle\Entity\Advert $advert
     *
     * @return AdvertMarker
     */
    public function setAdvert(\Gbrfix\PlatformBundle\Entity\Advert $advert)
    {
        $this->advert = $advert;

        return $this;
    }

    /**
     * Get advert
     *
     * @return \Gbrfix\PlatformBundle\Entity\Advert
     */
    public function getAdvert()
    {
        return $this->advert;
    }

    /**
     * Set user
     *
     * @param \Gbrfix\UserBundle\Entity\User $user
     *
     * @return AdvertMarker
     */
    public function setUser(\Gbrfix\UserBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Gbrfix\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
