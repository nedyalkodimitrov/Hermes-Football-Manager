<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Matches extends \App\Entity\Matches implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = ['homeTeam' => NULL, 'awayTeam' => NULL, 'division' => NULL, 'date' => NULL, 'time' => NULL, 'matchStats' => NULL, 'matchList' => NULL];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {
        unset($this->homeTeam, $this->awayTeam, $this->division, $this->date, $this->time, $this->matchStats, $this->matchList);

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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Matches' . "\0" . 'id', 'homeTeam', 'awayTeam', 'division', 'date', 'time', 'matchStats', 'matchList', '' . "\0" . 'App\\Entity\\Matches' . "\0" . 'isPlayed', '' . "\0" . 'App\\Entity\\Matches' . "\0" . 'isDelayed', '' . "\0" . 'App\\Entity\\Matches' . "\0" . 'isFriendly', '' . "\0" . 'App\\Entity\\Matches' . "\0" . 'isCanceled', '' . "\0" . 'App\\Entity\\Matches' . "\0" . 'schemes'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\Matches' . "\0" . 'id', '' . "\0" . 'App\\Entity\\Matches' . "\0" . 'isPlayed', '' . "\0" . 'App\\Entity\\Matches' . "\0" . 'isDelayed', '' . "\0" . 'App\\Entity\\Matches' . "\0" . 'isFriendly', '' . "\0" . 'App\\Entity\\Matches' . "\0" . 'isCanceled', '' . "\0" . 'App\\Entity\\Matches' . "\0" . 'schemes'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Matches $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

            unset($this->homeTeam, $this->awayTeam, $this->division, $this->date, $this->time, $this->matchStats, $this->matchList);
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
    public function getHomeTeam()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHomeTeam', []);

        return parent::getHomeTeam();
    }

    /**
     * {@inheritDoc}
     */
    public function setHomeTeam($homeTeam): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHomeTeam', [$homeTeam]);

        parent::setHomeTeam($homeTeam);
    }

    /**
     * {@inheritDoc}
     */
    public function getAwayTeam()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAwayTeam', []);

        return parent::getAwayTeam();
    }

    /**
     * {@inheritDoc}
     */
    public function setAwayTeam($awayTeam): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAwayTeam', [$awayTeam]);

        parent::setAwayTeam($awayTeam);
    }

    /**
     * {@inheritDoc}
     */
    public function getDivision()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDivision', []);

        return parent::getDivision();
    }

    /**
     * {@inheritDoc}
     */
    public function setDivision($division): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDivision', [$division]);

        parent::setDivision($division);
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
    public function setDate(string $date): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', [$date]);

        parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTime', []);

        return parent::getTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setTime(string $time): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTime', [$time]);

        parent::setTime($time);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatchStats()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatchStats', []);

        return parent::getMatchStats();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatchStats($matchStats): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatchStats', [$matchStats]);

        parent::setMatchStats($matchStats);
    }

    /**
     * {@inheritDoc}
     */
    public function getMatchList()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMatchList', []);

        return parent::getMatchList();
    }

    /**
     * {@inheritDoc}
     */
    public function setMatchList($matchList): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMatchList', [$matchList]);

        parent::setMatchList($matchList);
    }

    /**
     * {@inheritDoc}
     */
    public function getSchemes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSchemes', []);

        return parent::getSchemes();
    }

    /**
     * {@inheritDoc}
     */
    public function setSchemes(array $schemes): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSchemes', [$schemes]);

        parent::setSchemes($schemes);
    }

}
