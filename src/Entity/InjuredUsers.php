<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InjuredUsersRepository")
 */
class InjuredUsers
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * One Product has One Shipment.
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="treatmentInformation")
     * @ORM\JoinColumn(name="users", referencedColumnName="id")
     */
    private  $user;


    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string")
     */
    public $status;


    /**
     * @var string
     *
     * @ORM\Column(name="medicaments", type="string")
     */
    public $medicaments;

    /**
     * @var string
     *
     * @ORM\Column(name="startTreatment", type="string")
     */
    private $startTreatment;

    /**
     * @var string
     *
     * @ORM\Column(name="endTreatment", type="string")
     */
    private $endTreatment;



    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getMedicaments(): ?string
    {
        return $this->medicaments;
    }

    /**
     * @param string $medicaments
     */
    public function setMedicaments(string $medicaments): void
    {
        $this->medicaments = $medicaments;
    }

    /**
     * @return string
     */
    public function getStartTreatment(): ?string
    {
        return $this->startTreatment;
    }

    /**
     * @param string $startTreatment
     */
    public function setStartTreatment(string $startTreatment): void
    {
        $this->startTreatment = $startTreatment;
    }

    /**
     * @return string
     */
    public function getEndTreatment(): ?string
    {
        return $this->endTreatment;
    }

    /**
     * @param string $endTreatment
     */
    public function setEndTreatment(string $endTreatment): void
    {
        $this->endTreatment = $endTreatment;
    }


}
