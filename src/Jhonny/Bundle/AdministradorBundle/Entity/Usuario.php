<?php

namespace Jhonny\Bundle\AdministradorBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 */
class Usuario extends BaseUser
{
    /**
    * @ORM\Id
    * @ORM\Column(type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}
