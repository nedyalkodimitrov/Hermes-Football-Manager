<?php

namespace App\Entity\Requests;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\Requests\UserToUserRequestRepository")
 */
class UserToUserRequest
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="requestToUser")
     * @ORM\JoinColumn(name="sender", referencedColumnName="id")
     */
    public $sender;

    /**
     * One Product has One Shipment.
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="requestFromUser")
     * @ORM\JoinColumn(name="receiver", referencedColumnName="id")
     */
    private  $receiver;

    /**
     * @ORM\Column(name="dates", type="string")
     */
    private $date;

    /**
     * @ORM\Column(name="type", type="string")
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param mixed $sender
     */
    public function setSender($sender): void
    {
        $this->sender = $sender;
    }

    /**
     * @return mixed
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param mixed $receiver
     */
    public function setReceiver($receiver): void
    {
        $this->receiver = $receiver;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }






}
