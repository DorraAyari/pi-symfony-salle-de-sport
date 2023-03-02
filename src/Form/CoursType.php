<?php

namespace App\Form;

use App\Entity\Coach;
use App\Entity\Cours;
use App\Entity\Salle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Form\DataTransformer\StringToFileTransformer;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CoursType extends AbstractType
{    public $image_name;

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom',TextType::class, [
       
            'empty_data' => ''
            ])
        ->add('description',TextareaType::class, [
       
            'empty_data' => ''
            ])
        
        ->add('image', FileType::class, [
            'label' => false,
            'multiple' => true,
            'mapped' => false,
            'empty_data' => '',

            
        ])
        ->add('nbPlacesTotal', NumberType::class, [
            'empty_data' => ''


            
        ])
        ->add(
            'Coach', EntityType::class,
            [
                'class' => Coach::class,
                'choice_label' => 'nom',
                'expanded' => false, //on peut choisir une seule
                'multiple' => false,
                'empty_data' => '',
                'label' => false,

            ]
            
        )
        ->add(
            'Salle', EntityType::class,
            [
                'class' => Salle::class,
                'choice_label' => 'nom',
                'expanded' => false, //on peut choisir une seule
                'multiple' => false,
                'empty_data' => '',
                'label' => false,


            ]
            
        )   

    ;
 //   $builder->get('image')->addModelTransformer(new StringToFileTransformer());

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
