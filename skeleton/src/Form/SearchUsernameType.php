<?php

namespace App\Form;


use App\Entity\SearchUsername;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchUsernameType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('username' , TextType::class, [
                'required' => false,
                'label' => 'Pseudo :',
                'attr' =>[
                    'placeholder'=> 'pseudo...'
                ]
        ]);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'validation_groups' => false,
            'data_class' => SearchUsername::class,
            'method' => 'get',
            'csrf_protection' => false
        ]);
    }


}
