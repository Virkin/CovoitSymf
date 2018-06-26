<?php

namespace BackOfficeBundle\Repository;

/**
 * internauteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class internauteRepository extends \Doctrine\ORM\EntityRepository
{
	public function findInternauteInTrajet($idTrajet)
	{
		return $this->getEntityManager()->createQuery(
			"SELECT user.id as id FROM BackOfficeBundle:Internaute as user JOIN BackOfficeBundle:Inscription as ins WITH ins.internaute=user WHERE ins.trajet = :idTrajet")
					->setParameter('idTrajet', $idTrajet)
					->getResult();
	}

	public function findInternauteNotInTrajet($idTrajet, $idConducteur)
	{	
		$userInTrajet = $this->findInternauteInTrajet($idTrajet);

		$qb = $this->getEntityManager()
			->createQueryBuilder()
		    ->select('user')
		    ->from('BackOfficeBundle:Internaute','user')
		    ->leftjoin('BackOfficeBundle:Inscription','ins', 'WITH', 'ins.internaute=user')
		    ->where('user.id != :idConducteur')
		    ->andWhere('ins.trajet != :idTrajet OR ins.trajet is NULL')
			->setParameter('idTrajet', $idTrajet)
			->setParameter('idConducteur', $idConducteur);

		for ($i=0; $i < count($userInTrajet); $i++)
			$qb->andWhere('user.id != :idUserInTrajet')->setParameter('idUserInTrajet',$userInTrajet[$i]["id"]);

		return $qb;
	}
}
