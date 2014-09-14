<?php

namespace Jhonny\Bundle\AdministradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 *
 * @ORM\Table(name="servicio")
 * @ORM\Entity(repositoryClass="Jhonny\Bundle\AdministradorBundle\Entity\ServicioRepository")
 */
class Servicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cable", type="string", length=255)
     */
    private $cable;

    /**
     * @var string
     *
     * @ORM\Column(name="internet", type="string", length=255)
     */
    private $internet;

    /**
     * @var string
     *
     * @ORM\Column(name="combo", type="string", length=255)
     */
    private $combo;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cable
     *
     * @param string $cable
     * @return Servicio
     */
    public function setCable($cable)
    {
        $this->cable = $cable;

        return $this;
    }

    /**
     * Get cable
     *
     * @return string 
     */
    public function getCable()
    {
        return $this->cable;
    }

    /**
     * Set internet
     *
     * @param string $internet
     * @return Servicio
     */
    public function setInternet($internet)
    {
        $this->internet = $internet;

        return $this;
    }

    /**
     * Get internet
     *
     * @return string 
     */
    public function getInternet()
    {
        return $this->internet;
    }

    /**
     * Set combo
     *
     * @param string $combo
     * @return Servicio
     */
    public function setCombo($combo)
    {
        $this->combo = $combo;

        return $this;
    }

    /**
     * Get combo
     *
     * @return string 
     */
    public function getCombo()
    {
        return $this->combo;
    }
}
