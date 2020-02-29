<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
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
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = ['email' => NULL, 'name' => NULL, 'fName' => NULL, 'phone' => NULL, 'city' => NULL, 'player' => NULL, 'waterGlasses' => NULL];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->email, $this->name, $this->fName, $this->phone, $this->city, $this->player, $this->waterGlasses);

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }

    /**
     * 
     * @param string $name
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__get', [$name]);

            return $this->$name;
        }

        trigger_error(sprintf('Undefined property: %s::$%s', __CLASS__, $name), E_USER_NOTICE);
    }

    /**
     * 
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__set', [$name, $value]);

            $this->$name = $value;

            return;
        }

        $this->$name = $value;
    }

    /**
     * 
     * @param  string $name
     * @return boolean
     */
    public function __isset($name)
    {
        if (array_key_exists($name, $this->__getLazyProperties())) {
            $this->__initializer__ && $this->__initializer__->__invoke($this, '__isset', [$name]);

            return isset($this->$name);
        }

        return false;
    }

    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', 'name', 'fName', 'phone', 'city', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'coach', '' . "\0" . 'App\\Entity\\User' . "\0" . 'admin', 'player', 'waterGlasses', '' . "\0" . 'App\\Entity\\User' . "\0" . 'treatmentInformation'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'coach', '' . "\0" . 'App\\Entity\\User' . "\0" . 'admin', '' . "\0" . 'App\\Entity\\User' . "\0" . 'treatmentInformation'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->email, $this->name, $this->fName, $this->phone, $this->city, $this->player, $this->waterGlasses);
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
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName(string $name): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getFName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFName', []);

        return parent::getFName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFName(string $fName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFName', [$fName]);

        parent::setFName($fName);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhone(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhone', []);

        return parent::getPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhone(string $phone): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhone', [$phone]);

        parent::setPhone($phone);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoaches()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoaches', []);

        return parent::getCoaches();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoaches($coach): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoaches', [$coach]);

        parent::setCoaches($coach);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdmin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdmin', []);

        return parent::getAdmin();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdmin($admin): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdmin', [$admin]);

        parent::setAdmin($admin);
    }

    /**
     * {@inheritDoc}
     */
    public function getTreatmentInformation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTreatmentInformation', []);

        return parent::getTreatmentInformation();
    }

    /**
     * {@inheritDoc}
     */
    public function setTreatmentInformation($treatmentInformation): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTreatmentInformation', [$treatmentInformation]);

        parent::setTreatmentInformation($treatmentInformation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayer()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayer', []);

        return parent::getPlayer();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlayer($player): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlayer', [$player]);

        parent::setPlayer($player);
    }

    /**
     * {@inheritDoc}
     */
    public function getCoach()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCoach', []);

        return parent::getCoach();
    }

    /**
     * {@inheritDoc}
     */
    public function setCoach($coach): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoach', [$coach]);

        parent::setCoach($coach);
    }

    /**
     * {@inheritDoc}
     */
    public function getWaterGlasses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWaterGlasses', []);

        return parent::getWaterGlasses();
    }

    /**
     * {@inheritDoc}
     */
    public function setWaterGlasses($waterGlasses): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWaterGlasses', [$waterGlasses]);

        parent::setWaterGlasses($waterGlasses);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

}
