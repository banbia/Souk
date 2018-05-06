<?php

namespace Souk\FrontBundle\Form;

use FOS\MessageBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

/**
 * Message form type for starting a new conversation with multiple recipients.
 *
 * @author Łukasz Pospiech <zocimek@gmail.com>
 */
class NewThreadMultipleMessageFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('recipients', LegacyFormHelper::getType('FOS\MessageBundle\FormType\RecipientsType')
                , array('attr'  =>  array(
                    'class' => 'form-control',
                    'style' => 'margin:5px 0;')),array(
                    'label' => 'rrr',
                    'translation_domain' => 'FOSMessageBundle',
                ))
            ->add('subject', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\TextType')
                , array(
                'label' => 'Sujet',
                'translation_domain' => 'FOSMessageBundle',
            ))
            ->add('body', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\TextareaType')
                , array(
                'label' => 'Contenu',
                'translation_domain' => 'FOSMessageBundle',
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'fos_message_new_multiperson_thread';
    }

    /**
     * @deprecated To remove when supporting only Symfony 3
     */
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}
