<?php
namespace Gbrfix\PlatformBundle\Service;

use Symfony\Component\HttpFoundation\Response;

class BetaHTMLAdder {
	public function addBeta(Response $response, $remainingDays) {
		$content = $response->getContent();
		
		// Code HTML ajouté
		$html = '<div class="beta-banner">Beta J-' . (int)$remainingDays .' !</div>';
		
		// Insertion du code dans la page
		$content = str_replace(
			'<body>',
			'<body>' . $html,
			$content
		);
		
		// Modif du contenu dans la réponse
		$response->setContent($content);
		
		return $response;
	}
}