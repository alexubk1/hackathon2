<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CountryRepository")
 */
class Country
{
    public function __toString()
    {
        return $this->name;
    }
    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Gladiator", mappedBy="state")
     */
    private $states;


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
     * @ORM\Column(name="name", type="string", length=32)
     */
    private $name;


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
     * @return Country
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
     * Constructor
     */
    public function __construct()
    {
        $this->states = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add state.
     *
     * @param \AppBundle\Entity\Gladiator $state
     *
     * @return Country
     */
    public function addState(\AppBundle\Entity\Gladiator $state)
    {
        $this->states[] = $state;

        return $this;
    }

    /**
     * Remove state.
     *
     * @param \AppBundle\Entity\Gladiator $state
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeState(\AppBundle\Entity\Gladiator $state)
    {
        return $this->states->removeElement($state);
    }

    /**
     * Get states.
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getStates()
    {
        return $this->states;
    }
}
