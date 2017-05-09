<?php
namespace Gbrfix\PlatformBundle\DoctrineListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Gbrfix\PlatformBundle\Service\ApplicationMailer;
use Gbrfix\PlatformBundle\Entity\Application;

class ApplicationCreationListener {
	/**
	 * @var ApplicationMailer
	 */
	private $applicationMailer;
	
	public function __construct(ApplicationMailer $applicationMailer) {
		$this->applicationMailer = $applicationMailer;
	}
	
	public function postPersist(LifecycleEventArgs $args) {
		$entity = $args->getObject();
		
		// On ne veut envoyer un e-mail que pour les entités Application
		if (!$entity instanceof Application) {
			return;
		}
		
		try {
			$this->applicationMailer->sendNewNotification($entity);
		}
		catch (\Exception $e) {
			// Ne rien faire
		}
	}
}