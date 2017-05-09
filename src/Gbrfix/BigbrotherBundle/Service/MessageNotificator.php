<?php
namespace Gbrfix\BigbrotherBundle\Service;

use Symfony\Component\Security\Core\User\UserInterface;

class MessageNotificator {
	protected $mailer;
	
	public function __construct(\Swift_Mailer $mailer) {
		$this->mailer = $mailer;
	}
	
	public function notifyByEmail($message, UserInterface $user) {
		$message = \Swift_Message::newInstance()
			->setSubject("Nouveau message d'un utilisateur surveillé")
			->setFrom('gabriel.ruffix@gmail.com')
			->setTo('gabriel.ruffix@gmail.com')
			->setBody("L'utililisateur surveillé '" . $user->getUsername() . "' a posté le message suivant: '" . $message . "'");
		
		$this->mailer->send($message);
	}
}