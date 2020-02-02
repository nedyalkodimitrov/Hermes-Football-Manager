<?php

namespace App\Entity\Requests;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name = "CoachToPlayerRequests")
 * @ORM\Entity(repositoryClass="App\Repository\Requests\CoachToPlayerRequestRepository")
 */
class CoachToPlayerRequest
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Coach", inversedBy="requetsToPlayers")
     * @ORM\JoinColumn(name="coaches", referencedColumnName="id")
     */

    public $coach;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Player", inversedBy="requestsFromCoaches")
     * @ORM\JoinColumn(name="players", referencedColumnName="id")
     */
    public $player;


    /**
     * @var date
     *
     * @ORM\Column(name="dates", type="string", nullable=false)
     */
    public $date;

    /**
     * @var text
     *
     * @ORM\Column(name="messages", type="text")
     */
    public  $message;


    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * @param mixed $coach
     */
    public function setCoach($coach): void
    {
        $this->coach = $coach;
    }

    /**
     * @return mixed
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * @param mixed $player
     */
    public function setPlayer($player): void
    {
        $this->player = $player;
    }

    /**
     * @return date
     */
    public function getDate(): date
    {
        return $this->date;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return text
     */
    public function getMessage(): text
    {
        return $this->message;
    }

    /**
     * @param text $message
     */
    public function setMessage(string $message): void
    {
        $this->message = $message;
    }


}
