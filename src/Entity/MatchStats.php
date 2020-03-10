<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MatchStatsRepository")
 */
class MatchStats
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", name="home_team_goals")
     */
    public $homeTeamGoals;

    /**
     * @ORM\Column(type="integer", name = "away_team_goals")
     */
    public $awayTeamGoals;

    /**
     * @ORM\Column(type="boolean", name = "is_played")
     */
    public $isPlayed;


    /**
     * @ORM\OneToOne(targetEntity="Matches", mappedBy="matchStats")
     */
    public $match;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getHomeTeamGoals()
    {
        return $this->homeTeamGoals;
    }

    /**
     * @param mixed $homeTeamGoals
     */
    public function setHomeTeamGoals($homeTeamGoals): void
    {
        $this->homeTeamGoals = $homeTeamGoals;
    }

    /**
     * @return mixed
     */
    public function getAwayTeamGoals()
    {
        return $this->awayTeamGoals;
    }

    /**
     * @param mixed $awayTeamGoals
     */
    public function setAwayTeamGoals($awayTeamGoals): void
    {
        $this->awayTeamGoals = $awayTeamGoals;
    }

    /**
     * @return mixed
     */
    public function getIsPlayed()
    {
        return $this->isPlayed;
    }

    /**
     * @param mixed $isPlayed
     */
    public function setIsPlayed($isPlayed): void
    {
        $this->isPlayed = $isPlayed;
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



}
