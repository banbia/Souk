<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RegistrationFormType extends AbstractType
{
    /**
     * @var string
     */
    private $class;

    /**
     * @param string $class The User class name
     */
    public function __construct($class)
    {
        $this->class = $class;
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('roles', ChoiceType::class, array('attr'  =>  array(
                'class' => 'login_input',
                'style' => 'margin:5px 0;'),'label' => ' 
',
                'choices' => array('Client' => 'ROLE_CLIENT',
                    'Commercial' => 'ROLE_COM'),
                'required' => true, 'multiple' => true,))
            ->add('nom',TextType::class, array(
                'attr'  =>  array(
                    'class' => 'login_input',
                    'style' => 'margin:5px 0;')))
            ->add('prenom',TextType::class, array(
                'attr'  =>  array(
                    'class' => 'login_input',
                    'style' => 'margin:5px 0;')))
            ->add('mobile',TextType::class, array(
                'attr'  =>  array(
                    'class' => 'login_input',
                    'style' => 'margin:5px 0;')))
            ->add('adresse',TextType::class, array(
                'attr'  =>  array(
                    'class' => 'login_input',
                    'style' => 'margin:5px 0;')))
            ->add('titre_commercial',TextType::class, array(
                'attr'  =>  array(
                    'class' => 'tiit ',
                    'style' => 'margin:5px 0;')))
            ->add('email', EmailType::class, array('attr'  =>  array(
                'class' => 'login_input',
                'style' => 'margin:5px 0;'),'label' => 'form.email', 'translation_domain' => 'FOSUserBundle'))

            ->add('username', null, array('attr'  =>  array(
                'class' => 'login_input',
                'style' => 'margin:5px 0;'),'label' => 'form.username', 'translation_domain' => 'FOSUserBundle'))
            ->add('plainPassword', RepeatedType::class, array(

                'type' => PasswordType::class,
                'options' => array(
                    'translation_domain' => 'FOSUserBundle',
                    'attr' => array(
                        'autocomplete' => 'new-password',
                    ),
                ),
                'first_options' => array('attr'  =>  array(
                    'class' => 'login_input',
                    'style' => 'margin:5px 0;'),'label' => 'form.password'),
                'second_options' => array('attr'  =>  array(
                    'class' => 'login_input',
                    'style' => 'margin:5px 0;'),'label' => 'form.password_confirmation'),
                'invalid_message' => 'fos_user.password.mismatch',
            ))
        ;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => $this->class,
            'csrf_token_id' => 'registration',
        ));
    }

    // BC for SF < 3.0

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fos_user_registration';
    }
}
