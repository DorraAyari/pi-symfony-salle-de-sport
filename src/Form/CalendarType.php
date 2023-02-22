<?php

namespace App\Form;

use App\Entity\Cours;
use App\Entity\Salle;
use App\Entity\Calendar;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class CalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('title')
        ->add('start', DateTimeType::class, [
            'date_widget' => 'single_text'
        ])
        ->add('end', DateTimeType::class, [
            'date_widget' => 'single_text'
        ])
        ->add('description')
        ->add('background_color', ColorType::class)
        ->add('border_color', ColorType::class)
        ->add('text_color', ColorType::class)
        ->add(
            'Salle', EntityType::class,
            [
                'class' => Salle::class,
                'choice_label' => 'nom',
                'expanded' => false, //on peut choisir une seule
                'multiple' => false,

            ]
            
        ) 
        ->add(
            'Cours', EntityType::class,
            [
                'class' => Cours::class,
                'choice_label' => 'nom',
                'expanded' => false, //on peut choisir une seule
                'multiple' => false,

            ]
            
        ) 
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Calendar::class,
        ]);
    }
}
