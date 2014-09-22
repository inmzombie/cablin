<?php

namespace Jhonny\Bundle\AdministradorBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use Jhonny\Bundle\AdministradorBundle\Entity\Cliente;

/**
 * OnFlushCliente
 *
 * @author Jonatan Silva <jonatansilva@gmail.com>
 */
class PostPersistCliente
{

    /**
    * PostPersist 
    *
    * @param LifecycleEventArgs $args description
    *
    * @return $this
    */
    public function postPersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();
        $em = $args->getEntityManager();
        if ($entity instanceof Cliente) {
            $entity->generateClientNumber();
        };
        $em->persist($entity);
        $em->flush();

        return $this;
    }
}
