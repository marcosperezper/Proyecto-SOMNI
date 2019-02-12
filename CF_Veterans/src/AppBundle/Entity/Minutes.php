<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * Minutes
 *
 * @ORM\Table(name="minutes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MinutesRepository")
 */
class Minutes
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
     * @ORM\Column(name="minutes", type="integer")
     */
    private $minutes;

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
     * Set minutes
     *
     * @param integer $minutes
     *
     * @return Minutes
     */
    public function setMinutes($minutes)
    {
        $this->minutes = $minutes;

        return $this;
    }

    /**
     * Get minutes
     *
     * @return int
     */
    public function getMinutes()
    {
        return $this->minutes;
    }

    /**
     * Set lap
     *
     * @param integer $lap
     *
     * @return Minutes
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

