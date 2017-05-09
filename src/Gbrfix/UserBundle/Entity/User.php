<?php

namespace Gbrfix\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="Gbrfix\UserBundle\Repository\UserRepository")
 */
class User extends BaseUser {
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @ORM\OneToMany(targetEntity="Gbrfix\PlatformBundle\Entity\Advert", mappedBy="user")
     */
    private $adverts;
    
    /**
     * @ORM\OneToMany(targetEntity="Gbrfix\PlatformBundle\Entity\Application", mappedBy="user")
     */
    private $applications;

    /**
     * @var string
     *
     * @ORM\Column(name="ip", type="string", length=255, nullable=true)
     */
    private $ip;

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return User
     */
    public function setIp($ip) {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp() {
        return $this->ip;
    }

    /**
     * Add advert
     *
     * @param \Gbrfix\PlatformBundle\Entity\Advert $advert
     *
     * @return User
     */
    public function addAdvert(\Gbrfix\PlatformBundle\Entity\Advert $advert)
    {
        $this->adverts[] = $advert;

        return $this;
    }

    /**
     * Remove advert
     *
     * @param \Gbrfix\PlatformBundle\Entity\Advert $advert
     */
    public function removeAdvert(\Gbrfix\PlatformBundle\Entity\Advert $advert)
    {
        $this->adverts->removeElement($advert);
    }

    /**
     * Get adverts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAdverts()
    {
        return $this->adverts;
    }

    /**
     * Add application
     *
     * @param \Gbrfix\PlatformBundle\Entity\Application $application
     *
     * @return User
     */
    public function addApplication(\Gbrfix\PlatformBundle\Entity\Application $application)
    {
        $this->applications[] = $application;

        return $this;
    }

    /**
     * Remove application
     *
     * @param \Gbrfix\PlatformBundle\Entity\Application $application
     */
    public function removeApplication(\Gbrfix\PlatformBundle\Entity\Application $application)
    {
        $this->applications->removeElement($application);
    }

    /**
     * Get applications
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApplications()
    {
        return $this->applications;
    }
}
