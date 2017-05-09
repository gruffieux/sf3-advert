<?php
 namespace Gbrfix\UserBundle\Service;
 
 use Doctrine\ORM\EntityManager;
 use Symfony\Component\HttpFoundation\RequestStack;
 use Gbrfix\UserBundle\Entity\User;
 
 class UserIdentifier {
 	private $entityManager;
 	private $requestStack;
 	
 	public function __construct(EntityManager $entityManager, RequestStack $requestStack) {
 		$this->entityManager = $entityManager;
 		$this->requestStack = $requestStack;
 	}
 	
 	public function identify(User $user) {
 		$this->entityManager->persist($user);
 		$request = $this->requestStack->getCurrentRequest();
 		$user->setIp($request->getClientIp());
 		$this->entityManager->flush();
 	}
 }