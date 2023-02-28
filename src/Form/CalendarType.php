<?php

namespace App\Form;

use App\Entity\Coach;
use App\Entity\Cours;
use App\Entity\Salle;
use App\Entity\Calendar;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ColorType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CalendarType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('title',TextType::class, [
            'empty_data' => ''

        ])
        ->add('start',DateTimeType::class, [
            'empty_data' => ''

        ])
        
        ->add('end',DateTimeType::class, [
            'empty_data' => ''

        ])
        ->add('description',TextareaType::class ,[
            'empty_data' => ''

        ])
        ->add('background_color',ColorType::class,
        [
            'empty_data' => ''

        ])
        ->add('border_color',ColorType::class ,[
            'empty_data' => ''

        ])
        ->add('text_color',ColorType::class,[
            'empty_data' => ''

        ])
        ->add(
            'Salle',EntityType::class,
            [
                'class' => Salle::class,
                'choice_label' => 'nom',
                'expanded' => false, //on peut choisir une seule
                'multiple' => false,
                 'empty_data' => ''
                  
            ]
            
        ) 

        ->add(
            'Cours',EntityType::class,
            [
                'class' => Cours::class,
                'choice_label' => 'nom',
                'expanded' => false, //on peut choisir une seule
                'multiple' => false,
                'empty_data' => ''

            ]
            
        ) 
        ->add(
            'Coach',EntityType::class,
            [
                'class' => Coach::class,
                'choice_label' => 'nom',
                'expanded' => false, //on peut choisir une seule
                'multiple' => false,
                'empty_data' => ''

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
