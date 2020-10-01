<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\YouthDivisionRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class YouthDivision extends  AbstractDivision
{


    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;


    /**
     * @ORM\OneToMany(targetEntity="YouthTeam", mappedBy="division")
     */
    private $youthTeams;





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



}
