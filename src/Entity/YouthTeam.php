<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\YouthTeamRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class YouthTeam
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


    /**
     * @var int
     *
     * @ORM\Column(name="points", type="integer")
     */
    private $points;

    /**
     * @var int
     *
     * @ORM\Column(name="played_games", type="integer")
     */
    private $playedGames;

    /**
     * @var int
     *
     * @ORM\Column(name="wins", type="integer")
     */
    private $wins;

    /**
     * @var int
     *
     * @ORM\Column(name="lostGames", type="integer")
     */
    private $lostGames;


    /**
     * @var int
     *
     * @ORM\Column(name="drawsGames", type="integer")
     */
    private $drawsGames;

    /**
     * @var int
     *
     * @ORM\Column(name="goals", type="integer")
     */
    private $goals;

    /**
     * @var int
     *
     * @ORM\Column(name="goalsInTheTeamDoor", type="integer")
     */
    private $goalsInTheTeamDoor;



    /**
     * @ORM\ManyToOne(targetEntity="YouthDivision", inversedBy="youthTeams")
     * @ORM\JoinColumn(name="division_id", referencedColumnName="id")
     */
    private $division;

    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="youthTeams")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     */
    private $motherTeam;

    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="youthTeams")
     */
    private $players;

    /**
     * @ORM\OneToMany(targetEntity="Coach", mappedBy="youthTeam")
     */
    private $coaches;

    /**
     * @ORM\ManyToOne(targetEntity="City", inversedBy="youthTeams")
     * @ORM\JoinColumn(name="city", referencedColumnName="id")
     */
    private $city;



    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @param int $points
     */
    public function setPoints(int $points): void
    {
        $this->points = $points;
    }

    /**
     * @return int
     */
    public function getPlayedGames(): int
    {
        return $this->playedGames;
    }

    /**
     * @param int $playedGames
     */
    public function setPlayedGames(int $playedGames): void
    {
        $this->playedGames = $playedGames;
    }

    /**
     * @return int
     */
    public function getWins(): int
    {
        return $this->wins;
    }

    /**
     * @param int $wins
     */
    public function setWins(int $wins): void
    {
        $this->wins = $wins;
    }

    /**
     * @return int
     */
    public function getLostGames(): int
    {
        return $this->lostGames;
    }

    /**
     * @param int $lostGames
     */
    public function setLostGames(int $lostGames): void
    {
        $this->lostGames = $lostGames;
    }

    /**
     * @return int
     */
    public function getDrawsGames(): int
    {
        return $this->drawsGames;
    }

    /**
     * @param int $drawsGames
     */
    public function setDrawsGames(int $drawsGames): void
    {
        $this->drawsGames = $drawsGames;
    }

    /**
     * @return int
     */
    public function getGoals(): int
    {
        return $this->goals;
    }

    /**
     * @param int $goals
     */
    public function setGoals(int $goals): void
    {
        $this->goals = $goals;
    }

    /**
     * @return int
     */
    public function getGoalsInTheTeamDoor(): int
    {
        return $this->goalsInTheTeamDoor;
    }

    /**
     * @param int $goalsInTheTeamDoor
     */
    public function setGoalsInTheTeamDoor(int $goalsInTheTeamDoor): void
    {
        $this->goalsInTheTeamDoor = $goalsInTheTeamDoor;
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
     * @return mixed
     */
    public function getMotherTeam()
    {
        return $this->motherTeam;
    }

    /**
     * @param mixed $motherTeam
     */
    public function setMotherTeam($motherTeam): void
    {
        $this->motherTeam = $motherTeam;
    }

    /**
     * @return mixed
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @param mixed $players
     */
    public function setPlayers($players): void
    {
        $this->players = $players;
    }

    /**
     * @return mixed
     */
    public function getCoaches()
    {
        return $this->coaches;
    }

    /**
     * @param mixed $coaches
     */
    public function setCoaches($coaches): void
    {
        $this->coaches = $coaches;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }

    public function __toString()
    {
        return $this->name;
    }


}
