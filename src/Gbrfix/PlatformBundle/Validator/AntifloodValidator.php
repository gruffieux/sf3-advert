<?php
namespace Gbrfix\PlatformBundle\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\HttpFoundation\RequestStack;
use Doctrine\ORM\EntityManagerInterface;

class AntifloodValidator extends ConstraintValidator {
	private $requestStack;
	private $em;
	private $delay;
	
	public function __construct(RequestStack $requestStack, EntityManagerInterface $em, $delay) {
		$this->requestStack = $requestStack;
		$this->em = $em;
		$this->delay = $delay;
	}
	
	public function validate($value, Constraint $constraint) {
		// On récup l'objet Request via le service request_stack
		$request = $this->requestStack->getCurrentRequest();
		
		// On récup l'IP
		$ip = $request->getClientIp();
		
		// On vérifie le délai depuis le dernier post
		$isFlood = $this->em->getRepository('GbrfixPlatformBundle:Advert')->isFlood($ip, $this->delay);
		
		if ($isFlood) {
			$this->context->addViolation(str_replace('%delay%', $this->delay, $constraint->message)); // On déclenche l'erreur
		}
	}
}