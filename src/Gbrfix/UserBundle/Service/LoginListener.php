<?php
 namespace Gbrfix\UserBundle\Service;
 
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
 
 class LoginListener {
 	private $identifer;
 	
 	public function __construct(UserIdentifier $identifier) {
 		$this->identifier = $identifier;
 	}
 	
 	public function processIdentification(InteractiveLoginEvent $event) {
 		$token = $event->getAuthenticationToken();
 		$user = $token->getUser();
 		$this->identifier->identify($user);
 	}
 }