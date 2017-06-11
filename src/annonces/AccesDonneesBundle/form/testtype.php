<?php

Use Symfony\Component\Form\AbstractType ;
Use Symfony\Component\Form\FormBuilderInterface ;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of testtype
 *
 * @author diaw
 */
class testtype extends AbstractType {
    //put your code here
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
    }
    
    public function getName() {
        parent::getName();
    }
    
}
