<?php

namespace App\Entity\Requests\Team;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Requests\Coach\TeamToCoachRequestRepository")
 */
class TeamToCoachRequest
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Team", inversedBy="requestToCoach")
     * @ORM\JoinColumn(name="teams", referencedColumnName="id")
     */
    public $team;

    /**
     * One Product has One Shipment.
     * @ORM\ManyToOne(targetEntity="App\Entity\Coach", inversedBy="requestsFromTeams")
     * @ORM\JoinColumn(name="coaches", referencedColumnName="id")
     */
    private  $coach;

    /**
     * @ORM\Column(name="dates", type="string")
     */
    private $date;


    public function getId(): ?int
    {
        return $this->id;
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
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }



}
