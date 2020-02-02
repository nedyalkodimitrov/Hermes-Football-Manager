<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoachRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class Coach
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="YouthTeam", inversedBy="coaches")
     * @ORM\JoinColumn(name="youth_team", referencedColumnName="id")
     */
    private $youthTeam;

    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="coaches")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")
     */
    private $team;


    /**
     * @ORM\OneToMany(targetEntity="Schedule", mappedBy="coach")
     *
     */
    private $schedule;


    /**
     * One Product has One Shipment.
     * @ORM\OneToOne(targetEntity="User", inversedBy="coach")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private  $user;


    /**
     * @var date
     *
     * @ORM\Column(name="birthDay", type="date", nullable=true)
     */
    private $birthDay;

//    /**
//     * @ORM\ManyToOne(targetEntity="App PlayerProperties\Positions")
//     * @ORM\JoinColumn(name="position", referencedColumnName="id")
//     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity="CoachPosition", inversedBy="coaches")
     * @ORM\JoinColumn(name="teamPosition", referencedColumnName="id")
     */
    private $teamPosition;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Requests\CoachToPlayerRequest", mappedBy="coache")
     */
    private $requestsToPlayers;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", nullable=true)
     */
    public $image;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    public $status;



    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getYouthTeam()
    {
        return $this->youthTeam;
    }

    /**
     * @param mixed $youthTeam
     */
    public function setYouthTeam($youthTeam): void
    {
        $this->youthTeam = $youthTeam;
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
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * @param mixed $schedule
     */
    public function setSchedule($schedule): void
    {
        $this->schedule = $schedule;
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
     * @return date
     */
    public function getBirthDay()
    {
        return $this->birthDay;
    }

    /**
     * @param date $birthDay
     */
    public function setBirthDay( $birthDay): void
    {
        $this->birthDay = $birthDay;
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
    public function getTeamPosition()
    {
        return $this->teamPosition;
    }

    /**
     * @param mixed $teamPosition
     */
    public function setTeamPosition($teamPosition): void
    {
        $this->teamPosition = $teamPosition;
    }

    /**
     * @return string
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
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

    /**
     * @return mixed
     */
    public function getRequestsToPlayers()
    {
        return $this->requestsToPlayers;
    }

    /**
     * @param mixed $requestsToPlayers
     */
    public function setRequestsToPlayers($requestsToPlayers): void
    {
        $this->requestsToPlayers = $requestsToPlayers;
    }





}
