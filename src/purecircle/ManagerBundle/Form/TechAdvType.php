<?php

namespace purecircle\ManagerBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TechAdvType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('firstname',null, array(
                    'error_bubbling' => true,
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                ->add('lastname',null, array(
                    'error_bubbling' => true,
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                
                ->add('gender','choice', array(
                    'error_bubbling' => true,
                    'choices' => array('Male' => 'Male', 'Female' => 'Female'),
                    'required' => False,
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                
                ->add('contact',null, array(
                    'error_bubbling' => true,
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                ->add('idNumber',null, array(
                    'error_bubbling' => true,
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                ->add('payrollNumber',null,array(
                    'error_bubbling' => true,
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                ->add('region',null,array(
                    'error_bubbling' => true,
                    "attr" => array(
                        "class" => "form-control"
                    )))
                
                ->add('village')
                ->add('latitude',null, array(
                    'error_bubbling' => true,
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                ->add('longitude',null, array(
                    'error_bubbling' => true,
                    "attr" => array(
                        "class" => "form-control"
                    )
                ))
                
                ->add('remarks','textarea', array(
                    'label' => false ,
                    'error_bubbling' => true,
                    "attr" => array(
                        "class" => "form-control",
                        'placeholder'=>'Give remarks about Advisor'
                    )
                ))
                
                ->add('dateAdded',null, array(
                     'widget' => 'single_text',
                   'format' => 'dd-MM-yyyy'
                ))
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'purecircle\ManagerBundle\Entity\TechAdv'
        ));
    }

    /**
     * @return string
     */
    public function getName() {
        return 'purecircle_managerbundle_techadv';
    }

}
