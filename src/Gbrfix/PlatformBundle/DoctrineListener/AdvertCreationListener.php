<?php
namespace Gbrfix\PlatformBundle\DoctrineListener;

use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
use Symfony\Component\HttpFoundation\RequestStack;
use Gbrfix\PlatformBundle\Entity\Advert;

class AdvertCreationListener {
	private $requestStack;
	
	public function __construct(RequestStack $requestStack) {
		$this->requestStack = $requestStack;
	}
	
	public function prePersist(LifecycleEventArgs $args) {
		$entity = $args->getObject();

		if (!$entity instanceof Advert) {
			return;
		}
	
		$request = $this->requestStack->getCurrentRequest();
		$entity->setIp($request->getClientIp());
	}
}