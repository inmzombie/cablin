<?php

namespace Jhonny\Bundle\AdministradorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telefono
 *
 * @ORM\Table(name="telefono")
 * @ORM\Entity(repositoryClass="Jhonny\Bundle\AdministradorBundle\Entity\TelefonoRepository")
 */
class Telefono
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
     * @ORM\Column(name="numero", type="string", length=15)
     */
    private $numero;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_telefono", type="string", length=255)
     */
    private $tipoTelefono;


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
     * Set numero
     *
     * @param string $numero
     * @return Telefono
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
     * Set tipoTelefono
     *
     * @param string $tipoTelefono
     * @return Telefono
     */
    public function setTipoTelefono($tipoTelefono)
    {
        $this->tipoTelefono = $tipoTelefono;

        return $this;
    }

    /**
     * Get tipoTelefono
     *
     * @return string 
     */
    public function getTipoTelefono()
    {
        return $this->tipoTelefono;
    }
}
