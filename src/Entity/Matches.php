<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatchesRepository")
 */
class Matches
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * One Product has One Shipment.
     * @ORM\ManyToOne(targetEntity="App\Entity\Team", inversedBy="homeMatches")
     * @ORM\JoinColumn(name="homeTeam", referencedColumnName="id")
     */
    public  $homeTeam;

    /**
     * One Product has One Shipment.
     * @ORM\ManyToOne(targetEntity="App\Entity\Team", inversedBy="awayMatches")
     * @ORM\JoinColumn(name="awayTeam", referencedColumnName="id")
     */
    public  $awayTeam;

    /**
     * One Product has One Shipment.
     * @ORM\ManyToOne(targetEntity="App\Entity\Division", inversedBy="matches")
     * @ORM\JoinColumn(name="division", referencedColumnName="id")
     */
    public  $division;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string")
     */
    public $date;

    /**
     * @var string
     *
     * @ORM\Column(name="time", type="string")
     */
    public $time;

    /**
     * @ORM\OneToOne(targetEntity="MatchStats", mappedBy="match")
     * @ORM\JoinColumn(name="match_stats", referencedColumnName="id")
     */
    public $matchStats;


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getHomeTeam()
    {
        return $this->homeTeam;
    }

    /**
     * @param mixed $homeTeam
     */
    public function setHomeTeam($homeTeam): void
    {
        $this->homeTeam = $homeTeam;
    }

    /**
     * @return mixed
     */
    public function getAwayTeam()
    {
        return $this->awayTeam;
    }

    /**
     * @param mixed $awayTeam
     */
    public function setAwayTeam($awayTeam): void
    {
        $this->awayTeam = $awayTeam;
    }

    /**
     * @return mixed
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * @param mixed $division
     */
    public function setDivision($division): void
    {
        $this->division = $division;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param string $time
     */
    public function setTime(string $time): void
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getMatchStats()
    {
        return $this->matchStats;
    }

    /**
     * @param mixed $matchStats
     */
    public function setMatchStats($matchStats): void
    {
        $this->matchStats = $matchStats;
    }



}
