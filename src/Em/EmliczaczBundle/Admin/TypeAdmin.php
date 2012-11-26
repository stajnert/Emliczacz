<?php
namespace Em\EmliczaczBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;
use Em\EmliczaczBundle\Entity\Type;

class TypeAdmin extends Admin
{
    protected function configureShowField(ShowMapper $show)
    {
        $show
                ->add('id')
                ->add('active')
                ->add('name')
                ->add('value');
    }

    protected function configureFormFields(FormMapper $form)
    {
        $form
                ->add('active', null, array('required' => false))
                ->add('name')
                ->add('value');
    }

    protected function configureListFields(ListMapper $list)
    {
        $list
                ->addIdentifier('id')
                ->add('active')
                ->add('name')                
                ->add('value');
    }

    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
                ->add('name')
                ->add('value');
    }
}
