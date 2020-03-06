<?php

namespace App\Entity\Requests\Coach;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Requests\Coach\CoachToTeamRequestRepository")
 */
class CoachToTeamRequest
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Coach", inversedBy="requestsToTeams")
     * @ORM\JoinColumn(name="coaches", referencedColumnName="id")
     */

    public $coach;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Team", inversedBy="requestFromCoach")
     * @ORM\JoinColumn(name="teams", referencedColumnName="id")
     */
    public $team;


    /**
     * @var date
     *
     * @ORM\Column(name="dates", type="string", nullable=false)
     */
    public $date;



    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * @param mixed $coach
     */
    public function setCoach($coach): void
    {
        $this->coach = $coach;
    }

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param mixed $team
     */
    public function setTeam($team): void
    {
        $this->team = $team;
    }

    /**
     * @return date
     */
    public function getDate(): date
    {
        return $this->date;
    }

    /**
     * @param date $date
     */
    public function setDate(date $date): void
    {
        $this->date = $date;
    }



}
