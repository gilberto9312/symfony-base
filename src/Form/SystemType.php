<?php

namespace App\Form;

use App\Entity\System;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SystemType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('state')
            ->add('locationFileImage')
            ->add('access')
            ->add('type')
            ->add('position')
            ->add('codSystem')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => System::class,
        ]);
    }
}
