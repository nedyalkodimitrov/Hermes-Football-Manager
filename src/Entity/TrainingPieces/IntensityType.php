<?php

namespace App\Entity\TrainingPieces;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainingPieces\IntensityTypeRepository")
 */
class IntensityType
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
     * @ORM\OneToMany(targetEntity="App\Entity\TrainingPieces\Exercises", mappedBy="intensityType")
     */
    public  $exercises;

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
    public function getExercises()
    {
        return $this->exercises;
    }

    /**
     * @param mixed $exercises
     */
    public function setExercises($exercises): void
    {
        $this->exercises = $exercises;
    }


}
