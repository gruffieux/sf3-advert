<?php

namespace Gbrfix\PlatformBundle\Form;

use Gbrfix\PlatformBundle\Repository\CategoryRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdvertType extends AbstractType {
    public function buildForm(FormBuilderInterface $builder, array $options) {
    	//$pattern = 'D%'; // On récup arbitrairement les catégories commençant par D
    	$pattern = '%%';
    	
        $builder->add('date', DateTimeType::class, array('with_seconds'=>false))
			->add('title', TextType::class)
			->add('content', TextareaType::class)
			->add('author', TextType::class)
			->add('email', EmailType::class)
			->add('image', ImageType::class, array('required' => false)) // Formulaire imbriqué grâce à la relation One-to-One de l'entité
			/*->add('categories', CollectionType::class, array( // Formulaire imbriqué de relation ManyToMany
				'entry_type' => CategoryType::class,
				'allow_add' => true,
				'allow_delete' => true
			))*/
			->add('categories', EntityType::class, array( // select d'entités
				'class' => 'GbrfixPlatformBundle:Category',
				'choice_label' => 'name',
				'multiple' => true,
				'query_builder' => function(CategoryRepository $repository) use ($pattern) {
					return $repository->getLikeQueryBuilder($pattern);
        		}
			))
			->add('save', SubmitType::class);
		
        // On affiche le champs published que si l'annonce n'a pas encore été publiée
		$builder->addEventListener(FormEvents::PRE_SET_DATA, function(FormEvent $event) {
			$advert = $event->getData();
			if ($advert === null) {
				return;
			}
			if (!$advert->getPublished() || $advert->getId() === null) {
				$event->getForm()->add('published', CheckboxType::class, array('required'=>false));
			}
			else {
				$event->getForm()->remove('published');
			}
		});
    }
    
    public function configureOptions(OptionsResolver $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Gbrfix\PlatformBundle\Entity\Advert'
        ));
    }

    public function getBlockPrefix() {
        return 'gbrfix_platformbundle_advert';
    }
}
