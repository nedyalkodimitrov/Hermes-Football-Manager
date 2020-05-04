<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatchListRepository")
 */
class MatchList
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(name = "is_starting", type="boolean", nullable=true)
     */
    public $is_starting;
    /**
     * @ORM\Column(name = "is_played", type="boolean", nullable=true)
     */
    public $is_played;
    /**
     * @ORM\Column(name = "goals", type="integer", nullable=true)
     */
    public $goals;
    /**
     * @ORM\Column(name = "assits", type="integer", nullable=true)
     */
    public $assits;
    /**
     * @ORM\Column(name = "saves", type="integer", nullable=true)
     */
    public $saves;
    /**
     * @ORM\Column(name = "played_time", type="integer", nullable=true)
     */
    public $playedTime;
    /**
     * @ORM\Column(name = "start_time", type="integer", nullable=true)
     */
    public $startTime;

    /**
     * @ORM\Column(name = "end_time", type="integer", nullable=true)
     */
    public $endTime;

    /**
     * @ORM\ManyToOne(targetEntity="Matches", inversedBy="matchList")
     * @ORM\JoinColumn(name="match", referencedColumnName="id")
     */
    public $match;

    /**
     * @ORM\ManyToOne(targetEntity="Player", inversedBy="matchList")
     * @ORM\JoinColumn(name="player", referencedColumnName="id")
     */
    public $player;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getIsStarting()
    {
        return $this->is_starting;
    }

    /**
     * @param mixed $is_starting
     */
    public function setIsStarting($is_starting): void
    {
        $this->is_starting = $is_starting;
    }

    /**
     * @return mixed
     */
    public function getIsPlayed()
    {
        return $this->is_played;
    }

    /**
     * @param mixed $is_played
     */
    public function setIsPlayed($is_played): void
    {
        $this->is_played = $is_played;
    }

    /**
     * @return mixed
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * @param mixed $goals
     */
    public function setGoals($goals): void
    {
        $this->goals = $goals;
    }

    /**
     * @return mixed
     */
    public function getAssits()
    {
        return $this->assits;
    }

    /**
     * @param mixed $assits
     */
    public function setAssits($assits): void
    {
        $this->assits = $assits;
    }

    /**
     * @return mixed
     */
    public function getSaves()
    {
        return $this->saves;
    }

    /**
     * @param mixed $saves
     */
    public function setSaves($saves): void
    {
        $this->saves = $saves;
    }

    /**
     * @return mixed
     */
    public function getPlayedTime()
    {
        return $this->playedTime;
    }

    /**
     * @param mixed $playedTime
     */
    public function setPlayedTime($playedTime): void
    {
        $this->playedTime = $playedTime;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $startTime
     */
    public function setStartTime($startTime): void
    {
        $this->startTime = $startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime($endTime): void
    {
        $this->endTime = $endTime;
    }

    /**
     * @return mixed
     */
    public function getMatch()
    {
        return $this->match;
    }

    /**
     * @param mixed $match
     */
    public function setMatch($match): void
    {
        $this->match = $match;
    }

    /**
     * @return mixed
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param mixed $player
     */
    public function setPlayer($player): void
    {
        $this->player = $player;
    }






}
