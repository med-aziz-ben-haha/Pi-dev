<?php

namespace App\Form;

use App\Entity\ListProduit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ListProduitType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('qte', TextType::class,['attr'=>[ 'id'=>'qtt', 'value'=>'1'],
                    'label_attr'=>['id'=>'qtt']]
            )
            ->add('ajouter',SubmitType::class , [
                'label'=>'Ajouter au panier',
                'attr'=>['class'=>'btn-outline-danger']
            ])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => ListProduit::class,
        ]);
    }
}
