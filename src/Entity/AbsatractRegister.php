<?php


namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

abstract class AbsatractRegister
{


    /**
     * One Product has One Shipment.
     * @ORM\ManyToOne(targetEntity="User", inversedBy="register")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    protected  $user;

    /**
     * @var date
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    protected $startDate;
    /**
     * @var date
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    protected $endDate;


    /**
     * @var date
     *
     * @ORM\Column(name="goals", type="integer", nullable=true)
     */
    protected $goals;
    /**
     * @var date
     *
     * @ORM\Column(name="matches", type="integer", nullable=true)
     */
    protected $matches;

    /**
     * @return date
     */
    public function getStartDate(): date
    {
        return $this->startDate;
    }

    /**
     * @param date $startDate
     */
    public function setStartDate(date $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return date
     */
    public function getEndDate(): date
    {
        return $this->endDate;
    }

    /**
     * @param date $endDate
     */
    public function setEndDate(date $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return date
     */
    public function getGoals(): date
    {
        return $this->goals;
    }

    /**
     * @param date $goals
     */
    public function setGoals(date $goals): void
    {
        $this->goals = $goals;
    }

    /**
     * @return date
     */
    public function getMatches(): date
    {
        return $this->matches;
    }

    /**
     * @param date $matches
     */
    public function setMatches(date $matches): void
    {
        $this->matches = $matches;
    }





}