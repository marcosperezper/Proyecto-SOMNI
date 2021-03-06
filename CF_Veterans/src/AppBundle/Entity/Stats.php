<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;
use AppBundle\Entity\Players;
use AppBundle\Entity\Teams;

/**
 * Stats
 *
 * @ORM\Table(name="stats")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\StatsRepository")
 */
class Stats
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * Many stats have one player.
     * @ManyToOne(targetEntity="Players", inversedBy="stats_id")
     * @JoinColumn(name="player_id", referencedColumnName="id")
     */
    private $player;

    /**
     * Many stats have one team.
     * @ManyToOne(targetEntity="Teams", inversedBy="stats_id")
     * @JoinColumn(name="team_id", referencedColumnName="id")
     */
    private $team;
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

    /**
     * Set player
     *
     * @param \AppBundle\Entity\Players $player
     *
     * @return Stats
     */
    public function setPlayerId(\AppBundle\Entity\Players $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get playerId
     *
     * @return \AppBundle\Entity\Players
     */
    public function getPlayerId()
    {
        return $this->player;
    }

    /**
     * Set player
     *
     * @param \AppBundle\Entity\Players $player
     *
     * @return Stats
     */
    public function setPlayer(\AppBundle\Entity\Players $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \AppBundle\Entity\Players
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set team
     *
     * @param \AppBundle\Entity\Teams $team
     *
     * @return Stats
     */
    public function setTeam(\AppBundle\Entity\Teams $team = null)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     * @return \AppBundle\Entity\Teams
     */
    public function getTeam()
    {
        return $this->team;
    }
}
