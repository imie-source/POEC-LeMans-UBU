<?php

namespace Jarry\UbuBundle\Form\Type;


use Symfony\Component\Form\FormBuilderInterface;
//use Symfony\Component\Form\FormBuilder;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        //$builder->add('password', 'password');
        //$builder->add('username', null, array('label' => 'form.username', 'translation_domain' => 'FOSUserBundle', 'attr' => array('class'=>'myClass')));
    }

    public function getName()
    {
        return 'ubu_user_registration';
    }
}