<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping\OneToMany;

/**
 * Teams
 *
 * @ORM\Table(name="teams")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TeamsRepository")
 */
class Teams
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * One team has many stats. This is the inverse side.
     * @OneToMany(targetEntity="Stats", mappedBy="team")
     */
    private $team_id;

    public function __construct() {
        $this->team_id = new ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     *
     * @return Teams
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add teamId
     *
     * @param \AppBundle\Entity\Stats $teamId
     *
     * @return Teams
     */
    public function addTeamId(\AppBundle\Entity\Stats $teamId)
    {
        $this->team_id[] = $teamId;

        return $this;
    }

    /**
     * Remove teamId
     *
     * @param \AppBundle\Entity\Stats $teamId
     */
    public function removeTeamId(\AppBundle\Entity\Stats $teamId)
    {
        $this->team_id->removeElement($teamId);
    }

    /**
     * Get teamId
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTeamId()
    {
        return $this->team_id;
    }

    public function __toString()
    {
       return $this->name;
    }
}
