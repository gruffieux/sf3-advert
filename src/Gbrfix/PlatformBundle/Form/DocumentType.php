<?php

namespace Gbrfix\PlatformBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;

class DocumentType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
    	$subscriber = $options['subscriber'];
    	
        $builder->add('title', ChoiceType::class, array(
        		'choices'  => array(
        			'cv' => 'CV',
        			'cover' => 'Lettre de motivation',
        			'references' => 'Certificats de travail',
        			'certificats' => 'Diplômes'
        		)
        	))
        	->add('file', FileType::class)
        	->add('application', HiddenType::class, array('data'=>serialize($subscriber)));
    }
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gbrfix\PlatformBundle\Entity\Document'
        ));
        
        $resolver->setRequired(['subscriber']);
    }

    public function getBlockPrefix() {
        return 'gbrfix_platformbundle_document';
    }
}
