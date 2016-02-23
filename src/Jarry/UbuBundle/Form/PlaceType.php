<?php

namespace Jarry\UbuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class PlaceType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label'=>'Nom de la place', 'pattern' => '[0-9A-Za-z ]{4,}'))
            ->add('address', 'text', array('label'=>'Adresse', 'pattern' => '[0-9A-Za-z ]{5,}'))
            ->add('city', 'text', array('label'=>'Ville', 'pattern' => '[A-Za-z\- ]+'))
            ->add('zip', 'text', array('label'=>'Code postal', 'pattern' => '[0-9]{5}'))
            //->add('secretCode')
            //->add('ormLink')
            //->add('gps_lat')
            //->add('gps_long')
            //->add('gps_alt')
            //->add('compas_x')
            //->add('compas_y')
            //->add('compas_z')
           
           // ->add('ownerID')
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
