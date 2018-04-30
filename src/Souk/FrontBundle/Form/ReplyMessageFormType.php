<?php

namespace Souk\FrontBundle\FormType;

use FOS\MessageBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * Form type for a reply.
 *
 * @author Thibault Duplessis <thibault.duplessis@gmail.com>
 */
class ReplyMessageFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('body', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\TextareaType')
                , array('attr'  =>  array(
                    'class' => 'form-control',
                    'style' => 'margin:5px 0;')),array(
                    'label' => 'Contenu',
                    'translation_domain' => 'FOSMessageBundle',
                ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'intention' => 'reply',
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fos_message_reply_message';
    }

    /**
     * @deprecated To remove when supporting only Symfony 3
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $this->configureOptions($resolver);
    }

    /**
     * @deprecated To remove when supporting only Symfony 3
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
