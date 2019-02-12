<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Assists
 *
 * @ORM\Table(name="assists")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AssistsRepository")
 */
class Assists
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
     * @ORM\Column(name="assists", type="integer")
     */
    private $assists;

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
     * Set assists
     *
     * @param integer $assists
     *
     * @return Assists
     */
    public function setAssists($assists)
    {
        $this->assists = $assists;

        return $this;
    }

    /**
     * Get assists
     *
     * @return int
     */
    public function getAssists()
    {
        return $this->assists;
    }

    /**
     * Set lap
     *
     * @param integer $lap
     *
     * @return Assists
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

