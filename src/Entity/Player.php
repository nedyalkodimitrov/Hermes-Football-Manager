<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlayerRepository")
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
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="player")
     * @ORM\JoinColumn(name="country", referencedColumnName="id")
     */
    private $country;

    /**
     * @var date
     *
     * @ORM\Column(name="birthDay", type="date", nullable=true)
     */
    private $birthDay;

    /**
     *  @ORM\OneToOne(targetEntity="PlayerProperties\PlayerStats")
     * @ORM\JoinColumn(name="stats", referencedColumnName="id")
     */
    private $stats;


    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="player")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")*/

    private $team;


    /**
     * One Product has One Shipment.
     * @ORM\OneToOne(targetEntity="User", inversedBy="player")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private  $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="PlayerProperties\Positions", inversedBy="player")
     * @ORM\JoinColumn(name="position", referencedColumnName="id")
     */
    private $position;
    
    /**
     * @ORM\ManyToOne(targetEntity="YouthTeam", inversedBy="player")
     * @ORM\JoinColumn(name="youthTeam", referencedColumnName="id")
     */
    private $youthTeams;

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



    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return date
     */
    public function getBirthDay(): date
    {
        return $this->birthDay;
    }

    /**
     * @param date $birthDay
     */
    public function setBirthDay(date $birthDay): void
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
    public function getStatus(): string
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



    
}
