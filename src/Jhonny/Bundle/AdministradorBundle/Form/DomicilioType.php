<?php

namespace Jhonny\Bundle\AdministradorBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DomicilioType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('calle')
            ->add('numero', null, array(
                'label' => 'Número',
                )
            )
            ->add('manzana')
            ->add('barrio')
            ->add('departamento')
            ->add('piso')
            ->add('resistenciaCentro')
            ->add('tipoDomicilio')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jhonny\Bundle\AdministradorBundle\Entity\Domicilio'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jhonny_bundle_administradorbundle_domicilio';
    }
}
