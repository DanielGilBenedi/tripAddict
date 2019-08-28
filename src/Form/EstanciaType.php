<?php

namespace App\Form;

use App\Entity\Estancia;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EstanciaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('noches')
            ->add('personas')
            ->add('habitacion')
            ->add('tipoPension')
            ->add('id_hotel')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Estancia::class,
        ]);
    }
}
