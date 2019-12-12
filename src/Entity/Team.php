<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class Team
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
     * @ORM\Column(name="name", type="string", length=255, unique=true, nullable=true)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="integer", nullable=true)
     */
    private $points;

    /**
     * @var int
     *
     * @ORM\Column(name="played_games", type="integer", nullable=true)
     */
    private $playedGames;

    /**
     * @var int
     *
     * @ORM\Column(name="wins", type="integer", nullable=true)
     */
    private $wins;

    /**
     * @var int
     *
     * @ORM\Column(name="lostGames", type="integer", nullable=true)
     */
    private $lostGames;


    /**
     * @var int
     *
     * @ORM\Column(name="drawsGames", type="integer", nullable=true)
     */
    private $drawsGames;

    /**
     * @ORM\ManyToOne(targetEntity="Division", inversedBy="teams")
     * @ORM\JoinColumn(name="division_id", referencedColumnName="id")
     */
    private $division;


    /**
     * @ORM\OneToMany(targetEntity="YouthTeam", mappedBy="motherTeam")
     */
    private $youthTeams;


    /**
     * @var int
     *
     * @ORM\Column(name="goals", type="integer", nullable=true)
     */
    private $goals;

    /**
     * @var int
     *
     * @ORM\Column(name="goalsInTheTeamDoor", type="integer", nullable=true)
     */
    private $goalsInTheTeamDoor;

    /**
     * Many Categories have One Category.
     * @ORM\OneToMany(targetEntity="Coach", mappedBy="team")
     */
    private $coaches;


    /**
     * @ORM\OneToMany(targetEntity="Admin", mappedBy="team")
     */
    private $admin;

    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="team")
     */
    private $players;


    /**
     * @Assert\Image(
     *     allowLandscape = false,
     *     allowPortrait = false
     * )
     * @ORM\Column(name="image", type="string", nullable=true)
     */

    protected $image;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="teams")
     * @ORM\JoinColumn(name="country", referencedColumnName="id")
     */
    private $country;


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
    public function getYouthTeams()
    {
        return $this->youthTeams;
    }

    /**
     * @param mixed $youthTeams
     */
    public function setYouthTeams($youthTeams): void
    {
        $this->youthTeams = $youthTeams;
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
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin): void
    {
        $this->admin = $admin;
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
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country): void
    {
        $this->country = $country;
    }


}
