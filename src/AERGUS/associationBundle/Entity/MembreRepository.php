<?php
	namespace AERGUS\associationBundle\Entity;

	use Doctrine\ORM\EntityRepository;
	use Doctrine\ORM\QueryBuilder;

	class MembreRepository extends EntityRepository{

		public function findAllMembreBureau($bureau){
			$qb = $this
			    ->createQueryBuilder('m')
			    ->join('m.bureau', 'b', 'WITH', 'b.nom= :bureau')
				->setParameter('bureau', $bureau)
			;
			return $qb
			    ->getQuery()
			    ->getResult()
			;
		}
	}