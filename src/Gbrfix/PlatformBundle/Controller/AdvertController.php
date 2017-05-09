<?php
namespace Gbrfix\PlatformBundle\Controller;

use Gbrfix\PlatformBundle\Entity\Advert;
use Gbrfix\PlatformBundle\Entity\Image;
use Gbrfix\PlatformBundle\Entity\Application;
use Gbrfix\PlatformBundle\Entity\AdvertSkill;
use Gbrfix\PlatformBundle\Entity\AdvertMarker;
use Gbrfix\PlatformBundle\Form\AdvertType;
use Gbrfix\PlatformBundle\Form\AdvertEditType;
use Gbrfix\PlatformBundle\Form\ApplicationType;
use Gbrfix\PlatformBundle\Event\PlatformEvents;
use Gbrfix\PlatformBundle\Event\MessagePostEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class AdvertController extends Controller {
	public function indexAction($page) {
		if ($page < 1) {
			$this->createNotFoundException('Page "' . $page . '" inexistante.');
		}
		
		$nbPerPage = 10;
		
		// On récup l'objet Paginator
		$listAdverts = $this->getDoctrine()
			->getManager()
			->getRepository('GbrfixPlatformBundle:Advert')
			->getAdverts($page, $nbPerPage);
		
		// On calcul le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces.
		$nbPages = ceil(count($listAdverts) / $nbPerPage);
		
		return $this->render('GbrfixPlatformBundle:Advert:index.html.twig', array(
			'listAdverts' => $listAdverts,
			'nbPages' => $nbPages,
			'page' => $page
		));
	}
	
	/**
	 * Liste des annonces marquées
	 * 
	 * @Security("has_role('ROLE_USER')")
	 */
	public function markerAction($page) {
		if ($page < 1) {
			$this->createNotFoundException('Page "' . $page . '" inexistante.');
		}
	
		$nbPerPage = 5;
		
		// On récup le user
		$user = $this->getUser();
	
		// On récup l'objet Paginator
		$listMarkers = $this->getDoctrine()
			->getManager()
			->getRepository('GbrfixPlatformBundle:AdvertMarker')
			->getAdverts($user->getId(), $page, $nbPerPage);
	
		// On calcul le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces.
		$nbPages = ceil(count($listMarkers) / $nbPerPage);
	
		return $this->render('GbrfixPlatformBundle:Advert:marker.html.twig', array(
			'listMarkers' => $listMarkers,
			'nbPages' => $nbPages,
			'page' => $page
		));
	}
	
	public function applicationAction($page) {
		if ($page < 1) {
			$this->createNotFoundException('Page "' . $page . '" inexistante.');
		}
	
		$nbPerPage = 3;
	
		// On récup l'objet Paginator
		// TODO Récupérer les annonces depuis ApplicationRepository
		$listAdverts = $this->getDoctrine()
			->getManager()
			->getRepository('GbrfixPlatformBundle:Advert')
			->getAdverts($page, $nbPerPage);
	
		// On calcul le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces.
		$nbPages = ceil(count($listAdverts) / $nbPerPage);
	
		return $this->render('GbrfixPlatformBundle:Advert:application.html.twig', array(
			'listAdverts' => $listAdverts,
			'nbPages' => $nbPages,
			'page' => $page
		));
	}
	
	/**
	 * Vue d'une annonce
	 * 
	 * @param Advert $advert On utilise le DoctrineParamConverter pour obtenir directement l'instance Advert
	 * @param Request $request
	 * 
	 * @ParamConverter("advert", options={"mapping": {"advert_id": "id"}})
	 */
	public function viewAction(Advert $advert, Request $request) {
		// On récup le manager
		$em = $this->getDoctrine()->getManager();
		
		// On récup la liste des candidatures à cette annonce
		$applications = $em->getRepository('GbrfixPlatformBundle:Application')->findBy(array(
			'advert' => $advert
		));
		
		// On récup la liste des compétences pour cette annonce
		$advertSkills = $em->getRepository('GbrfixPlatformBundle:AdvertSkill')->findBy(array(
			'advert' => $advert
		));
		
		// On récup l'annonce marquée
		$advertMarker = $em->getRepository('GbrfixPlatformBundle:AdvertMarker')->findOneBy(array(
			'advert' => $advert
		));
		
		// Renvoi du template
		return $this->render('GbrfixPlatformBundle:Advert:view.html.twig', array(
			'advert' => $advert,
			'applications' => $applications,
			'advertSkills' => $advertSkills,
			'advertMarker' => $advertMarker
		));
	}
	
	/**
	 * Ajouter une annonce
	 * 
	 * @param Request $request
	 * 
	 * @Security("has_role('ROLE_AUTEUR')")
	 */
	public function addAction(Request $request) {
		// On récup le user courant
		$security = $this->get('security.token_storage');
		$token = $security->getToken();
		$user = $token->getUser();
		
		// On créé une annonce avec les valeurs du user en tant que auteur
		$advert = new Advert();
		$advert->setUser($user);
		
		$form = $this->createForm(AdvertType::class, $advert);
		
		// On lit la requête, la variable $advert se remplit avec les valeurs entrées dans le formulaire
		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
			// On créé et déclenche l'event
			$event = new MessagePostEvent($advert->getContent(), $advert->getUser());
			$this->get('event_dispatcher')->dispatch(PlatformEvents::POST_MESSAGE, $event);
			
			// On récup ce qui a été modifié par l'écouteur, ici le message.
			$advert->setContent($event->getMessage());
			
			// On enregistre l'annonce dans la db
			$em = $this->getDoctrine()->getManager();
			$em->persist($advert);
			$em->flush();
			
			// On notifie l'ajout en session
			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée');
			
			return $this->redirectToRoute('gbrfix_platform_view', array('advert_id'=>$advert->getId()));
		}
		
		return $this->render('GbrfixPlatformBundle:Advert:add.html.twig', array(
			'form' => $form->createView()
		));
	}
	
	/**
	 * Postuler à une annonce
	 *
	 * @param $id annonce
	 * @param Request $request
	 *
	 * @Security("has_role('ROLE_USER')")
	 */
	public function applyAction($id, Request $request) {
		// On récup le user courant
		$user = $this->getUser();
	
		$em = $this->getDoctrine()->getManager();
		
		// On récup l'entité correspondant à $id
		$advert = $em->getRepository('GbrfixPlatformBundle:Advert')->find($id);
		
		// Si l'instance advert n'existe pas
		if ($advert === null) {
			throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");	
		}
		
		// On récup la candidature correspondant à l'annonce et au user
		$application = $em->getRepository('GbrfixPlatformBundle:Application')->findOneBy(array(
			'advert' => $advert,
			'user' => $user
		));
		
		// Si l'instance advert n'existe pas
		if ($application !== null) {
			throw new \Exception("Vous avez déjà postulé à cette annonce.");
		}
		
		// On créé une annonce avec les valeurs du user en tant que auteur
		$application = new Application();
		$application->setUser($user);
		$application->setAdvert($advert);
		$em->persist($application);
		
		$form = $this->createForm(ApplicationType::class, $application);
		
		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
			$em->flush();
			
			$request->getSession()->getFlashBag()->add('notice', 'Annonce postulée');
				
			return $this->redirectToRoute('gbrfix_platform_view', array('advert_id'=>$advert->getId()));
		}
		
		return $this->render('GbrfixPlatformBundle:Advert:apply.html.twig', array(
			'advert' => $advert,
			'form' => $form->createView()
		));
	}
	
	/**
	 * Modifier une annonce
	 * 
	 * @param $id
	 * @param Request $request
	 * @throws NotFoundHttpException
	 * 
	 * @Security("has_role('ROLE_MODERATEUR')")
	 */
	public function editAction($id, Request $request) {
		$em = $this->getDoctrine()->getManager();
		
		// On récup l'entité correspondant à $id
		$advert = $em->getRepository('GbrfixPlatformBundle:Advert')->find($id);
		
		// Si l'instance advert n'existe pas
		if ($advert === null) {
			throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");	
		}
		
		$form = $this->createForm(AdvertEditType::class, $advert);
		
		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
			$em->flush();
			
			$request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée');
				
			return $this->redirectToRoute('gbrfix_platform_view', array('advert_id'=>$advert->getId()));
		}
		
		return $this->render('GbrfixPlatformBundle:Advert:edit.html.twig', array(
			'advert' => $advert,
			'form' => $form->createView()
		));
	}
	
	/**
	 * Supprimer une annonce
	 * 
	 * @param $id
	 * @param Request $request
	 * @throws NotFoundHttpException
	 * 
	 * @Security("has_role('ROLE_ADMIN')")
	 */
	public function deleteAction($id, Request $request) {
		$em = $this->getDoctrine()->getManager();
		
		// On récup l'entité correspondant à $id
		$advert = $em->getRepository('GbrfixPlatformBundle:Advert')->find($id);
		
		// Si l'instance advert n'existe pas
		if ($advert === null) {
			throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");	
		}
		
		// On créé un formulaire vide qui ne contiendra que le champs CSRF
		// Cela permet de protéger la suppression d'annonce contre cette faille
		$form = $this->get('form.factory')->create();
		
		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
			// On supprime les catégories de l'annonce
			foreach ($advert->getCategories() as $category) {
				$advert->removeCategory($category);
			}
			
			$em->remove($advert);
			$em->flush();
			
			return $this->redirectToRoute('gbrfix_platform_home');
		}
		
		return $this->render('GbrfixPlatformBundle:Advert:delete.html.twig', array(
			'advert' => $advert,
			'form' => $form->createView()
		));
	}
	
	/**
	 * Marquer une annonce
	 *
	 * @param $id
	 * @throws NotFoundHttpException
	 *
	 * @Security("has_role('ROLE_USER')")
	 */
	public function markAction($id) {
		$em = $this->getDoctrine()->getManager();
		
		// On récup le user
		$user = $this->getUser();
	
		// On récup l'entité correspondant à $id
		$advert = $em->getRepository('GbrfixPlatformBundle:Advert')->find($id);
		
		// Si l'instance advert n'existe pas
		if ($advert === null) {
			throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");
		}
	
		$advertMarker = new AdvertMarker();
		$advertMarker->setUser($user);
		$advertMarker->setAdvert($advert);
		$advertMarker->setState(0);
		
		$em->persist($advertMarker);
		$em->flush();
	
		return $this->redirectToRoute('gbrfix_platform_markers');
	}
	
	/**
	 * Enlever le marqueur d'une annonce
	 *
	 * @param $id
	 * @throws NotFoundHttpException
	 *
	 * @Security("has_role('ROLE_USER')")
	 */
	public function unmarkAction($id) {
		$em = $this->getDoctrine()->getManager();
	
		// On récup le user
		$user = $this->getUser();
		
		// On récup l'entité correspondant à $id
		$advert = $em->getRepository('GbrfixPlatformBundle:Advert')->find($id);
	
		// On récup l'entité correspondant à $id
		$advertMarker = $em->getRepository('GbrfixPlatformBundle:AdvertMarker')->findOneBy(array(
			'advert' => $advert,
			'user' => $user
		));
	
		// Si l'instance advert n'existe pas
		if ($advertMarker === null) {
			throw new NotFoundHttpException("L'annonce d'id " . $id . " n'existe pas.");
		}
		
		$em->remove($advertMarker);
		$em->flush();
	
		return $this->redirectToRoute('gbrfix_platform_markers');
	}
	
	public function menuAction($limit) {
		$em = $this->getDoctrine()->getManager();
		
		// On récup les annonces
		$listAdverts = $em->getRepository('GbrfixPlatformBundle:Advert')->findBy(
			array(),
			array('updatedAt' => 'DESC'),
			$limit,
			0
		);
		
		return $this->render('GbrfixPlatformBundle:Advert:menu.html.twig', array(
			'listAdverts' => $listAdverts,
		));
	}
	
	/**
	 * @param $json
	 * 
	 * @ParamConverter("json")
	 * @ParamConverter("date", options={"format":"Y-m-d"})
	 */
	public function converterAction($json, \DateTime $date) {
		return new Response(print_r($json, true) . 'when: ' . $date->modify('+1 day')->format('d.m.Y'));
	}
}