<?php

namespace Jhonny\Bundle\AdministradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturaMensual
 *
 * @ORM\Table(name="factura_mensual")
 * @ORM\Entity(repositoryClass="Jhonny\Bundle\AdministradorBundle\Entity\FacturaMensualRepository")
 */
class FacturaMensual
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="datetime")
     */
    private $fecha;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return FacturaMensual
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}
