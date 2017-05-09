<?php

namespace Gbrfix\PlatformBundle\Entity;

use Symfony\Component\HttpFoundation\Tests\StringableObject;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Config\Definition\IntegerNode;
use Symfony\Component\Config\Definition\BooleanNode;
use Symfony\Component\Validator\Context\ExecutionContextInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Gbrfix\PlatformBundle\Validator\Antiflood;

/**
 * Advert
 *
 * @ORM\Table(name="advert")
 * @ORM\Entity(repositoryClass="Gbrfix\PlatformBundle\Repository\AdvertRepository")
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity(fields="title", message="Une annonce existe déjà avec ce titre.")
 */
class Advert
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
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column(name="slug", type="string", length=255, unique=true)
     */
    private $slug;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     * @Assert\DateTime()
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\Length(min=10)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     * @Assert\Length(min=2)
     */
    private $author;
    
    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\Email()
     */
    private $email;
    
    /**
     * @var string
     * 
     * @ORM\Column(name="ip", type="string", length=255)
     * @Assert\Ip
     */
    private $ip;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     * @Assert\NotBlank()
     * @Antiflood()
     */
    private $content;
    
    /**
     * @ORM\Column(name="published", type="boolean")
     */
    private $published = true;
    
    /**
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;
    
    /**
     * @ORM\Column(name="nb_applications", type="integer")
     */
    private $nbApplications = 0;
    
    /**
     * @ORM\OneToOne(targetEntity="Gbrfix\PlatformBundle\Entity\Image", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $image;
    
    /**
     * @ORM\ManyToMany(targetEntity="Gbrfix\PlatformBundle\Entity\Category", cascade={"persist"})
     * @ORM\JoinTable(name="advert_category")
     */
    private $categories;
    
    /**
     * @ORM\OneToMany(targetEntity="Gbrfix\PlatformBundle\Entity\Application", mappedBy="advert")
     */
    private $applications;
    
    /**
     * @ORM\ManyToOne(targetEntity="Gbrfix\UserBundle\Entity\User", inversedBy="adverts")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
    
    public function __construct() {
    	$this->date = new \DateTime();
    	$this->categories = new ArrayCollection();
    	$this->applications = new ArrayCollection();
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Advert
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
     * Set title
     *
     * @param string $title
     *
     * @return Advert
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Advert
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Advert
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
     * Set published
     *
     * @param boolean $published
     *
     * @return Advert
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set image
     *
     * @param \Gbrfix\PlatformBundle\Entity\Image $image
     *
     * @return Advert
     */
    public function setImage(\Gbrfix\PlatformBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \Gbrfix\PlatformBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add category
     *
     * @param \Gbrfix\PlatformBundle\Entity\Category $category
     *
     * @return Advert
     */
    public function addCategory(\Gbrfix\PlatformBundle\Entity\Category $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Gbrfix\PlatformBundle\Entity\Category $category
     */
    public function removeCategory(\Gbrfix\PlatformBundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add application
     *
     * @param \Gbrfix\PlatformBundle\Entity\Application $application
     *
     * @return Advert
     */
    public function addApplication(\Gbrfix\PlatformBundle\Entity\Application $application)
    {
        $this->applications[] = $application;
        
        // On lie l'annonce à la candidature (relation bidirectionnelle)
        $application->setAdvert($this);

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
        
        // Si la relation était facultative (nullable=true):
        // $application->setAdvert(null);
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
    
    /**
     * @ORM\PreUpdate
     */
    public function updateDate() {
    	$this->setUpdatedAt(new \DateTime());
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Advert
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    
    public function increaseApplication() {
    	$this->nbApplications++;
    }
    
    public function decreaseApplication() {
    	$this->nbApplications--;
    }

    /**
     * Set nbApplications
     *
     * @param integer $nbApplications
     *
     * @return Advert
     */
    public function setNbApplications($nbApplications)
    {
        $this->nbApplications = $nbApplications;

        return $this;
    }

    /**
     * Get nbApplications
     *
     * @return integer
     */
    public function getNbApplications()
    {
        return $this->nbApplications;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Advert
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
     * Set slug
     *
     * @param string $slug
     *
     * @return Advert
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }
    
    /**
     * @Assert\Callback
     */
    public function isContentValid(ExecutionContextInterface $context) {
    	$forbiddenWords = array('démotivation', 'abandon');
    	
    	if (preg_match('#'.implode('|', $forbiddenWords).'#', $this->content)) {
    		// La règle est violée, on définit l'erreur
    		$context->buildViolation('Contenu invalide car il contient un mot interdit.')
    			->atPath('content') // Attribut de l'objet qui est violé
    			->addViolation(); // Ceci déclenche l'erreur
    	}
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return Advert
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set user
     *
     * @param \Gbrfix\UserBundle\Entity\User $user
     *
     * @return Advert
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
