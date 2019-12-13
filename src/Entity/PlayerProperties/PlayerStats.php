<?php

namespace App\Entity\PlayerProperties;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PlayerProperties\PlayerStatsRepository")
 */
class PlayerStats
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Player")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    private $player;



    /**
     * @var float
     *
     * @ORM\Column(name="statusFromCoaches", type="float", nullable=true)
     */
    private $statusFromCoaches;


    /**
     * @var float
     *
     * @ORM\Column(name="weight", type="float", nullable=true)
     */
    private $weight;

    /**
     * @var int
     *
     * @ORM\Column(name="height", type="integer", nullable=true)
     */
    private $height;


    /**
     * @var float
     *
     * @ORM\Column(name="fat", type="float", nullable=true)
     */
    private $fat;


    /**
     * @var float
     *
     * @ORM\Column(name="pace", type="float", nullable=true)
     */
    private $pace;


    /**
     * @var float
     *
     * @ORM\Column(name="tacticks", type="float", nullable=true)
     */
    private $tacticks;


    /**
     * @var float
     *
     * @ORM\Column(name="technique", type="float", nullable=true)
     */
    private $technique;

    /**
     * @var float
     *
     * @ORM\Column(name="pass", type="float", nullable=true)
     */
    private $pass;

    /**
     * @var float
     *
     * @ORM\Column(name="shot", type="float", nullable=true)
     */
    private $shot;

    /**
     * @var float
     *
     * @ORM\Column(name="dribble", type="float", nullable=true)
     */
    private $dribble;

    /**
     * @var float
     *
     * @ORM\Column(name="longPass", type="float", nullable=true)
     */
    private $longPass;

    /**
     * @var float
     *
     * @ORM\Column(name="relax", type="float", nullable=true)
     */
    private $relax;

    /**
     * @var float
     *
     * @ORM\Column(name="willpower", type="float", nullable=true)
     */
    private $willpower;


    /**
     * @var float
     *
     * @ORM\Column(name="work", type="float", nullable=true)
     */
    private $work;
    /**
     * @var float
     *
     * @ORM\Column(name="perspective", type="float", nullable=true)
     */
    private $perspective;


    public function getId(): ?int
    {
        return $this->id;
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
     * @return float
     */
    public function getStatusFromCoaches(): float
    {
        return $this->statusFromCoaches;
    }

    /**
     * @param float $statusFromCoaches
     */
    public function setStatusFromCoaches(float $statusFromCoaches): void
    {
        $this->statusFromCoaches = $statusFromCoaches;
    }

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight(int $height): void
    {
        $this->height = $height;
    }

    /**
     * @return float
     */
    public function getFat(): float
    {
        return $this->fat;
    }

    /**
     * @param float $fat
     */
    public function setFat(float $fat): void
    {
        $this->fat = $fat;
    }

    /**
     *
     */
    public function getPace(): ?float
    {
        return $this->pace;
    }

    /**
     * @param float $pace
     */
    public function setPace(float $pace): void
    {
        $this->pace = $pace;
    }

    /**
     * @return float
     */
    public function getTacticks(): float
    {
        return $this->tacticks;
    }

    /**
     * @param float $tacticks
     */
    public function setTacticks(float $tacticks): void
    {
        $this->tacticks = $tacticks;
    }

    /**
     * @return float
     */
    public function getTechnique(): float
    {
        return $this->technique;
    }

    /**
     * @param float $technique
     */
    public function setTechnique(float $technique): void
    {
        $this->technique = $technique;
    }

    /**
     * @return float
     */
    public function getPass(): float
    {
        return $this->pass;
    }

    /**
     * @param float $pass
     */
    public function setPass(float $pass): void
    {
        $this->pass = $pass;
    }

    /**
     * @return float
     */
    public function getShot(): float
    {
        return $this->shot;
    }

    /**
     * @param float $shot
     */
    public function setShot(float $shot): void
    {
        $this->shot = $shot;
    }

    /**
     * @return float
     */
    public function getDribble(): float
    {
        return $this->dribble;
    }

    /**
     * @param float $dribble
     */
    public function setDribble(float $dribble): void
    {
        $this->dribble = $dribble;
    }

    /**
     * @return float
     */
    public function getLongPass(): float
    {
        return $this->longPass;
    }

    /**
     * @param float $longPass
     */
    public function setLongPass(float $longPass): void
    {
        $this->longPass = $longPass;
    }

    /**
     * @return float
     */
    public function getRelax(): float
    {
        return $this->relax;
    }

    /**
     * @param float $relax
     */
    public function setRelax(float $relax): void
    {
        $this->relax = $relax;
    }

    /**
     * @return float
     */
    public function getWillpower(): float
    {
        return $this->willpower;
    }

    /**
     * @param float $willpower
     */
    public function setWillpower(float $willpower): void
    {
        $this->willpower = $willpower;
    }

    /**
     * @return float
     */
    public function getWork(): float
    {
        return $this->work;
    }

    /**
     * @param float $work
     */
    public function setWork(float $work): void
    {
        $this->work = $work;
    }

    /**
     * @return float
     */
    public function getPerspective(): float
    {
        return $this->perspective;
    }

    /**
     * @param float $perspective
     */
    public function setPerspective(float $perspective): void
    {
        $this->perspective = $perspective;
    }


}
