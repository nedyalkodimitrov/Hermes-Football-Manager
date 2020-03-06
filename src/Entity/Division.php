<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DivisionRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class Division
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    public $name;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="divisions")
     * @ORM\JoinColumn(name="country", referencedColumnName="id")
     */
    public $country;



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

//    /**
//     * @ORM\OneToMany(targetEntity="App\Entity\PlayerProperties\Cup", mappedBy="divisions")
//     */
//    private $cups;

    /**
     * @Assert\Image(
     *     allowLandscape = false,
     *     allowPortrait = false
     * )
     *
     * @ORM\Column(name="image", type="string", nullable=true)
     */
    public $image;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
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



}
