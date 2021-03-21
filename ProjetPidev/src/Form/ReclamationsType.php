<?php

namespace App\Form;

use App\Entity\Reclamation;
use App\Entity\User;
use App\Entity\TypeReclamation;
use App\Repository\TypeReclamationRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class ReclamationsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder


            ->add('user',EntityType::class,
                ['class'=>User::class,'choice_label'=>'nom'])

            ->add('typeReclamation',EntityType::class,
                ['class'=>TypeReclamation::class,'choice_label'=>'typeReclamation'])
            ->add('descriptionReclamation')

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Reclamation::class,
        ]);
    }
}
