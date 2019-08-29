<?php

namespace App\Form;

use App\Entity\PackAleatorio;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PackAleatorioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Precio')
            ->add('Titulo')
            ->add('id_pack1')
            ->add('id_pack2')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PackAleatorio::class,
        ]);
    }
}
