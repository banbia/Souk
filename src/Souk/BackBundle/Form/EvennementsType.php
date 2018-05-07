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
<<<<<<< HEAD
            ->add('prix',TextType::class);

=======
            ->add('prix',TextType::class)
            ->add('etat',TextType::class)
            ->add('prix',TextType::class);


>>>>>>> ceaa21feb88ad4691f3b62f607ca612711bdcb83
>>>>>>> origin/master
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
