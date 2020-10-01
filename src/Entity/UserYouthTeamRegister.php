<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserYouthTeamRegisterRepository")
 */
class UserYouthTeamRegister extends AbsatractRegister
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;



    public function getId(): ?int
    {
        return $this->id;
    }
}
