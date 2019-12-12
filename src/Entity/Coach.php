<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CoachRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class Coach
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="YouthTeam", inversedBy="coaches")
     * @ORM\JoinColumn(name="youth_team", referencedColumnName="id")
     */
    private $youthTeam;

    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="coaches")
     * @ORM\JoinColumn(name="team", referencedColumnName="id")
     */
    private $team;


//    /**
//     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Schedule", mappedBy="coach")
//     *
//     */
    private $schedule;


    /**
     * One Product has One Shipment.
     * @ORM\OneToOne(targetEntity="User", inversedBy="coach")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    private  $user;


    /**
     * @var date
     *
     * @ORM\Column(name="birthDay", type="date", nullable=true)
     */
    private $birthDay;

//    /**
//     * @ORM\ManyToOne(targetEntity="PlayerProperties\Positions")
//     * @ORM\JoinColumn(name="position", referencedColumnName="id")
//     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity="CoachPosition", inversedBy="coaches")
     * @ORM\JoinColumn(name="teamPosition", referencedColumnName="id")
     */
    private $teamPosition;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", nullable=true)
     */
    public $image;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    public $status;



    public function getId(): ?int
    {
        return $this->id;
    }
}
