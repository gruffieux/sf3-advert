<?php
namespace Gbrfix\PlatformBundle\Service;

class Antispam {
	private $mailer;
	private $locale;
	private $minLength;
	
	public function __construct(\Swift_Mailer $mailer, $minLength) {
		$this->mailer = $mailer;
		$this->minLength = $minLength;	
	}
	
	public function isSpam($text) {
		return strlen($text) < $this->minLength;
	}
	
	public function setLocale($locale) {
		$this->locale = $locale;
	}
}