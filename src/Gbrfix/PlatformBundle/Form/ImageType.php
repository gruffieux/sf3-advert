<?php

namespace Gbrfix\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ImageType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('file', FileType::class);
    }
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gbrfix\PlatformBundle\Entity\Image'
        ));
    }

    public function getBlockPrefix() {
        return 'gbrfix_platformbundle_image';
    }
}
