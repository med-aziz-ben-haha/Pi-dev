<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class RendezVous extends \App\Entity\RendezVous implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\RendezVous' . "\0" . 'id', '' . "\0" . 'App\\Entity\\RendezVous' . "\0" . 'dateRendezVous', '' . "\0" . 'App\\Entity\\RendezVous' . "\0" . 'heureRendezVous', '' . "\0" . 'App\\Entity\\RendezVous' . "\0" . 'disponibiliteMedecin', '' . "\0" . 'App\\Entity\\RendezVous' . "\0" . 'user'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\RendezVous' . "\0" . 'id', '' . "\0" . 'App\\Entity\\RendezVous' . "\0" . 'dateRendezVous', '' . "\0" . 'App\\Entity\\RendezVous' . "\0" . 'heureRendezVous', '' . "\0" . 'App\\Entity\\RendezVous' . "\0" . 'disponibiliteMedecin', '' . "\0" . 'App\\Entity\\RendezVous' . "\0" . 'user'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (RendezVous $proxy) {
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
    public function getDateRendezVous(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateRendezVous', []);

        return parent::getDateRendezVous();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateRendezVous(\DateTimeInterface $dateRendezVous): \App\Entity\RendezVous
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateRendezVous', [$dateRendezVous]);

        return parent::setDateRendezVous($dateRendezVous);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeureRendezVous(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeureRendezVous', []);

        return parent::getHeureRendezVous();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeureRendezVous(\DateTimeInterface $heureRendezVous): \App\Entity\RendezVous
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeureRendezVous', [$heureRendezVous]);

        return parent::setHeureRendezVous($heureRendezVous);
    }

    /**
     * {@inheritDoc}
     */
    public function getDisponibiliteMedecin(): ?int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDisponibiliteMedecin', []);

        return parent::getDisponibiliteMedecin();
    }

    /**
     * {@inheritDoc}
     */
    public function setDisponibiliteMedecin(int $disponibiliteMedecin): \App\Entity\RendezVous
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDisponibiliteMedecin', [$disponibiliteMedecin]);

        return parent::setDisponibiliteMedecin($disponibiliteMedecin);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser(): ?\App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(?\App\Entity\User $user): \App\Entity\RendezVous
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

}
