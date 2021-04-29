<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CentreMedical extends \App\Entity\CentreMedical implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'id', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'nom_centre_medical', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'type', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'mail', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'numTel', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'services'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'id', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'nom_centre_medical', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'adresse', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'type', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'mail', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'numTel', '' . "\0" . 'App\\Entity\\CentreMedical' . "\0" . 'services'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CentreMedical $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
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
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getServices()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServices', []);

        return parent::getServices();
    }

    /**
     * {@inheritDoc}
     */
    public function setServices($services): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServices', [$services]);

        parent::setServices($services);
    }

    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
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
    public function getNomCentreMedical(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomCentreMedical', []);

        return parent::getNomCentreMedical();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomCentreMedical(string $nom_centre_medical): \App\Entity\CentreMedical
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomCentreMedical', [$nom_centre_medical]);

        return parent::setNomCentreMedical($nom_centre_medical);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse(string $adresse): \App\Entity\CentreMedical
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(string $type): \App\Entity\CentreMedical
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getMail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMail', []);

        return parent::getMail();
    }

    /**
     * {@inheritDoc}
     */
    public function setMail(string $mail): \App\Entity\CentreMedical
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMail', [$mail]);

        return parent::setMail($mail);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumTel(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumTel', []);

        return parent::getNumTel();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumTel(?int $numTel): \App\Entity\CentreMedical
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumTel', [$numTel]);

        return parent::setNumTel($numTel);
    }

}
