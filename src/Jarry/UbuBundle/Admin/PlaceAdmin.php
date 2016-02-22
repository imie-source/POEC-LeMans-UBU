<?php

namespace Jarry\UbuBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class PlaceAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
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
            ->add('id')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
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
            ->add('id')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
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
            ->add('id')
        ;
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
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
            ->add('id')
        ;
    }
}
