<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jugadores
 *
 * @ORM\Table(name="jugadores")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JugadoresRepository")
 */
class Jugadores
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellidos", type="string", length=255)
     */
    private $apellidos;

    /**
     * @var string
     *
     * @ORM\Column(name="apodo", type="string", length=255)
     */
    private $apodo;

    /**
     * @var int
     *
     * @ORM\Column(name="dorsal", type="integer")
     */
    private $dorsal;

    /**
     * @var string
     *
     * @ORM\Column(name="posicion", type="string", length=255)
     */
    private $posicion;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Jugadores
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set apellidos
     *
     * @param string $apellidos
     *
     * @return Jugadores
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;

        return $this;
    }

    /**
     * Get apellidos
     *
     * @return string
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * Set apodo
     *
     * @param string $apodo
     *
     * @return Jugadores
     */
    public function setApodo($apodo)
    {
        $this->apodo = $apodo;

        return $this;
    }

    /**
     * Get apodo
     *
     * @return string
     */
    public function getApodo()
    {
        return $this->apodo;
    }

    /**
     * Set dorsal
     *
     * @param integer $dorsal
     *
     * @return Jugadores
     */
    public function setDorsal($dorsal)
    {
        $this->dorsal = $dorsal;

        return $this;
    }

    /**
     * Get dorsal
     *
     * @return int
     */
    public function getDorsal()
    {
        return $this->dorsal;
    }

    /**
     * Set posicion
     *
     * @param string $posicion
     *
     * @return Jugadores
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;

        return $this;
    }

    /**
     * Get posicion
     *
     * @return string
     */
    public function getPosicion()
    {
        return $this->posicion;
    }
}

