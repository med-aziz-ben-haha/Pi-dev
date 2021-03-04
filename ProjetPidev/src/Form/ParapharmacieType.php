<?php

namespace App\Form;

use App\Entity\Parapharmacie;
use Doctrine\DBAL\Types\IntegerType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParapharmacieType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomPara')
            ->add('adressePara')
            ->add('telPara', \Symfony\Component\Form\Extension\Core\Type\IntegerType::class)
            ->add('region')
            ->add('img_Para', FileType::class ,[
                'mapped' => false,
                'required' => false,
            ])


        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Parapharmacie::class,
        ]);
    }
}
