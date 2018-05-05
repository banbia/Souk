<?php

namespace Souk\BackBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;


class ImagesType extends AbstractType
{
  /**
   * {@inheritdoc}
   */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder  ->add('imageFile', VichImageType::class, array(
      'required'      => true,
      'allow_delete'  => true, // not mandatory, default is true
      'download_link' => true, // not mandatory, default is true
    ));



  }/**
 * {@inheritdoc}
 */
  public function configureOptions(OptionsResolver $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'Souk\BackBundle\Entity\Images'
    ));
  }

  /**
   * {@inheritdoc}
   */
  public function getBlockPrefix()
  {
    return 'souk_backbundle_images';
  }


}
