<?php
namespace ViewerBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class LayerAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('type','choice', array(
                'choices'  => array(
                    'ol.layer.Tile' => 'ol.layer.Tile',
                )))
            ->add('sourcetype','choice', array(
                'choices'  => array(
                    'ol.source.TileWMS' => 'ol.source.TileWMS',
                    'ol.source.OSM' => 'ol.source.OSM',
                    'ol.source.XYZ' => 'ol.source.XYZ',
                )))
            ->add('name', 'text')
            ->add('source')
            ->add('params')
            ->add('active');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper->add('name');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('name')
            ->add('active','boolean');
    }
}
