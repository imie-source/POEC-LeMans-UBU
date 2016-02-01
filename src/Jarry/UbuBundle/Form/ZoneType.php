<?php

namespace Jarry\UbuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ZoneType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('in_out_status')
            ->add('post_lat')
            ->add('post_long')
            ->add('pos_alt')
            ->add('octo_x')
            ->add('octo_y')
            ->add('octo_z')
            ->add('place')
            ->add('mother_zone')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jarry\UbuBundle\Entity\Zone'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jarry_ububundle_zone';
    }
}
