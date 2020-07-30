<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TrainingRepository")
 */
class Training
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\TrainingPieces\Exercises")
     * @ORM\JoinTable(name="training_exercise",
     *      joinColumns={@ORM\JoinColumn(name="training", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="exercise", referencedColumnName="id")}
     *      )
     *
     */
    public  $exercises;

    /**
     * One Product has One Shipment.
     * @ORM\ManyToOne(targetEntity="App\Entity\Shoes\ShoesType", inversedBy="trainings")
     * @ORM\JoinColumn(name="shoesType", referencedColumnName="id")
     */
    public  $shoesType;
    /**
     * One Product has One Shipment.
     * @ORM\ManyToOne(targetEntity="App\Entity\TrainingPieces\TrainingType", inversedBy="trainings")
     * @ORM\JoinColumn(name="trainingType", referencedColumnName="id")
     */
    public  $trainingType;


    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Schedule", mappedBy="training")
     * @ORM\JoinColumn(name="schedule", referencedColumnName="id")
     */
    public $schedule;

    public function getId(): ?int
    {
        return $this->id;
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

    /**
     * @return mixed
     */
    public function getShoesType()
    {
        return $this->shoesType;
    }

    /**
     * @param mixed $shoesType
     */
    public function setShoesType($shoesType): void
    {
        $this->shoesType = $shoesType;
    }

    /**
     * @return mixed
     */
    public function getTrainingType()
    {
        return $this->trainingType;
    }

    /**
     * @param mixed $trainingType
     */
    public function setTrainingType($trainingType): void
    {
        $this->trainingType = $trainingType;
    }


}
