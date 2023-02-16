<?php

namespace App\Form;

use App\Entity\Coach;
use App\Entity\Cours;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom')
        ->add('description')
        ->add(
            'Coach', EntityType::class,
            [
                'class' => Coach::class,
                'choice_label' => 'nom',
                'expanded' => false, //on peut choisir une seule
                'multiple' => false,

            ]
            
        )
        ->add('image', FileType::class, [
            'label' => false,
            'multiple' => true,
            'mapped' => false,
            'required' => false,        
        ]);
        

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
