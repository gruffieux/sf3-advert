<?php

namespace Gbrfix\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * Document
 *
 * @ORM\Table(name="document")
 * @ORM\Entity(repositoryClass="Gbrfix\PlatformBundle\Repository\DocumentRepository")
 * @Vich\Uploadable
 */
class Document {
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=255)
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="mimetype", type="string", length=255)
     */
    private $mimetype;
    
    /**
     * @ORM\Column(name="updated_at", type="datetime")
     *
     * @var \DateTime
     */
    private $updatedAt;
    
    /**
     * @ORM\Column(name="filename", type="string", length=255)
     *
     * @var string
     */
    private $filename;
    
    /**
     * @ORM\ManyToOne(targetEntity="Gbrfix\PlatformBundle\Entity\Application", inversedBy="documents")
     * @ORM\JoinColumn(nullable=true)
     */
    private $application;
    
    /**
     * NOTE: This is not a mapped field of entity metadata, just a simple property.
     *
     * @Vich\UploadableField(mapping="attachement_document", fileNameProperty="filename")
     */
    private $file;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Document
     */
    public function setTitle($title) {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set extension
     *
     * @param string $extension
     *
     * @return Document
     */
    public function setExtension($extension) {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension() {
        return $this->extension;
    }

    /**
     * Set mimetype
     *
     * @param string $mimetype
     *
     * @return Document
     */
    public function setMimetype($mimetype) {
        $this->mimetype = $mimetype;

        return $this;
    }

    /**
     * Get mimetype
     *
     * @return string
     */
    public function getMimetype() {
        return $this->mimetype;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Document
     */
    public function setFilename($filename) {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename() {
        return $this->filename;
    }
    
    public function setFile(File $file = null) {
    	$this->file = $file;
    
    	if ($file) {
    		// It is required that at least one field changes if you are using doctrine
    		// otherwise the event listeners won't be called and the file is lost
    		$this->filename = $file->getFilename();
    		$this->extension = $file->guessExtension();
    		$this->mimetype = $file->getMimeType();
    		$this->updatedAt = new \DateTime('now');
    	}
    
    	return $this;
    }
    
    public function getFile() {
    	return $this->file;
    }

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Document
     */
    public function setUpdatedAt($updatedAt) {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()  {
        return $this->updatedAt;
    }

    /**
     * Set application
     *
     * @param \Gbrfix\PlatformBundle\Entity\Application $application
     *
     * @return Document
     */
    public function setApplication(\Gbrfix\PlatformBundle\Entity\Application $application)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get application
     *
     * @return \Gbrfix\PlatformBundle\Entity\Application
     */
    public function getApplication()
    {
        return $this->application;
    }
}
