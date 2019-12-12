<?php

namespace App\Entity\PlayerProperties;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlayerProperties\PositionRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class Position
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
     * @ORM\Column(name="name", type="string", unique=true)
     */
    private $name;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Player", mappedBy="position")
     */
    private $players;


    public function getId(): ?int
    {
        return $this->id;
    }
}
