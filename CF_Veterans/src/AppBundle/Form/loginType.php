<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;



class loginType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder
            ->add('username', TextType::class,['label' => 'Usuario'])
            ->add('password', PasswordType::class,['label' => 'Contraseña'])
            ->add('login', SubmitType::class, ['label' => 'Login'])
            ->add('clear', ResetType::class,array('label'=>'Limpiar'))
        ;
    }
}
