<?php

namespace purecircle\ManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TechAdvType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('firstname')
            ->add('lastname')
            ->add('gender')
            ->add('contact')
            ->add('idNumber')
            ->add('payrollNumber')
            ->add('region')
            ->add('village')
            ->add('latitude')
            ->add('longitude')
            ->add('managerId')
            ->add('remarks')
            ->add('dateAdded')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'purecircle\ManagerBundle\Entity\TechAdv'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'purecircle_managerbundle_techadv';
    }
}
