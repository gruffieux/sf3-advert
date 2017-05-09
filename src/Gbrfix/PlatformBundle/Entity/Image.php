<?php

namespace Gbrfix\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * Image
 *
 * @ORM\Table(name="image")
 * @ORM\Entity(repositoryClass="Gbrfix\PlatformBundle\Repository\ImageRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Image
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
     * @var string
     *
     * @ORM\Column(name="ext", type="string", length=255)
     */
    private $ext;

    /**
     * @var string
     *
     * @ORM\Column(name="alt", type="string", length=255)
     */
    private $alt;
    
    private $file;
    private $tempFilename;


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
     * Set extension
     *
     * @param string $ext
     *
     * @return Image
     */
    public function setExt($ext)
    {
        $this->ext = $ext;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExt()
    {
        return $this->ext;
    }

    /**
     * Set alt
     *
     * @param string $alt
     *
     * @return Image
     */
    public function setAlt($alt)
    {
        $this->alt = $alt;

        return $this;
    }

    /**
     * Get alt
     *
     * @return string
     */
    public function getAlt()
    {
        return $this->alt;
    }
    
    /**
     * Gestion du chargement lorsque le fichier existe déjà
     */
    public function setFile($file) {
    	$this->file = $file;
    	
    	if ($this->ext !== null) {
    		$this->tempFilename = $this->ext;
    		$this->ext = $this->alt = null;
    	}
    }
    
    public function getFile() {
    	return $this->file;
    }
    
    /**
     * @ORM\PrePersist()
     * @ORM\PreUpdate()
     */
    public function preUpload() {
    	if ($this->file === null) {
    		return;
    	}
    	
    	// Le nom du fichier est son id, on doit juste stocker également son extension
    	$this->ext = $this->file->guessExtension();
    	
    	// Le texte alternatif est le nom du fichier original
    	$this->alt = $this->file->getClientOriginalName();
    }
    
    /**
     * @ORM\PostPersist()
     * @ORM\PostUpdate()
     */
    public function upload() {
    	if ($this->file === null) {
    		return;
    	}
    	
    	// Si un fichier existe, on le supprime
    	if ($this->tempFilename !== null) {
    		$oldFile = $this->getUploadRootDir().'/'.$this->id.'.'.$this->tempFilename;
    		
    		if (file_exists($oldFile)) {
    			unlink($oldFile);
    		}
    	}
    	
    	// On déplace le fichier envoyé vers le répertoire web d'uploads
    	$this->file->move($this->getUploadRootDir(), $this->id.'.'.$this->ext);
    }
    
    /**
     * @ORM\PreRemove()
     */
    public function preRemoveUpload() {
    	$this->tempFilename = $this->getUploadRootDir().'/'.$this->id.'.'.$this->ext;
    }
    
    /**
     * @ORM\PostRemove()
     */
    public function removeUpload() {
    	if (file_exists($this->tempFilename)) {
    		unlink($this->tempFilename);
    	}
    }
    
    /**
     * Chemin relatif au dossier /web
     * 
     * @return string
     */
    public function getUploadDir() {
    	return 'uploads/img';
    }
    
    /**
     * Chemin complet vers le dossier d'upload
     * 
     * @return string
     */
    public function getUploadRootDir() {
    	return __DIR__.'/../../../../web/'.$this->getUploadDir();
    }
    
    public function getWebPath() {
    	return $this->getUploadDir().'/'.$this->id.'.'.$this->ext;
    }
    
    /**
     * @Assert\IsTrue(message="Le fichier image est invalide, veuiller charger une image (jpeg, png, gif) uniquement.")
     */
    public function isImageValid() {
    	if ($this->file === null) {
    		return true;
    	}
    	
    	if (!$this->file->isValid()) {
    		return false;
    	}
    	
    	$mimeType = $this->file->getMimeType();
    	
    	return in_array($mimeType, array('image/jpeg', 'image/png', 'image/gif'));
    }
}
