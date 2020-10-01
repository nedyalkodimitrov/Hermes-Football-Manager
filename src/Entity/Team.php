<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TeamRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class Team extends AbstractTeam
{

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

    /**
     * Many Categories have One Category.
     * @ORM\OneToMany(targetEntity="App\Entity\Requests\Division\DivisionRequest", mappedBy="team")
     */
    private $divisionRequest;


    /**
     * @ORM\OneToMany(targetEntity="Admin", mappedBy="team")
     */
    private $admin;


    /**
     * One Product has One Shipment.
     * @ORM\OneToMany(targetEntity="App\Entity\Requests\Player\PlayerToTeamRequest", mappedBy="team")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")
     */
    private  $requestFromPlayer;

    /**
     * One Product has One Shipment.
     * @ORM\OneToMany(targetEntity="App\Entity\Requests\Coach\CoachToTeamRequest", mappedBy="team")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")
     */
    private  $requestFromCoach;

    /**
     * One Product has One Shipment.
     * @ORM\OneToMany(targetEntity="App\Entity\Requests\Team\TeamToCoachRequest", mappedBy="team")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")
     */
    private  $requestToCoach;

    /**
     * One Product has One Shipment.
     * @ORM\OneToMany(targetEntity="App\Entity\Requests\Team\TeamToDivisionRequest", mappedBy="team")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")
     */
    private  $requestToDivision;
    /**
     * One Product has One Shipment.
     * @ORM\OneToMany(targetEntity="App\Entity\Matches", mappedBy="homeTeam")
     * @ORM\JoinColumn(name="homeMatches", referencedColumnName="id")
     */
    public  $homeMatches;

    /**
     * One Product has One Shipment.
     * @ORM\OneToMany(targetEntity="App\Entity\Matches", mappedBy="awayTeam")
     * @ORM\JoinColumn(name="awayMatches", referencedColumnName="id")
     */
    public  $awayMatches;

    /**
     * One Product has One Shipment.
     * @ORM\OneToMany(targetEntity="App\Entity\Requests\Division\DivisionToTeamRequest", mappedBy="team")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")
     */
    private  $requestFromDivision;




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
    public function getRequestFromPlayer()
    {
        return $this->requestFromPlayer;
    }

    /**
     * @param mixed $requestFromPlayer
     */
    public function setRequestFromPlayer($requestFromPlayer): void
    {
        $this->requestFromPlayer = $requestFromPlayer;
    }

    /**
     * @return mixed
     */
    public function getRequestFromCoach()
    {
        return $this->requestFromCoach;
    }

    /**
     * @param mixed $requestFromCoach
     */
    public function setRequestFromCoach($requestFromCoach): void
    {
        $this->requestFromCoach = $requestFromCoach;
    }

    /**
     * @return mixed
     */
    public function getRequestToCoach()
    {
        return $this->requestToCoach;
    }

    /**
     * @param mixed $requestToCoach
     */
    public function setRequestToCoach($requestToCoach): void
    {
        $this->requestToCoach = $requestToCoach;
    }

    /**
     * @return mixed
     */
    public function getRequestToDivision()
    {
        return $this->requestToDivision;
    }

    /**
     * @param mixed $requestToDivision
     */
    public function setRequestToDivision($requestToDivision): void
    {
        $this->requestToDivision = $requestToDivision;
    }

    /**
     * @return mixed
     */
    public function getRequestFromDivision()
    {
        return $this->requestFromDivision;
    }

    /**
     * @param mixed $requestFromDivision
     */
    public function setRequestFromDivision($requestFromDivision): void
    {
        $this->requestFromDivision = $requestFromDivision;
    }

    /**
     * @return mixed
     */
    public function getHomeMatches()
    {
        return $this->homeMatches;
    }

    /**
     * @param mixed $homeMatches
     */
    public function setHomeMatches($homeMatches): void
    {
        $this->homeMatches = $homeMatches;
    }

    /**
     * @return mixed
     */
    public function getAwayMatches()
    {
        return $this->awayMatches;
    }

    /**
     * @param mixed $awayMatches
     */
    public function setAwayMatches($awayMatches): void
    {
        $this->awayMatches = $awayMatches;
    }

    /**
     * @return mixed
     */
    public function getCoverImage()
    {
        return $this->coverImage;
    }



    /**
     * @return mixed
     */
    public function getDivisionRequest()
    {
        return $this->divisionRequest;
    }

    /**
     * @param mixed $divisionRequest
     */
    public function setDivisionRequest($divisionRequest): void
    {
        $this->divisionRequest = $divisionRequest;
    }




    public function __toString()
    {
        return $this->name;
    }


}
