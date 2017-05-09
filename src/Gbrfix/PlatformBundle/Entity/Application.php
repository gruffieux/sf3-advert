<?php

namespace Gbrfix\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Application
 *
 * @ORM\Table(name="application")
 * @ORM\Entity(repositoryClass="Gbrfix\PlatformBundle\Repository\ApplicationRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Application
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
     * @ORM\ManyToOne(targetEntity="Gbrfix\UserBundle\Entity\User", inversedBy="applications")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;

    /**
     * TODO: Attacher des fichiers de type document ou archive
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    
    /**
     * @ORM\ManyToOne(targetEntity="Gbrfix\PlatformBundle\Entity\Advert", inversedBy="applications")
     * @ORM\JoinColumn(nullable=false)
     */
    private $advert;
    
    /**
     * @ORM\OneToMany(targetEntity="Gbrfix\PlatformBundle\Entity\Document", mappedBy="application", cascade={"persist"})
     */
    private $documents;

    public function __construct() {
    	$this->date = new \DateTime();
    }

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
     * Set content
     *
     * @param string $content
     *
     * @return Application
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Application
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set advert
     *
     * @param \Gbrfix\PlatformBundle\Entity\Advert $advert
     *
     * @return Application
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
     * @ORM\PrePersist
     */
    public function increase() {
    	$this->advert->increaseApplication();
    }
    
    /**
     * @ORM\PreRemove
     */
    public function decrease() {
    	$this->advert->decreaseApplication();
    }

    /**
     * Set user
     *
     * @param \Gbrfix\UserBundle\Entity\User $user
     *
     * @return Application
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

    /**
     * Add document
     *
     * @param \Gbrfix\PlatformBundle\Entity\Document $document
     *
     * @return Application
     */
    public function addDocument(\Gbrfix\PlatformBundle\Entity\Document $document)
    {
        $this->documents[] = $document;

        return $this;
    }

    /**
     * Remove document
     *
     * @param \Gbrfix\PlatformBundle\Entity\Document $document
     */
    public function removeDocument(\Gbrfix\PlatformBundle\Entity\Document $document)
    {
        $this->documents->removeElement($document);
    }

    /**
     * Get documents
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocuments()
    {
        return $this->documents;
    }
}
