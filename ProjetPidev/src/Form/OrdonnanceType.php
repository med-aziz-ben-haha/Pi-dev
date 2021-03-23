<?php

namespace App\Form;

use App\Entity\Ordonnance;
use App\Entity\Medicament;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Repository\UserRepository;
use App\Entity\User;
class OrdonnanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('contenu_ord',TextType::class, [
                'label'=>'Contenu ordonnance'
            ])
            ->add('date_ord',DateType::class, [
                'years'=>range (2021,2030),
                'data' => new \DateTime()
            ])
            ->add('medicaments' , EntityType::class , [
                'class'=>Medicament::class,
                'choice_label'=>'nomMedicament',
                'multiple'=>true
            ])
            ->add('user', EntityType::class, [
        'class' => User::class,
        'query_builder' => function (UserRepository $er) {
            return $er->createQueryBuilder('u')
                ->where('u.role=1 ') ;}])

        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Ordonnance::class,
        ]);
    }
}
