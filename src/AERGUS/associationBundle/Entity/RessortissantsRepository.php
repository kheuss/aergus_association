<?php
	namespace AERGUS\associationBundle\Entity;

	use Doctrine\ORM\EntityRepository;
	use Doctrine\ORM\QueryBuilder;

	class RessortissantsRepository extends EntityRepository{

		public function findAllRessortissantNotMembreBureau($bureau){

			$qb = $this
			    ->createQueryBuilder('r')
			    ->join('r.membres', 'm')
			    ->join('m.bureau', 'b', 'WITH','b.nom=:bureau')
			    ->setParameter('bureau', $bureau)
			;
			return $qb
			    ->getQuery()
			    ->getResult()
			;
		}
	}