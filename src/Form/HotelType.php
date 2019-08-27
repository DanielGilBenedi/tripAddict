<?php

namespace App\Form;

use App\Entity\Hotel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class HotelType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre')
            ->add('descripcion')
            ->add('ciudad')
            ->add('direccion')
            ->add('comunidad')
            ->add('provincia')
            ->add('salida')
            ->add('llegada')
            ->add('telefono')
            ->add('email')
            ->add('web')
            ->add('imagenPortada')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Hotel::class,
        ]);
    }
}
