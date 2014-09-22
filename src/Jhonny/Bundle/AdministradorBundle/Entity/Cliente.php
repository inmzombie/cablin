<?php

namespace Jhonny\Bundle\AdministradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="Jhonny\Bundle\AdministradorBundle\Entity\ClienteRepository")
 * @ORM\HasLifecycleCallbacks()
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
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;


    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=255)
     */
    private $apellido;

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
     * @var integer
     *
     * @ORM\OneToMany(targetEntity="Domicilio",mappedBy="cliente", cascade={"all"})
     */
    private $domicilios;

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

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Cliente
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
     * Set apellido
     *
     * @param string $apellido
     * @return Cliente
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Post Flush Event para persistir el número de cliente
     *
     * @return $this
     */
    public function generateClientNumber()
    {
        $this->setNumeroCliente(
            sprintf('%04s-%03s', $this->getId(), 1)
        );
        return $this;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->domicilios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add domicilios
     *
     * @param \Jhonny\Bundle\AdministradorBundle\Entity\Domicilio $domicilios
     * @return Cliente
     */
    public function addDomicilio(\Jhonny\Bundle\AdministradorBundle\Entity\Domicilio $domicilios)
    {
        $this->domicilios[] = $domicilios;

        return $this;
    }

    /**
     * Remove domicilios
     *
     * @param \Jhonny\Bundle\AdministradorBundle\Entity\Domicilio $domicilios
     */
    public function removeDomicilio(\Jhonny\Bundle\AdministradorBundle\Entity\Domicilio $domicilios)
    {
        $this->domicilios->removeElement($domicilios);
    }

    /**
     * Get domicilios
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDomicilios()
    {
        return $this->domicilios;
    }
}
