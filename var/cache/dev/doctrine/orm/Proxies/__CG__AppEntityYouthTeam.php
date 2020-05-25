<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class YouthTeam extends \App\Entity\YouthTeam implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'id', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'name', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'points', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'playedGames', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'wins', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'lostGames', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'drawsGames', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'goals', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'goalsInTheTeamDoor', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'division', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'motherTeam', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'players', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'coaches', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'city'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'id', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'name', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'points', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'playedGames', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'wins', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'lostGames', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'drawsGames', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'goals', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'goalsInTheTeamDoor', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'division', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'motherTeam', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'players', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'coaches', '' . "\0" . 'App\\Entity\\YouthTeam' . "\0" . 'city'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (YouthTeam $proxy) {
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
    public function getName(): string
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
    public function getPoints(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPoints', []);

        return parent::getPoints();
    }

    /**
     * {@inheritDoc}
     */
    public function setPoints(int $points): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPoints', [$points]);

        parent::setPoints($points);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayedGames(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayedGames', []);

        return parent::getPlayedGames();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlayedGames(int $playedGames): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlayedGames', [$playedGames]);

        parent::setPlayedGames($playedGames);
    }

    /**
     * {@inheritDoc}
     */
    public function getWins(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWins', []);

        return parent::getWins();
    }

    /**
     * {@inheritDoc}
     */
    public function setWins(int $wins): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWins', [$wins]);

        parent::setWins($wins);
    }

    /**
     * {@inheritDoc}
     */
    public function getLostGames(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLostGames', []);

        return parent::getLostGames();
    }

    /**
     * {@inheritDoc}
     */
    public function setLostGames(int $lostGames): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLostGames', [$lostGames]);

        parent::setLostGames($lostGames);
    }

    /**
     * {@inheritDoc}
     */
    public function getDrawsGames(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDrawsGames', []);

        return parent::getDrawsGames();
    }

    /**
     * {@inheritDoc}
     */
    public function setDrawsGames(int $drawsGames): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDrawsGames', [$drawsGames]);

        parent::setDrawsGames($drawsGames);
    }

    /**
     * {@inheritDoc}
     */
    public function getGoals(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoals', []);

        return parent::getGoals();
    }

    /**
     * {@inheritDoc}
     */
    public function setGoals(int $goals): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGoals', [$goals]);

        parent::setGoals($goals);
    }

    /**
     * {@inheritDoc}
     */
    public function getGoalsInTheTeamDoor(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGoalsInTheTeamDoor', []);

        return parent::getGoalsInTheTeamDoor();
    }

    /**
     * {@inheritDoc}
     */
    public function setGoalsInTheTeamDoor(int $goalsInTheTeamDoor): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGoalsInTheTeamDoor', [$goalsInTheTeamDoor]);

        parent::setGoalsInTheTeamDoor($goalsInTheTeamDoor);
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
    public function getMotherTeam()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMotherTeam', []);

        return parent::getMotherTeam();
    }

    /**
     * {@inheritDoc}
     */
    public function setMotherTeam($motherTeam): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMotherTeam', [$motherTeam]);

        parent::setMotherTeam($motherTeam);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayers', []);

        return parent::getPlayers();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlayers($players): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlayers', [$players]);

        parent::setPlayers($players);
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
    public function setCoaches($coaches): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCoaches', [$coaches]);

        parent::setCoaches($coaches);
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
