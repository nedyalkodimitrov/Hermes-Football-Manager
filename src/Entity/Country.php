<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CountryRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class Country
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="country")
     */
    private $players;
    /**
     * @ORM\OneToMany(targetEntity="Team", mappedBy="country")
     */
    private $teams;
    /**
     * @ORM\OneToMany(targetEntity="YouthTeam", mappedBy="country")
     */
    private $youthTeams;
    /**
     * @ORM\OneToMany(targetEntity="YouthDivision", mappedBy="country")
     */
    private $youthDivisions;

    /**
     * @ORM\OneToMany(targetEntity="Division", mappedBy="country")
     */
    private $divisions;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", unique=true)
     */
    private $image;


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @param mixed $players
     */
    public function setPlayers($players): void
    {
        $this->players = $players;
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
    public function getYouthDivisions()
    {
        return $this->youthDivisions;
    }

    /**
     * @param mixed $youthDivisions
     */
    public function setYouthDivisions($youthDivisions): void
    {
        $this->youthDivisions = $youthDivisions;
    }

    /**
     * @return mixed
     */
    public function getDivisions()
    {
        return $this->divisions;
    }

    /**
     * @param mixed $divisions
     */
    public function setDivisions($divisions): void
    {
        $this->divisions = $divisions;
    }

    /**
     * @return string
     */
    public function getName(): string
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
     * @return string
     */
    public function getImage(): string
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


}
