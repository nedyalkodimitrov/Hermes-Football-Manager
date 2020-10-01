<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\YouthTeamRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class YouthTeam extends AbstractTeam
{



    /**
     * @ORM\ManyToOne(targetEntity="YouthDivision", inversedBy="youthTeams")
     * @ORM\JoinColumn(name="division_id", referencedColumnName="id")
     */
    private $division;

    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="youthTeams")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     */
    private $motherTeam;


    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="youthTeams")
     */
    public $players;




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
    public function getMotherTeam()
    {
        return $this->motherTeam;
    }

    /**
     * @param mixed $motherTeam
     */
    public function setMotherTeam($motherTeam): void
    {
        $this->motherTeam = $motherTeam;
    }


    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param int $age
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }



    public function __toString()
    {
        return $this->name;
    }


}
