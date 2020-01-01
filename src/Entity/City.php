<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CityRepository")
 */
class City
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Country", inversedBy="cities")
     * @ORM\JoinColumn(name="country", referencedColumnName="id")
     */
    public $country;

    /**
     * @ORM\OneToMany(targetEntity="Team", mappedBy="city")
     */
    private $teams;
    /**
     * @ORM\OneToMany(targetEntity="YouthTeam", mappedBy="city")
     */
    private $youthTeams;

    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="city")
     */
    private $users;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }


}
