<?php

namespace App\Form;

use App\Entity\Patient;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\CallbackTransformer;

class PatientType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'label' => 'Nom du patient'
            ])
            ->add('maladie', TextareaType::class, [
                'label' => 'Maladie',
                'required' => false
            ])
            ->add('medecin', TextType::class, [
                'label' => 'Médecin assigné'
            ])
            ->add('dateVisite', DateType::class, [
                'label' => 'Date de visite',
                'widget' => 'single_text'
            ])
        ;

        // Add transformer to convert DateTime to DateTimeImmutable
        $builder->get('dateVisite')->addModelTransformer(new CallbackTransformer(
            function ($dateTimeImmutable) {
                // Transform DateTimeImmutable to DateTime for the form
                return $dateTimeImmutable ? \DateTime::createFromImmutable($dateTimeImmutable) : null;
            },
            function ($dateTime) {
                // Transform DateTime to DateTimeImmutable for the entity
                return $dateTime ? \DateTimeImmutable::createFromMutable($dateTime) : null;
            }
        ));
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Patient::class,
        ]);
    }
}