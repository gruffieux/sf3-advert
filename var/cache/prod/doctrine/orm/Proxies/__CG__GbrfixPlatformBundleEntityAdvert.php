<?php

namespace Proxies\__CG__\Gbrfix\PlatformBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Advert extends \Gbrfix\PlatformBundle\Entity\Advert implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'id', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'slug', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'date', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'title', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'author', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'email', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'ip', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'content', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'published', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'updatedAt', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'nbApplications', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'image', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'categories', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'applications', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'id', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'slug', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'date', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'title', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'author', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'email', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'ip', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'content', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'published', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'updatedAt', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'nbApplications', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'image', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'categories', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'applications', '' . "\0" . 'Gbrfix\\PlatformBundle\\Entity\\Advert' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Advert $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', []);

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', [$title]);

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', []);

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor($author)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', [$author]);

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', []);

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setContent($content)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContent', [$content]);

        return parent::setContent($content);
    }

    /**
     * {@inheritDoc}
     */
    public function getContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContent', []);

        return parent::getContent();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublished($published)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublished', [$published]);

        return parent::setPublished($published);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublished', []);

        return parent::getPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage(\Gbrfix\PlatformBundle\Entity\Image $image = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', [$image]);

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', []);

        return parent::getImage();
    }

    /**
     * {@inheritDoc}
     */
    public function addCategory(\Gbrfix\PlatformBundle\Entity\Category $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCategory', [$category]);

        return parent::addCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCategory(\Gbrfix\PlatformBundle\Entity\Category $category)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCategory', [$category]);

        return parent::removeCategory($category);
    }

    /**
     * {@inheritDoc}
     */
    public function getCategories()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCategories', []);

        return parent::getCategories();
    }

    /**
     * {@inheritDoc}
     */
    public function addApplication(\Gbrfix\PlatformBundle\Entity\Application $application)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addApplication', [$application]);

        return parent::addApplication($application);
    }

    /**
     * {@inheritDoc}
     */
    public function removeApplication(\Gbrfix\PlatformBundle\Entity\Application $application)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeApplication', [$application]);

        return parent::removeApplication($application);
    }

    /**
     * {@inheritDoc}
     */
    public function getApplications()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApplications', []);

        return parent::getApplications();
    }

    /**
     * {@inheritDoc}
     */
    public function updateDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'updateDate', []);

        return parent::updateDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function increaseApplication()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'increaseApplication', []);

        return parent::increaseApplication();
    }

    /**
     * {@inheritDoc}
     */
    public function decreaseApplication()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'decreaseApplication', []);

        return parent::decreaseApplication();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbApplications($nbApplications)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbApplications', [$nbApplications]);

        return parent::setNbApplications($nbApplications);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbApplications()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbApplications', []);

        return parent::getNbApplications();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function isContentValid(\Symfony\Component\Validator\Context\ExecutionContextInterface $context)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isContentValid', [$context]);

        return parent::isContentValid($context);
    }

    /**
     * {@inheritDoc}
     */
    public function setIp($ip)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIp', [$ip]);

        return parent::setIp($ip);
    }

    /**
     * {@inheritDoc}
     */
    public function getIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIp', []);

        return parent::getIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Gbrfix\UserBundle\Entity\User $user)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

}
