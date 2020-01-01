<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(options={"collate"="utf8_unicode_ci", "charset"="utf8"})
 */
class User implements UserInterface
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
     * @ORM\Column(name="email", type="string", length=255, unique=true, nullable=true)
     */
    public $email;


    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    public  $name;


    /**
     * @var string
     *
     * @ORM\Column(name="fName", type="string", length=255)
     */
    public  $fName;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    public  $phone;


    /**
     * @ORM\ManyToMany(targetEntity="Role")
     * @ORM\JoinTable(name="user_roles",
     *      joinColumns={@ORM\JoinColumn(name="user_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="role_id", referencedColumnName="id")}
     *      )
     * @var Collection\Role[]
     */
    private  $roles;

    /**
     * @ORM\OneToOne(targetEntity="Coach", mappedBy="user")
     */
    private $coach;

    /**
     * @ORM\OneToOne(targetEntity="Admin", mappedBy="user")
     */
    private $admin;


    /**
     * @ORM\OneToOne(targetEntity="Player", mappedBy="user")
     */
    public $player;
    /**
     *
     * @ORM\OneToMany(targetEntity="App\Entity\PlayerProperties\WaterGlasses", mappedBy="playerId")
     */
    public $waterGlasses;

    /**
     * @ORM\OneToMany(targetEntity="InjuredUsers", mappedBy="user")
     */
    private $treatmentInformation;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getName(): ?string
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
     * @return string
     */
    public function getFName(): ?string
    {
        return $this->fName;
    }

    /**
     * @param string $fName
     */
    public function setFName(string $fName): void
    {
        $this->fName = $fName;
    }

    /**
     * @return string
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string $phone
     */
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    /**
     * @param Collection\Role[] $roles
     */
    public function setRoles(array $roles): void
    {
        $this->roles = $roles;
    }

    /**
     * @return mixed
     */
    public function getCoaches()
    {
        return $this->coach;
    }

    /**
     * @param mixed $coach
     */
    public function setCoaches($coach): void
    {
        $this->coach = $coach;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin): void
    {
        $this->admin = $admin;
    }

    /**
     * @return mixed
     */
    public function getTreatmentInformation()
    {
        return $this->treatmentInformation;
    }

    /**
     * @param mixed $treatmentInformation
     */
    public function setTreatmentInformation($treatmentInformation): void
    {
        $this->treatmentInformation = $treatmentInformation;
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
     * @return mixed
     */
    public function getCoach()
    {
        return $this->coach;
    }

    /**
     * @param mixed $coach
     */
    public function setCoach($coach): void
    {
        $this->coach = $coach;
    }

    /**
     * @return mixed
     */
    public function getWaterGlasses()
    {
        return $this->waterGlasses;
    }

    /**
     * @param mixed $waterGlasses
     */
    public function setWaterGlasses($waterGlasses): void
    {
        $this->waterGlasses = $waterGlasses;
    }


    public function getUsername()
    {
        return $this->email;
    }

    public function getSalt()
    {
        // you *may* need a real salt depending on your encoder
        // see section on salt below
        return null;
    }

    public function getRoles()
    {
        $roles = [];
        foreach ( $this->roles as $role ) {
            $roles[] = $role->getName();
        }

        return $roles;
    }


    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
        // TODO: Implement eraseCredentials() method.
    }
}
