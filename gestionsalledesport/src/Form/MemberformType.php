<?php

namespace App\Form;

use App\Entity\Member;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints as Assert;

class MemberformType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('Surname', TextType::class, [
            'constraints' => [
                new Assert\NotBlank(),
            ],
        ])
        ->add('Name', TextType::class, [
            'constraints' => [
                new Assert\NotBlank(),
            ],
        ])
        ->add('age', IntegerType::class, [
            'label' => 'Age',
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Positive(),
            ],
        ])
        ->add('email', EmailType::class, [
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Email(),
            ],
        ])
        ->add('Telnumber', IntegerType::class, [
            'label' => 'Age',
            'constraints' => [
                new Assert\NotBlank(),
                new Assert\Positive(),
            ],
            ]) 
        ->add('Pack', TextType::class, [
            'constraints' => [
                new Assert\NotBlank(),
            ],
        ])

        ->add('submit', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Member::class,
        ]);
    }
}
