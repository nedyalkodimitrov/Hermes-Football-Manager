<?php

namespace App\Entity\CoachProperties;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoachProperties\QualificationRepository")
 */
class Qualification
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
     * @ORM\Column(name="type", type="string", nullable=true)
     */
    public $type;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Coach", mappedBy="qualification")
     */
    private $coaches;


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getCoaches()
    {
        return $this->coaches;
    }

    /**
     * @param mixed $coaches
     */
    public function setCoaches($coaches): void
    {
        $this->coaches = $coaches;
    }



}
