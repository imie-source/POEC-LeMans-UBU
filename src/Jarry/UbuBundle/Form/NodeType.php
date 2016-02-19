<?php

namespace Jarry\UbuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class NodeType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('ip')
            ->add('nodeType', ChoiceType::class,
                    
                    array('label'=>'Type de node',
                        'choices' => array(
                        'rad'=>'Radiateur',
                        'lum'=>'Lumière',
                        'sto'=>'Store / Volet electrique',
                        'rob'=>'Robot',
                        'cam'=>'Caméra',
                        'tvo'=>'Télévision',
                        'met'=>'Station météo',
                        'asp'=>'Aspirateur',
                        'the'=>'Thermomètre',
                        'mic'=>'Microphone',
                        'cub'=>'Cubase',
                        'hps'=>'Enceinte / Chaine HiFi',)
                    ))
                    
                    
                
            //->add('zone')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jarry\UbuBundle\Entity\Node'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'jarry_ububundle_node';
    }
}
