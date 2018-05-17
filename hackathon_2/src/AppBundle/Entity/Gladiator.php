<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gladiator
 *
 * @ORM\Table(name="gladiator")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GladiatorRepository")
 */
class Gladiator
{


    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country", inversedBy="states")
     * @ORM\JoinColumn(nullable=false)
     */
    private $state;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=64)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="integer")
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=128)
     */
    private $job;

    /**
     * @var string
     *
     * @ORM\Column(name="weapon", type="string", length=128)
     */
    private $weapon;

    /**
     * @var bool
     *
     * @ORM\Column(name="captain", type="boolean")
     */
    private $captain;


    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Gladiator
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set age.
     *
     * @param int $age
     *
     * @return Gladiator
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age.
     *
     * @return int
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set job.
     *
     * @param string $job
     *
     * @return Gladiator
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job.
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set weapon.
     *
     * @param string $weapon
     *
     * @return Gladiator
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;

        return $this;
    }

    /**
     * Get weapon.
     *
     * @return string
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * Set captain.
     *
     * @param bool $captain
     *
     * @return Gladiator
     */
    public function setCaptain($captain)
    {
        $this->captain = $captain;

        return $this;
    }

    /**
     * Get captain.
     *
     * @return bool
     */
    public function getCaptain()
    {
        return $this->captain;
    }

    /**
     * Set state.
     *
     * @param \AppBundle\Entity\Country $state
     *
     * @return Gladiator
     */
    public function setState(\AppBundle\Entity\Country $state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state.
     *
     * @return \AppBundle\Entity\Country
     */
    public function getState()
    {
        return $this->state;
    }
}
