<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlayerRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class Player
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var date
     *
     * @ORM\Column(name="birthDay", type="date", nullable=true)
     */
    public $birthDay;

    /**
     *  @ORM\OneToOne(targetEntity="App\Entity\PlayerProperties\PlayerStats")
     * @ORM\JoinColumn(name="stats", referencedColumnName="id")
     */
    private $stats;


    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="players")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")*/

    public $team;


    /**
     * One Product has One Shipment.
     * @ORM\OneToOne(targetEntity="User", inversedBy="player")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private  $user;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\PlayerProperties\Position", inversedBy="players")
     * @ORM\JoinColumn(name="position", referencedColumnName="id")
     */
    public $position;

    /**
     * @ORM\ManyToOne(targetEntity="YouthTeam", inversedBy="players")
     * @ORM\JoinColumn(name="youthTeam", referencedColumnName="id")
     */
    public $youthTeams;
    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Requests\Coach\CoachToPlayerRequest", mappedBy="player")
     */
    private $requestsFromCoaches;


    /**
     * @Assert\Image(
     *     allowLandscape = false,
     *     allowPortrait = false
     * )
     *
     * @ORM\Column(name="image", type="string", nullable=true)
     */
    public $image;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="integer", nullable=true   )
     */
    public $status;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Requests\Player\PlayerToTeamRequest", mappedBy="player")
     */
    private $requestToTeam;
    /**
     * @ORM\OneToMany(targetEntity="MatchList", mappedBy="player")
     */
    public $matchList;


    public function getId(): ?int
    {
        return $this->id;
    }



    public function getBirthDay()
    {
        return $this->birthDay;
    }

    /**
     * @param date $birthDay
     */
    public function setBirthDay($birthDay): void
    {
        $this->birthDay = $birthDay;
    }

    /**
     * @return mixed
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @param mixed $stats
     */
    public function setStats($stats): void
    {
        $this->stats = $stats;
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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
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
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function __toString()
    {
        return (string)$this->getUser()->getName();
    }

    /**
     * @return mixed
     */
    public function getRequestsFromCoaches()
    {
        return $this->requestsFromCoaches;
    }

    /**
     * @param mixed $requestsFromCoaches
     */
    public function setRequestsFromCoaches($requestsFromCoaches): void
    {
        $this->requestsFromCoaches = $requestsFromCoaches;
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

    /**
     * @return mixed
     */
    public function getMatchList()
    {
        return $this->matchList;
    }

    /**
     * @param mixed $matchList
     */
    public function setMatchList($matchList): void
    {
        $this->matchList = $matchList;
    }




}
