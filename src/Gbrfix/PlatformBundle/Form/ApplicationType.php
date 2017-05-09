<?php

namespace Gbrfix\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ApplicationType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder->add('content', TextareaType::class)
        	->add('documents', CollectionType::class, array(
        		'entry_type' => DocumentType::class,
        		'entry_options'  => array(
        			'subscriber' => $options['data'],
        		),
        		'allow_add' => true,
        	))
        	->add('save', SubmitType::class);
    }
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gbrfix\PlatformBundle\Entity\Application'
        ));
    }

    public function getBlockPrefix() {
        return 'gbrfix_platformbundle_application';
    }
}
