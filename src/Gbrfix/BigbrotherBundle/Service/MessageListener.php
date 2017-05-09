<?php
namespace Gbrfix\BigbrotherBundle\Service;

use Gbrfix\PlatformBundle\Event\MessagePostEvent;
use Gbrfix\PlatformBundle\Event\PlatformEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class MessageListener implements EventSubscriberInterface {
	protected $notificator;
	protected $listUsers = array();
	
	public function __construct(MessageNotificator $notificator, $listUsers) {
		$this->notificator = $notificator;
		$this->listUsers = $listUsers;
	}
	
	static public function getSubscribedEvents() {
		return array(
			PlatformEvents::POST_MESSAGE => 'processMessage',
			PlatformEvents::AUTRE_EVENT => 'autreMethode'
		);
	}
	
	public function processMessage(MessagePostEvent $event) {
		// On active la surveillance si l'auteur du message est dans la liste
		if (in_array($event->getUser()->getUsername(), $this->listUsers)) {
			$this->notificator->notifyByEmail($event->getMessage(), $event->getUser());
		}
	}
	
	public function autreMethode() {
	}
}