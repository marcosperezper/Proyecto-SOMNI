<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stats
 *
 * @ORM\Table(name="stats")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatsRepository")
 */
class Stats
{
    /**
     * @ORM\ManyToOne(targetEntity="Players")
     * @ORM\JoinColumn(name="palyer_id", referencedColumnName="id")
     */
    private $player_id;

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
     * @ORM\Column(name="minutes_played", type="integer")
     */
    private $minutesPlayed;

    /**
     * @var int
     *
     * @ORM\Column(name="goals", type="integer")
     */
    private $goals;

    /**
     * @var int
     *
     * @ORM\Column(name="yellow_cards", type="integer")
     */
    private $yellowCards;

    /**
     * @var int
     *
     * @ORM\Column(name="red_cards", type="integer")
     */
    private $redCards;

    /**
     * @var int
     *
     * @ORM\Column(name="assists", type="integer")
     */
    private $assists;

    /**
     * @var bool
     *
     * @ORM\Column(name="round", type="boolean")
     */
    private $round;


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
     * Set minutesPlayed
     *
     * @param integer $minutesPlayed
     *
     * @return Stats
     */
    public function setMinutesPlayed($minutesPlayed)
    {
        $this->minutesPlayed = $minutesPlayed;

        return $this;
    }

    /**
     * Get minutesPlayed
     *
     * @return int
     */
    public function getMinutesPlayed()
    {
        return $this->minutesPlayed;
    }

    /**
     * Set goals
     *
     * @param integer $goals
     *
     * @return Stats
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
     * Set yellowCards
     *
     * @param integer $yellowCards
     *
     * @return Stats
     */
    public function setYellowCards($yellowCards)
    {
        $this->yellowCards = $yellowCards;

        return $this;
    }

    /**
     * Get yellowCards
     *
     * @return int
     */
    public function getYellowCards()
    {
        return $this->yellowCards;
    }

    /**
     * Set redCards
     *
     * @param integer $redCards
     *
     * @return Stats
     */
    public function setRedCards($redCards)
    {
        $this->redCards = $redCards;

        return $this;
    }

    /**
     * Get redCards
     *
     * @return int
     */
    public function getRedCards()
    {
        return $this->redCards;
    }

    /**
     * Set assists
     *
     * @param integer $assists
     *
     * @return Stats
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
     * Set round
     *
     * @param boolean $round
     *
     * @return Stats
     */
    public function setRound($round)
    {
        $this->round = $round;

        return $this;
    }

    /**
     * Get round
     *
     * @return bool
     */
    public function getRound()
    {
        return $this->round;
    }
}

