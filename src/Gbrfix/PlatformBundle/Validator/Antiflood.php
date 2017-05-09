<?php
namespace Gbrfix\PlatformBundle\Validator;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * 
 * La contrainte est disponible via les annotations
 */
class Antiflood extends Constraint {
	public $message = "Vous avez déjà posté un message il y a moins de %delay% secondes, merci d'attendre un peu.";
	
	public function validateBy() {
		return 'gbrfix_platform_antiflood'; // On fait appel à l'alias du service
	}
}