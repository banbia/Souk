<?php

namespace Souk\BackBundle\Form;

use Doctrine\ORM\EntityRepository;
use FrontBundle\Repository\UserRepository;
use Souk\UserBundle\Entity\User;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ReclamationsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
                ->add('commercial',EntityType::class,array(
                    'class'=>User::class,
                    'query_builder'=>function(EntityRepository $er){
                        return
                            $er ->createQueryBuilder('u')
                                ->where('u.roles like :role')
                                ->setParameter('role', '%'.addcslashes('ROLE_COM', '%_').'%')

                            // ->setParameter('role', '%ROLE_COM%')
                            ;
                },'choice_label'=>'titre_commercial'))
                ->add('contenu');
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Souk\BackBundle\Entity\Reclamations'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'souk_backbundle_reclamations';
    }


}
