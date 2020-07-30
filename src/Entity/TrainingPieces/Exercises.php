<?php

namespace App\Entity\TrainingPieces;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainingPieces\ExercisesRepository")
 */
class Exercises
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
     * @ORM\Column(name="name", type="string")
     */
    public $name;


    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string")
     */
    public $description;

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
     * One Product has One Shipment.
     * @ORM\ManyToOne(targetEntity="App\Entity\TrainingPieces\IntensityType", inversedBy="exercises")
     * @ORM\JoinColumn(name="intensityType", referencedColumnName="id")
     */
    public  $intensityType;

    public function getId(): ?int
    {
        return $this->id;
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
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
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
     * @return mixed
     */
    public function getIntensityType()
    {
        return $this->intensityType;
    }

    /**
     * @param mixed $intensityType
     */
    public function setIntensityType($intensityType): void
    {
        $this->intensityType = $intensityType;
    }


    public function __toString()
    {
        return $this->getName();
    }


}
