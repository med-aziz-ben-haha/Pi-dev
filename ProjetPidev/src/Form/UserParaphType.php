<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserParaphType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('login')
            ->add('mdp',  PasswordType::class)
            ->add('email')
            ->add('nom')
            ->add('prenom')
            ->add('matriculeFiscale')
            ->add('adresseUser')
            ->add('telephone')
            ->add('sexe', choiceType::class, array(
                'choices' => array('Homme' => 'Homme', 'Femme' => 'Femme'),))
            ->add('parapharmacie')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
