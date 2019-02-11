<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistencias
 *
 * @ORM\Table(name="asistencias")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AsistenciasRepository")
 */
class Asistencias
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
     * @ORM\Column(name="asistencias", type="integer")
     */
    private $asistencias;

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
     * Set asistencias
     *
     * @param integer $asistencias
     *
     * @return Asistencias
     */
    public function setAsistencias($asistencias)
    {
        $this->asistencias = $asistencias;

        return $this;
    }

    /**
     * Get asistencias
     *
     * @return int
     */
    public function getAsistencias()
    {
        return $this->asistencias;
    }

    /**
     * Set vuelta
     *
     * @param integer $vuelta
     *
     * @return Asistencias
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

