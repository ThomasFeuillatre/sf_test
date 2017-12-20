<?php

namespace AppBundle\Repository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAllHome()
	{
		$qb = $this->createQueryBuilder('a');
		$qb->orderBy('a.title','ASC');
		$qb->setMaxResults(3);

		$query = $qb->getQuery();
		return $query->execute();
	}
}
