<?php

namespace purecircle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CountyType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('countyName',null,array(
                
                "attr"=>array(
                "class"=>"form-control"
              )
                
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'purecircle\AdminBundle\Entity\County'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'purecircle_adminbundle_county';
    }
}
