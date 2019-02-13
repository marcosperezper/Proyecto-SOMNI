<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * Goals
 *
 * @ORM\Table(name="goals")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GoalsRepository")
 */
class Goals
{
    /**
     * @ORM\OnetoOne(targetEntity="Players")
     * @ORM\JoinColumn(name="player_id", referencedColumnName="id")
     */
    private $player_id;
    public function __construct()
    {
        $this->player_id = new ArrayCollection();
    }

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="goals", type="integer")
     */
    private $goals;

    /**
     * @var int
     *
     * @ORM\Column(name="lap", type="integer")
     */
    private $lap;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set goals
     *
     * @param integer $goals
     *
     * @return Goals
     */
    public function setGoals($goals)
    {
        $this->goals = $goals;

        return $this;
    }

    /**
     * Get goals
     *
     * @return int
     */
    public function getGoals()
    {
        return $this->goals;
    }

    /**
     * Set lap
     *
     * @param integer $lap
     *
     * @return Goals
     */
    public function setLap($lap)
    {
        $this->lap = $lap;

        return $this;
    }

    /**
     * Get lap
     *
     * @return int
     */
    public function getLap()
    {
        return $this->lap;
    }
}
