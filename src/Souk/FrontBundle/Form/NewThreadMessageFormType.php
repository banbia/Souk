<?php
namespace Souk\FrontBundle\Form;


use FOS\MessageBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\MessageBundle\FormType\NewThreadMessageFormType as FosMessageType;


class NewThreadMessageFormType extends FosMessageType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recipient', LegacyFormHelper::getType('FOS\UserBundle\Form\Type\UsernameFormType')
                , array('attr'  =>  array(
                'class' => 'form-control',
                'style' => 'margin:5px 0;')),array(
                'label' => 'Destinataire',
                'translation_domain' => 'FOSMessageBundle',
            ))
            ->add('Subject', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\TextType')
                , array('attr'  =>  array(
                    'class' => 'form-control',
                    'style' => 'margin:5px 0;')),array(
                    'label' => 'Sujet',
                    'translation_domain' => 'FOSMessageBundle',
                ))
            ->add('Body', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\TextareaType')
                , array('attr'  =>  array(
                    'class' => 'form-control',
                    'style' => 'margin:5px 0;')),array(
                    'label' => 'Contenu',
                    'translation_domain' => 'FOSMessageBundle',
                ));
    }


}
