<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DivisionRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class Division extends AbstractDivision
{




    /**
     * @ORM\OneToMany(targetEntity="Team", mappedBy="division")
     */
    public $teams;

    /**
     * One Product has One Shipment.
     * @ORM\OneToMany(targetEntity="App\Entity\Requests\Team\TeamToDivisionRequest", mappedBy="division")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")
     */
    private  $requestFromTeam;

    /**
     * One Product has One Shipment.
     * @ORM\OneToMany(targetEntity="App\Entity\Requests\Division\DivisionToTeamRequest", mappedBy="division")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")
     */
    private  $requestToTeam;
    /**
     * One Product has One Shipment.
     * @ORM\OneToMany(targetEntity="App\Entity\Requests\Division\DivisionRequest", mappedBy="division")
     */
    private  $teamRequest;

    /**
     * One Product has One Shipment.
     * @ORM\OneToMany(targetEntity="App\Entity\Matches", mappedBy="division")
     * @ORM\JoinColumn(name="matches", referencedColumnName="id")
     */
    private  $matches;

//    /**
//     * @ORM\OneToMany(targetEntity="App\Entity\PlayerService\Cup", mappedBy="divisions")
//     */
//    private $cups;





    /**
     * @return mixed
     */
    public function getTeams()
    {
        return $this->teams;
    }

    /**
     * @param mixed $teams
     */
    public function setTeams($teams): void
    {
        $this->teams = $teams;
    }

//    /**
//     * @return mixed
//     */
//    public function getCups()
//    {
//        return $this->cups;
//    }
//
//    /**
//     * @param mixed $cups
//     */
//    public function setCups($cups): void
//    {
//        $this->cups = $cups;
//    }

    /**
     * @return mixed
     */

    /**
     * @return mixed
     */
    public function getRequestFromTeam()
    {
        return $this->requestFromTeam;
    }

    /**
     * @param mixed $requestFromTeam
     */
    public function setRequestFromTeam($requestFromTeam): void
    {
        $this->requestFromTeam = $requestFromTeam;
    }

    /**
     * @return mixed
     */
    public function getRequestToTeam()
    {
        return $this->requestToTeam;
    }

    /**
     * @param mixed $requestToTeam
     */
    public function setRequestToTeam($requestToTeam): void
    {
        $this->requestToTeam = $requestToTeam;
    }



    public function __toString()
    {
     return $this->name;
    }

    /**
     * @return mixed
     */
    public function getMatches()
    {
        return $this->matches;
    }

    /**
     * @param mixed $matches
     */
    public function setMatches($matches): void
    {
        $this->matches = $matches;
    }

    /**
     * @return mixed
     */
    public function getTeamRequest()
    {
        return $this->teamRequest;
    }

    /**
     * @param mixed $teamRequest
     */
    public function setTeamRequest($teamRequest): void
    {
        $this->teamRequest = $teamRequest;
    }




}
