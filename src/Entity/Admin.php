<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class Admin
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="admin")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")
     */
    private $team;

    /**
     * One Product has One Shipment.
     * @ORM\OneToOne(targetEntity="User", inversedBy="admin")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private  $user;

    public function getId(): ?int
    {
        return $this->id;
    }
}
