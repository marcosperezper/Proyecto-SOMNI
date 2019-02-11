<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goles
 *
 * @ORM\Table(name="goles")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GolesRepository")
 */
class Goles
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
     * @var int
     *
     * @ORM\Column(name="goles", type="integer")
     */
    private $goles;

    /**
     * @var int
     *
     * @ORM\Column(name="vuelta", type="integer")
     */
    private $vuelta;


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
     * Set goles
     *
     * @param integer $goles
     *
     * @return Goles
     */
    public function setGoles($goles)
    {
        $this->goles = $goles;

        return $this;
    }

    /**
     * Get goles
     *
     * @return int
     */
    public function getGoles()
    {
        return $this->goles;
    }

    /**
     * Set vuelta
     *
     * @param integer $vuelta
     *
     * @return Goles
     */
    public function setVuelta($vuelta)
    {
        $this->vuelta = $vuelta;

        return $this;
    }

    /**
     * Get vuelta
     *
     * @return int
     */
    public function getVuelta()
    {
        return $this->vuelta;
    }
}

