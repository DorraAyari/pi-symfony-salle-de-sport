<?php

namespace App\Form;

use App\Entity\Rating;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class RatingType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
         ->add('stars', ChoiceType::class, [
            'choices' => [
                '1 stars' => 1,
                '2 stars' => 2,
                '3 stars' => 3,
                '4 stars' => 4,
                '5 stars' => 5,
            ],
            'expanded' => true,
            'multiple' => false,
            'label' => false,
        ])
        ->add('user', HiddenType::class)
        ->add('cours', HiddenType::class)
        ->add('submit', SubmitType::class)

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
