<?php

namespace App\Entity\Requests\Team;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Requests\Team\TeamToDivisionRequestRepository")
 */
class TeamToDivisionRequest
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Team", inversedBy="requestToDivision")
     * @ORM\JoinColumn(name="teams", referencedColumnName="id")
     */
    public $team;

    /**
     * One Product has One Shipment.
     * @ORM\ManyToOne(targetEntity="App\Entity\Division", inversedBy="requestFromTeam")
     * @ORM\JoinColumn(name="divisions", referencedColumnName="id")
     */
    private  $division;

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
