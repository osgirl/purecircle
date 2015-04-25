<?php

namespace purecircle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username',null,array(
                'attr'=>array(
                  'class'=>'form-control'  
                    
                )
            ))
            ->add('password',null,array(
                'attr'=>array(
                  'class'=>'form-control'  
                    
                )
            ))
            ->add('email','email',array(
                'attr'=>array(
                  'class'=>'form-control'  
                    
                )
            ))
            ->add('isActive')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'purecircle\AdminBundle\Entity\User'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'purecircle_adminbundle_user';
    }
}
