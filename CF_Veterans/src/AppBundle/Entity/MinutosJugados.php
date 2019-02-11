<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MinutosJugados
 *
 * @ORM\Table(name="minutos_jugados")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MinutosJugadosRepository")
 */
class MinutosJugados
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
     * @ORM\Column(name="minutos", type="integer")
     */
    private $minutos;

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
     * Set minutos
     *
     * @param integer $minutos
     *
     * @return MinutosJugados
     */
    public function setMinutos($minutos)
    {
        $this->minutos = $minutos;

        return $this;
    }

    /**
     * Get minutos
     *
     * @return int
     */
    public function getMinutos()
    {
        return $this->minutos;
    }

    /**
     * Set vuelta
     *
     * @param integer $vuelta
     *
     * @return MinutosJugados
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

