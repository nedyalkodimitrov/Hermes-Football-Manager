<?php

namespace App\Entity\PlayerProperties;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlayerProperties\WaterGlassesRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class WaterGlasses
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * One Product has One Shipment.
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="waterGlasses" )
     * @ORM\JoinColumn(name="player", referencedColumnName="id")
     */
    private $playerId;


    /**
     * @var int
     *
     * @ORM\Column(name="waterGlasses", type="integer")
     */
    private $waterGlasses;

    /**
     *
     *
     * @ORM\Column(name="date", type="string")
     */
    private $date;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPlayerId()
    {
        return $this->playerId;
    }

    /**
     * @param mixed $playerId
     */
    public function setPlayerId($playerId): void
    {
        $this->playerId = $playerId;
    }

    /**
     * @return int
     */
    public function getWaterGlasses(): int
    {
        return $this->waterGlasses;
    }

    /**
     * @param int $waterGlasses
     */
    public function setWaterGlasses(int $waterGlasses): void
    {
        $this->waterGlasses = $waterGlasses;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }


}
