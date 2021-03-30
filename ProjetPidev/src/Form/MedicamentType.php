<?php

namespace App\Form;

use App\Entity\Medicament;
use App\Entity\Ordonnance;
use Symfony\Component\Form\AbstractType;
use phpDocumentor\Reflection\Type;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Captcha\Bundle\CaptchaBundle\Form\Type\CaptchaType;
use Captcha\Bundle\CaptchaBundle\Validator\Constraints\ValidCaptcha;

class MedicamentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nomMedicament')
            ->add('dateModif',DateType::class, [
                'years'=>range (2021,2030),
                'data' => new \DateTime()
            ])
            ->add('dispo')
            ->add('img_medicament', FileType::class, [
                'label' => 'Brochure (Image file)',
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File([
                        'maxSize' => '10024k',
                        'mimeTypesMessage' => 'Please upload a valid image',
                    ])
                ],
            ])


            ->add('descmedicament')
            ->add('captchaCode', CaptchaType::class, array(
                'captchaConfig' => 'ExampleCaptchaUserRegistration',
                'constraints' => [
                    new ValidCaptcha([
                        'message' => 'Invalid captcha, please try again',
                    ]),
                ],
            ))

            /*->add('Ordonnance')*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Medicament::class,
        ]);
    }
}
