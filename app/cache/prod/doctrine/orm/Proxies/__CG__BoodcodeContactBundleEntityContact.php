<?php

namespace Proxies\__CG__\Boodcode\ContactBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Contact extends \Boodcode\ContactBundle\Entity\Contact implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'id', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'civ', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'nom', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'prenom', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'adresse', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'cp', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'ville', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'tel', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'mail', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'pays', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'contactObjet', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'message', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'newsletter', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'attachment');
        }

        return array('__isInitialized__', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'id', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'civ', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'nom', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'prenom', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'adresse', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'cp', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'ville', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'tel', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'mail', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'pays', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'contactObjet', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'message', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'newsletter', '' . "\0" . 'Boodcode\\ContactBundle\\Entity\\Contact' . "\0" . 'attachment');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Contact $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setCiv($civ)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCiv', array($civ));

        return parent::setCiv($civ);
    }

    /**
     * {@inheritDoc}
     */
    public function getCiv()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCiv', array());

        return parent::getCiv();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', array($nom));

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', array());

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', array($prenom));

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', array());

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', array($adresse));

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', array());

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setCp($cp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCp', array($cp));

        return parent::setCp($cp);
    }

    /**
     * {@inheritDoc}
     */
    public function getCp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCp', array());

        return parent::getCp();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille($ville)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', array($ville));

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', array());

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function setMessage($message)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMessage', array($message));

        return parent::setMessage($message);
    }

    /**
     * {@inheritDoc}
     */
    public function getMessage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMessage', array());

        return parent::getMessage();
    }

    /**
     * {@inheritDoc}
     */
    public function setContactObjet(\Boodcode\ContactBundle\Entity\ContactObjet $contactObjet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContactObjet', array($contactObjet));

        return parent::setContactObjet($contactObjet);
    }

    /**
     * {@inheritDoc}
     */
    public function getContactObjet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContactObjet', array());

        return parent::getContactObjet();
    }

    /**
     * {@inheritDoc}
     */
    public function setNewsletter($newsletter)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewsletter', array($newsletter));

        return parent::setNewsletter($newsletter);
    }

    /**
     * {@inheritDoc}
     */
    public function getNewsletter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewsletter', array());

        return parent::getNewsletter();
    }

    /**
     * {@inheritDoc}
     */
    public function setTel($tel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTel', array($tel));

        return parent::setTel($tel);
    }

    /**
     * {@inheritDoc}
     */
    public function getTel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTel', array());

        return parent::getTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setPays($pays)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPays', array($pays));

        return parent::setPays($pays);
    }

    /**
     * {@inheritDoc}
     */
    public function getPays()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPays', array());

        return parent::getPays();
    }

    /**
     * {@inheritDoc}
     */
    public function setMail($mail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMail', array($mail));

        return parent::setMail($mail);
    }

    /**
     * {@inheritDoc}
     */
    public function getMail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMail', array());

        return parent::getMail();
    }

    /**
     * {@inheritDoc}
     */
    public function setAttachment(\Boodcode\ContactBundle\Entity\Attachment $attachment = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAttachment', array($attachment));

        return parent::setAttachment($attachment);
    }

    /**
     * {@inheritDoc}
     */
    public function getAttachment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAttachment', array());

        return parent::getAttachment();
    }

}