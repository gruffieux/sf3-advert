<?php
namespace Gbrfix\PlatformBundle\Service;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class BetaListener {
	protected $betaHTML;
	protected $endDate;
	
	public function __construct($betaHTML, $endDate) {
		$this->betaHTML = $betaHTML;
		$this->endDate = new \Datetime($endDate);
	}
	
	public function processBeta(FilterResponseEvent $event) {
		// On teste si on a bien la requête principale et non une sous-requête
		if (!$event->isMasterRequest()) {
			return;
		}
		
		$remainingDays = $this->endDate->diff(new \Datetime())->days;
		
		// Si la date est échue on ne fait rien
		if ($remainingDays <= 0) {
			return;
		}
		
		// On envoie la réponse insérée dans l'événement par le gestionnaire au service BetaHTMLAdder
		$response = $this->betaHTML->addBeta($event->getResponse(), $remainingDays);
		
		// On met à jour la réponse
		$event->setResponse($response);
	}
}