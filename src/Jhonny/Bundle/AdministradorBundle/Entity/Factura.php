<?php

namespace Jhonny\Bundle\AdministradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table(name="factura")
 * @ORM\Entity
 */
class Factura
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
     * @ORM\Column(name="lineaFactura", type="string", length=255)
     */
    private $lineaFactura;
    
    /**
     * @var string
     *
     * @ORM\Column(name="monto", type="float", length=20)
     */
    private $monto;
    
    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;


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
     * Set lineaFactura
     *
     * @param string $lineaFactura
     * @return Factura
     */
    public function setLineaFactura($lineaFactura)
    {
        $this->lineaFactura = $lineaFactura;

        return $this;
    }

    /**
     * Get lineaFactura
     *
     * @return string 
     */
    public function getLineaFactura()
    {
        return $this->lineaFactura;
    }

    /**
     * Set monto
     *
     * @param float $monto
     * @return Factura
     */
    public function setMonto($monto)
    {
        $this->monto = $monto;

        return $this;
    }

    /**
     * Get monto
     *
     * @return float 
     */
    public function getMonto()
    {
        return $this->monto;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Factura
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
