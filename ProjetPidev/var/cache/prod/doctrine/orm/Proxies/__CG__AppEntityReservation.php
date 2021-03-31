<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Reservation extends \App\Entity\Reservation implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'serviceReservation', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'dateReservation', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'users', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'centreMedical'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'serviceReservation', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'dateReservation', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'users', '' . "\0" . 'App\\Entity\\Reservation' . "\0" . 'centreMedical'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Reservation $proxy) {
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
    public function getServiceReservation(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getServiceReservation', []);

        return parent::getServiceReservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setServiceReservation(?string $serviceReservation): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setServiceReservation', [$serviceReservation]);

        return parent::setServiceReservation($serviceReservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateReservation(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateReservation', []);

        return parent::getDateReservation();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateReservation(\DateTimeInterface $dateReservation): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateReservation', [$dateReservation]);

        return parent::setDateReservation($dateReservation);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsers(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsers', []);

        return parent::getUsers();
    }

    /**
     * {@inheritDoc}
     */
    public function addUser(\App\Entity\User $user): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUser', [$user]);

        return parent::addUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUser(\App\Entity\User $user): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUser', [$user]);

        return parent::removeUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getCentreMedical(): ?\App\Entity\CentreMedical
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCentreMedical', []);

        return parent::getCentreMedical();
    }

    /**
     * {@inheritDoc}
     */
    public function setCentreMedical(?\App\Entity\CentreMedical $centreMedical): \App\Entity\Reservation
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCentreMedical', [$centreMedical]);

        return parent::setCentreMedical($centreMedical);
    }

}
