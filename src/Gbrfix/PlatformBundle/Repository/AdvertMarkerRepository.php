<?php

namespace Gbrfix\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * AdvertMarkerRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AdvertMarkerRepository extends EntityRepository {
	public function getAdverts($userId, $page, $nbPerPage) {
		$query = $this->createQueryBuilder('m')
		->leftJoin('m.advert', 'a')
		->addSelect('a')
		->leftJoin('a.image', 'i')
		->addSelect('i')
		->leftJoin('a.categories', 'c')
		->addSelect('c')
		->leftJoin('m.user', 'u')
		->where('u.id=:userId')
		->orderBy('a.date', 'desc')
		->setParameter('userId', $userId)
		->getQuery();
	
		$query->setFirstResult(($page-1)*$nbPerPage)
			->setMaxResults($nbPerPage);
	
		return new Paginator($query, true);
	}
}
