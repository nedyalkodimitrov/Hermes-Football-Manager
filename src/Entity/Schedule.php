<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ScheduleRepository")
 */
class Schedule
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
     * @ORM\Column(name="date", type="string")
     */
    public $date;

    /**
     * @var
     *
     * @ORM\Column(name="startTime", type="string")
     */
    public $startTime;


    /**
     * @var
     *
     * @ORM\Column(name="endTime", type="string")
     */
    public  $endTime;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Coach", inversedBy="schedule")
     * @ORM\JoinColumn(name="coaches", referencedColumnName="id")
     */
    private $coaches;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Training", inversedBy="schedule")
     * @ORM\JoinColumn(name="training", referencedColumnName="id")
     */
    private $training;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param mixed $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param mixed $endTime
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }



    /**
     * @return mixed
     */
    private function getCoaches()
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

    /**
     * @return mixed
     */
    public function getTraining()
    {
        return $this->training;
    }

    /**
     * @param mixed $training
     */
    public function setTraining($training): void
    {
        $this->training = $training;
    }




}
