<?php

namespace App\Entity\Requests\Division;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Requests\Division\DivisionToTeamRequestRepository")
 */
class DivisionToTeamRequest
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * One Product has One Shipment.
     * @ORM\ManyToOne(targetEntity="App\Entity\Division", inversedBy="requestToTeam")
     * @ORM\JoinColumn(name="divisions", referencedColumnName="id")
     */
    private  $division;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Team", inversedBy="requestFromDivision")
     * @ORM\JoinColumn(name="teams", referencedColumnName="id")
     */
    public $team;

    /**
     * @ORM\Column(name="dates", type="string")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }
}
