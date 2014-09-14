<?php

namespace Jhonny\Bundle\AdministradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LineaFactura
 *
 * @ORM\Table(name="linea_factura")
 * @ORM\Entity(repositoryClass="Jhonny\Bundle\AdministradorBundle\Entity\LineaFacturaRepository")
 */
class LineaFactura
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
     * @var float
     *
     * @ORM\Column(name="importe", type="float")
     */
    private $importe;

    /**
     * @var float
     *
     * @ORM\Column(name="interes", type="float")
     */
    private $interes;


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
     * Set importe
     *
     * @param float $importe
     * @return LineaFactura
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return float 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set interes
     *
     * @param float $interes
     * @return LineaFactura
     */
    public function setInteres($interes)
    {
        $this->interes = $interes;

        return $this;
    }

    /**
     * Get interes
     *
     * @return float 
     */
    public function getInteres()
    {
        return $this->interes;
    }
}
