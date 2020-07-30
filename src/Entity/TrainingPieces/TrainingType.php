<?php

namespace App\Entity\TrainingPieces;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainingPieces\TrainingTypeRepository")
 */
class TrainingType
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
     * @ORM\Column(name="type", type="string")
     */
    public $type;
    /**
     * One Product has One Shipment.
     * @ORM\OneToMany(targetEntity="App\Entity\Training", mappedBy="trainingType")
     */
    public  $trainings;

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
    public function getTrainings()
    {
        return $this->trainings;
    }

    /**
     * @param mixed $trainings
     */
    public function setTrainings($trainings): void
    {
        $this->trainings = $trainings;
    }

    public function __toString()
    {
        return $this->getType();
    }


}
