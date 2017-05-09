<?php
namespace Gbrfix\PlatformBundle\Service;

use Gbrfix\PlatformBundle\Entity\Application;

class ApplicationMailer {
	/**
	 * @var \Swift_Mailer
	 */
	private $mailer;
	
	public function __construct(\Swift_Mailer $mailer) {
		$this->mailer = $mailer;
	}
	
	public function sendNewNotification(Application $application) {
		$message = new \Swift_Message(
			'Nouvelle candidature',
			'Vous avez reçu une nouvelle candidature.'
		);
		
		// On envoie un mail à l'auteur et au mail de contact
		$message->addTo($application->getAdvert()->getUser()->getEmail())
			->addTo($application->getAdvert()->getEmail())
			->addFrom('gabriel.ruffix@gmail.com');
		
		$this->mailer->send($message);
	}
}