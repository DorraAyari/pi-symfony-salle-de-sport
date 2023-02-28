<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\File;

use Symfony\Component\Validator\Constraints\Count;
use App\Form\DataTransformer\StringToFileTransformer;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CoachType extends AbstractType
{
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
            ->add('age',NumberType::class, [
       
                'empty_data' => ''
                ])
            ->add('height',TextType::class, [
       
                'empty_data' => ''
                ])

            
            ->add('weight',TextType::class, [
       
                'empty_data' => ''
                ])
            ->add('occupation',TextType::class, [
       
                'empty_data' => ''
                ])


        ;
      //  $builder->get('image')->addModelTransformer(new StringToFileTransformer());

        
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
