<?php


namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

abstract class AbstractTeam
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, unique=true, nullable=true)
     */
    protected $name;

    /**
     * @var int
     *
     * @ORM\Column(name="points", type="integer", nullable=true)
     */
    protected $points;

    /**
     * @var int
     *
     * @ORM\Column(name="played_games", type="integer", nullable=true)
     */
    protected $playedGames;

    /**
     * @var int
     *
     * @ORM\Column(name="wins", type="integer", nullable=true)
     */
    protected $wins;

    /**
     * @var int
     *
     * @ORM\Column(name="lostGames", type="integer", nullable=true)
     */
    protected $lostGames;


    /**
     * @var int
     *
     * @ORM\Column(name="drawsGames", type="integer", nullable=true)
     */
    protected $drawsGames;


    /**
     * @var int
     *
     * @ORM\Column(name="goals", type="integer", nullable=true)
     */
    protected $goals;

    /**
     * @var int
     *
     * @ORM\Column(name="goalsInTheTeamDoor", type="integer", nullable=true)
     */
    protected $goalsInTheTeamDoor;

    /**
     * Many Categories have One Category.
     * @ORM\OneToMany(targetEntity="Coach", mappedBy="team")
     */
    protected $coaches;




    /**
     * @ORM\OneToMany(targetEntity="Player", mappedBy="team")
     */
    public $players;


    /**
     * @Assert\Image(
     *     allowLandscape = false,
     *     allowPortrait = false
     * )
     * @ORM\Column(name="image", type="string", nullable=true)
     */

    public $image;

    /**
     * @Assert\Image(
     *     allowLandscape = false,
     *     allowPortrait = false
     * )
     * @ORM\Column(name="cover_image", type="string", nullable=true)
     */

    public $coverImage;

    /**
     * @ORM\ManyToOne(targetEntity="City", inversedBy="teams")
     * @ORM\JoinColumn(name="city", referencedColumnName="id")
     */
    public $city;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getPoints(): int
    {
        return $this->points;
    }

    /**
     * @param int $points
     */
    public function setPoints(int $points): void
    {
        $this->points = $points;
    }

    /**
     * @return int
     */
    public function getPlayedGames(): int
    {
        return $this->playedGames;
    }

    /**
     * @param int $playedGames
     */
    public function setPlayedGames(int $playedGames): void
    {
        $this->playedGames = $playedGames;
    }

    /**
     * @return int
     */
    public function getWins(): int
    {
        return $this->wins;
    }

    /**
     * @param int $wins
     */
    public function setWins(int $wins): void
    {
        $this->wins = $wins;
    }

    /**
     * @return int
     */
    public function getLostGames(): int
    {
        return $this->lostGames;
    }

    /**
     * @param int $lostGames
     */
    public function setLostGames(int $lostGames): void
    {
        $this->lostGames = $lostGames;
    }

    /**
     * @return int
     */
    public function getDrawsGames(): int
    {
        return $this->drawsGames;
    }

    /**
     * @param int $drawsGames
     */
    public function setDrawsGames(int $drawsGames): void
    {
        $this->drawsGames = $drawsGames;
    }

    /**
     * @return int
     */
    public function getGoals(): int
    {
        return $this->goals;
    }

    /**
     * @param int $goals
     */
    public function setGoals(int $goals): void
    {
        $this->goals = $goals;
    }

    /**
     * @return int
     */
    public function getGoalsInTheTeamDoor(): int
    {
        return $this->goalsInTheTeamDoor;
    }

    /**
     * @param int $goalsInTheTeamDoor
     */
    public function setGoalsInTheTeamDoor(int $goalsInTheTeamDoor): void
    {
        $this->goalsInTheTeamDoor = $goalsInTheTeamDoor;
    }

    /**
     * @return mixed
     */
    public function getCoaches()
    {
        return $this->coaches;
    }

    /**
     * @param mixed $coaches
     */
    public function setCoaches($coaches): void
    {
        $this->coaches = $coaches;
    }

    /**
     * @return mixed
     */
    public function getPlayers()
    {
        return $this->players;
    }

    /**
     * @param mixed $players
     */
    public function setPlayers($players): void
    {
        $this->players = $players;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return mixed
     */
    public function getCoverImage()
    {
        return $this->coverImage;
    }

    /**
     * @param mixed $coverImage
     */
    public function setCoverImage($coverImage): void
    {
        $this->coverImage = $coverImage;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = $city;
    }







}