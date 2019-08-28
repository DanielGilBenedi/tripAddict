<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        
        ->add('nombre',TextType::class,[
            'label' => false,
            
            'attr' =>[
                'placeholder'=>'Nombre',
                'class'=>"form-control"
            ]
            ])

            ->add('apellidos',TextType::class,[
                'label' => false,
                
                'attr' =>[
                    'placeholder'=>'Apellidos',
                    'class'=>"form-control"
                ]
                ])            

            ->add('email',EmailType::class,[
            'label' => false,
            
            'attr' =>[
                'placeholder'=>'Email',
                'class'=>"form-control"
            ]
            ])
            ->add('password', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'label' => false,
                'attr' =>[
                    'placeholder'=>'Contraseña',
                    'class'=>"form-control"
                ],
                'mapped' => false,
                'constraints' => [
                    new NotBlank([
                        'message' => 'Introduzca contraseña',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
            ])
            ->add('direccion',TextType::class,[
                'label' => false,
                
                'attr' =>[
                    'placeholder'=>'Dirección',
                    'class'=>"form-control"
                ]
                ])
            ->add('ciudad',TextType::class,[
                    'label' => false,
                    
                    'attr' =>[
                        'placeholder'=>'Ciudad',
                        'class'=>"form-control"
                ]
                ])
                ->add('fecha_nacimiento',DateType::class,[
                    'label' => false,
                    'widget' => 'single_text',
               
                    
                    'attr' =>[
                        
                        'class'=>"form-control",
                        
                        
                ]
                ])
            ->add('agreeTerms', CheckboxType::class, [
                'mapped' => false,
                'label' => "Terminos y condiciones",
                'constraints' => [
                    new IsTrue([
                        'message' => 'Debe acepatar los términos y condiciones.',

                        
                    ]),
                ],
               
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
