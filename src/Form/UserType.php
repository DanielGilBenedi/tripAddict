<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('email', TextType::class, array(
                'label' => 'Email',
                'attr' => [
                    'placeholder' => 'example@gmail.com',
                    'class'=>'form-control'
                ]
            ))

            ->add('password', TextType::class, array(
                'label' => 'Contraseña',
                'attr' => [
                    
                    'class'=>'form-control'
                ]
            ))

            ->add('usuario', TextType::class, array(
                'label' => 'Usuario',
                'attr' => [
                    
                    'class'=>'form-control'
                ]
            ))

            ->add('nombre', TextType::class, array(
                'label' => 'Nombre',
                'attr' => [
                    
                    'class'=>'form-control'
                ]
            ))

            ->add('apellidos', TextType::class, array(
                'label' => 'Apellidos',
                'attr' => [
                    
                    'class'=>'form-control'
                ]
            ))

            ->add('direccion', TextType::class, array(
                'label' => 'Direccion',
                'attr' => [
                    
                    'class'=>'form-control'
                ]
            ))

            ->add('ciudad', TextType::class, array(
                'label' => 'Ciudad',
                'attr' => [
                    
                    'class'=>'form-control'
                ]
            ))
            ->add('fechaNacimiento', DateType::class, array(
                'label' => 'Fecha Nacimiento',
                'widget' => 'single_text',
                'attr' => [
                    
                    'class'=>'form-control'
                ]
            ))

            ->add('fechaRegistro', DateType::class, array(
                'label' => 'Fecha Registro',
                'widget' => 'single_text',
                'attr' => [
                    
                    'class'=>'form-control'
                ]
            ))


            
            //->add('roles')
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
