<?php

namespace Jhonny\Bundle\AdministradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domicilio
 *
 * @ORM\Table(name="domicilio")
 * @ORM\Entity
 */
class Domicilio
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
     * @ORM\Column(name="calle", type="string", length=255)
     */
    private $calle;

    /**
     * @var string
     *
     * @ORM\Column(name="numero", type="string", length=5)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="manzana", type="string", length=20)
     */
    private $manzana;

    /**
     * @var string
     *
     * @ORM\Column(name="barrio", type="string", length=100)
     */
    private $barrio;

    /**
     * @var string
     *
     * @ORM\Column(name="departamento", type="string", length=20)
     */
    private $departamento;

    /**
     * @var string
     *
     * @ORM\Column(name="piso", type="string", length=5)
     */
    private $piso;

    /**
     * @var boolean
     *
     * @ORM\Column(name="resistencia_centro", type="boolean")
     */
    private $resistenciaCentro;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoDomicilio", type="string", length=255)
     */
    private $tipoDomicilio;


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
     * Set calle
     *
     * @param string $calle
     * @return Domicilio
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set numero
     *
     * @param string $numero
     * @return Domicilio
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set manzana
     *
     * @param string $manzana
     * @return Domicilio
     */
    public function setManzana($manzana)
    {
        $this->manzana = $manzana;

        return $this;
    }

    /**
     * Get manzana
     *
     * @return string 
     */
    public function getManzana()
    {
        return $this->manzana;
    }

    /**
     * Set barrio
     *
     * @param string $barrio
     * @return Domicilio
     */
    public function setBarrio($barrio)
    {
        $this->barrio = $barrio;

        return $this;
    }

    /**
     * Get barrio
     *
     * @return string 
     */
    public function getBarrio()
    {
        return $this->barrio;
    }

    /**
     * Set departamento
     *
     * @param string $departamento
     * @return Domicilio
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get departamento
     *
     * @return string 
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set piso
     *
     * @param string $piso
     * @return Domicilio
     */
    public function setPiso($piso)
    {
        $this->piso = $piso;

        return $this;
    }

    /**
     * Get piso
     *
     * @return string 
     */
    public function getPiso()
    {
        return $this->piso;
    }

    /**
     * Set resistenciaCentro
     *
     * @param boolean $resistenciaCentro
     * @return Domicilio
     */
    public function setResistenciaCentro($resistenciaCentro)
    {
        $this->resistenciaCentro = $resistenciaCentro;

        return $this;
    }

    /**
     * Get resistenciaCentro
     *
     * @return boolean 
     */
    public function getResistenciaCentro()
    {
        return $this->resistenciaCentro;
    }

    /**
     * Set tipoDomicilio
     *
     * @param string $tipoDomicilio
     * @return Domicilio
     */
    public function setTipoDomicilio($tipoDomicilio)
    {
        $this->tipoDomicilio = $tipoDomicilio;

        return $this;
    }

    /**
     * Get tipoDomicilio
     *
     * @return string 
     */
    public function getTipoDomicilio()
    {
        return $this->tipoDomicilio;
    }
}
