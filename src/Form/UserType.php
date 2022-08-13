<?php

namespace App\Form;

use App\Entity\Cec;
use App\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', TextType::class, [
                'attr' => [
                    'class' => 'form-newcec'
                ],
                'required' => true
            ])
            ->add('nom', TextType::class, [
                'attr' => [
                    'class' => 'form-newcec'
                ],
                'required' => true
            ])
            ->add('prenom', TextType::class, [
                'attr' => [
                    'class' => 'form-newcec'
                ],
                'required' => false
            ])
            ->add('poste',ChoiceType::class, [
                'placeholder' => 'Choisir le Poste',
                'choices' => [
                    'Secretaire d\'Etat Civil' => 'Secretaire d\'Etat Civil',
                    'Officier d\'Etat Civil' => 'officier d\'Etat Civil'
                ],
                'expanded' => false,
                'multiple' => false,
            ])

            ->add('imageFile', VichImageType::class, [
                'required' => false,
                'allow_delete' => true,
                'delete_label' => 'Supprimer?',
                'download_uri' => false,
                'imagine_pattern' => 'squared_thumbnail_medium',
                'attr'=> [
                    'placeholder' => 'Arrété de création'
                ]
            ])
            ->add('code', EntityType::class, [
                'mapped' => false,
                'class' => Cec::class,
                'placeholder' => 'Code de la commune',
                'multiple' => false,
                'expanded' => false,
                'attr' => [
                    'class' => 'form-newcec'
                ],
                'auto_initialize' => false,
                'required' => true
            ])
            ->add('commune', TextType::class, [
                'attr' => [
                    'class' => 'form-newcec'
                ],
                'required' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
