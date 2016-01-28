<?php

namespace Jarry\UbuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PlaceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('address')
            ->add('city')
            ->add('zip')
            ->add('secretCode')
            ->add('ormLink')
            ->add('gps_lat')
            ->add('gps_long')
            ->add('gps_alt')
            ->add('compas_x')
            ->add('compas_y')
            ->add('compas_z')
            ->add('ownerID')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jarry\UbuBundle\Entity\Place'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jarry_ububundle_place';
    }
}
