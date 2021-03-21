<?php

namespace App\Form;

use App\Entity\TypeReclamation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TriType extends AbstractType
{

        public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('minid')
            ->add('maxid')
        ;
    }

        public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => tri::class,
        ]);
    }
    }