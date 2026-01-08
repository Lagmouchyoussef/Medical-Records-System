<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'attr' => ['placeholder' => 'Patient full name']
            ])
            ->add('illness', TextType::class, [
                'label' => 'Illness',
                'attr' => ['placeholder' => 'Illness description']
            ])
            ->add('assignedDoctor', TextType::class, [
                'label' => 'Assigned doctor',
                'attr' => ['placeholder' => 'Treating doctor name']
            ])
            ->add('visitDate', DateTimeType::class, [
                'label' => 'Visit date',
                'widget' => 'single_text',
                'attr' => ['placeholder' => 'Select date and time']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
        ]);
    }
}
