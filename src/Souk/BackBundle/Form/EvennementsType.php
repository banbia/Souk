<?php

namespace Souk\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Date;

class EvennementsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre',TextType::class)
            ->add('description',TextType::class)
            ->add('dateDeb',DateType::class)
            ->add('dateFin',DateType::class)
            ->add('lieu',TextType::class)
<<<<<<< HEAD
            ->add('prix',TextType::class)
            ->add('etat',TextType::class)
            ->add('prix',TextType::class);

=======
            ->add('prix',TextType::class);


>>>>>>> 435ff1e28cbf9c8076b6664844394aa1ade83980
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Souk\BackBundle\Entity\Evennements'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'souk_backbundle_evennements';
    }


}
