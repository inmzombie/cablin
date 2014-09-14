<?php

namespace Jhonny\Bundle\AdministradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="Jhonny\Bundle\AdministradorBundle\Entity\ClienteRepository")
 */
class Cliente
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
     * @ORM\Column(name="numero_cliente", type="string", length=255)
     */
    private $numeroCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_apellido", type="string", length=255)
     */
    private $nombreApellido;

    /**
     * @var string
     *
     * @ORM\Column(name="documento", type="string", length=8)
     */
    private $documento;
    
    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=25)
     */
    private $telefono;


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
     * Set nrocliente
     *
     * @param string $nrocliente
     * @return Cliente
     */
    public function setNrocliente($nrocliente)
    {
        $this->nrocliente = $nrocliente;

        return $this;
    }

    /**
     * Get nrocliente
     *
     * @return string 
     */
    public function getNrocliente()
    {
        return $this->nrocliente;
    }

    /**
     * Set nombreyapellido
     *
     * @param string $nombreyapellido
     * @return Cliente
     */
    public function setNombreyapellido($nombreyapellido)
    {
        $this->nombreyapellido = $nombreyapellido;

        return $this;
    }

    /**
     * Get nombreyapellido
     *
     * @return string 
     */
    public function getNombreyapellido()
    {
        return $this->nombreyapellido;
    }

    /**
     * Set dni
     *
     * @param string $dni
     * @return Cliente
     */
    public function setDni($dni)
    {
        $this->dni = $dni;

        return $this;
    }

    /**
     * Get dni
     *
     * @return string 
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * Set numeroCliente
     *
     * @param string $numeroCliente
     * @return Cliente
     */
    public function setNumeroCliente($numeroCliente)
    {
        $this->numeroCliente = $numeroCliente;

        return $this;
    }

    /**
     * Get numeroCliente
     *
     * @return string 
     */
    public function getNumeroCliente()
    {
        return $this->numeroCliente;
    }

    /**
     * Set nombreApellido
     *
     * @param string $nombreApellido
     * @return Cliente
     */
    public function setNombreApellido($nombreApellido)
    {
        $this->nombreApellido = $nombreApellido;

        return $this;
    }

    /**
     * Get nombreApellido
     *
     * @return string 
     */
    public function getNombreApellido()
    {
        return $this->nombreApellido;
    }

    /**
     * Set documento
     *
     * @param string $documento
     * @return Cliente
     */
    public function setDocumento($documento)
    {
        $this->documento = $documento;

        return $this;
    }

    /**
     * Get documento
     *
     * @return string 
     */
    public function getDocumento()
    {
        return $this->documento;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Cliente
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }
}
