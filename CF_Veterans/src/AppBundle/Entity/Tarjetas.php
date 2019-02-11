<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarjetas
 *
 * @ORM\Table(name="tarjetas")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TarjetasRepository")
 */
class Tarjetas
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
     * @ORM\Column(name="amarillas", type="integer")
     */
    private $amarillas;

    /**
     * @var int
     *
     * @ORM\Column(name="rojas", type="integer")
     */
    private $rojas;

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
     * Set amarillas
     *
     * @param integer $amarillas
     *
     * @return Tarjetas
     */
    public function setAmarillas($amarillas)
    {
        $this->amarillas = $amarillas;

        return $this;
    }

    /**
     * Get amarillas
     *
     * @return int
     */
    public function getAmarillas()
    {
        return $this->amarillas;
    }

    /**
     * Set rojas
     *
     * @param integer $rojas
     *
     * @return Tarjetas
     */
    public function setRojas($rojas)
    {
        $this->rojas = $rojas;

        return $this;
    }

    /**
     * Get rojas
     *
     * @return int
     */
    public function getRojas()
    {
        return $this->rojas;
    }

    /**
     * Set vuelta
     *
     * @param integer $vuelta
     *
     * @return Tarjetas
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

