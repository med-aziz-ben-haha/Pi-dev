<?php

namespace App\Form;

use App\Entity\CentreMedical;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CentreMedicalType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom_centre_medical')
            ->add('adresse')
            ->add('type')
            ->add('mail')
            ->add('numTel')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => CentreMedical::class,
        ]);
    }
}
