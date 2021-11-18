<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('email', EmailType::class, [
                'label' => 'email'
        ]);
        $builder->add('firstName', TextType::class, [
                'label' => 'Prénom' 
        ]);
        $builder->add('lastName', TextType::class, [
                'label' => 'Nom' 
        ]);
        $builder->add('birthday', DateType::class, [
                'label' => 'Anniversaire' 
        ]);
        $builder->add('adress', TextType::class, [
                'label' =>'Adresse'
        ]);
        $builder->add('mobile', TextType::class, [
            'label' =>'Mobile'
        ]);
        $builder->add('website', TextType::class, [
        'label' =>'Site internet'
        ]);


        $builder ->add('plainPassword', PasswordType::class, [
             // instead of being set onto the object directly,
             // this is read and encoded in the controller
             'mapped' => false,
             'label' => 'Mot de passe',
             'attr' => ['autocomplete' => 'new-password'],
             'constraints' => [
                 new NotBlank([
                     'message' => 'Please enter a password',
                 ]),
                 new Length([
                     'min' => 6,
                     'minMessage' => 'Your password should be at least {{ limit }} characters',
                     // max length allowed by Symfony for security reasons
                     'max' => 4096,
                 ]),
             ],
         ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
