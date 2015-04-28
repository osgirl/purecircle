<?php

namespace purecircle\AdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UserType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('fullname', null, array(
                    'error_bubbling' => true,
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                ->add('username', null, array(
                    'error_bubbling' => true,
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                ->add('dateAdded','date' , array(
                    'widget' => 'single_text',
                   'format' => 'dd-MM-yyyy'
                    
                ))
                ->add('password', 'repeated', array(
                    'type' => 'password',
                    'invalid_message' => 'The password fields must match.',
                    'options' => array('attr' => array('class' => 'password-field')),
                    'required' => true,
                    'first_options' => array('label' => 'Password','error_bubbling' => true),
                    'second_options' => array('label' => 'Repeat Password','error_bubbling' => true),
                    'error_bubbling' => true
                ))
                ->add('email', 'email', array(
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                ->add('gender', 'choice', array(
                    'error_bubbling' => true,
                    'choices' => array('Male' => 'Male', 'Female' => 'Female'),
                    'required' => False,
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                ->add('county', 'entity', array(
                    'class' => 'purecircleAdminBundle:County',
                    'required'=>false,
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                ->add('contact', null, array(
                    'error_bubbling' => true,
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                ->add('isActive','checkbox',array(
                    'required'=>false
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'purecircle\AdminBundle\Entity\User',
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'purecircle_adminbundle_user';
    }

}
