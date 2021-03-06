<?php

namespace KeurGuiImmoBundle\Repository;

/**
 * BienRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BienRepository extends \Doctrine\ORM\EntityRepository
{
    public function chercherBien($localiteBien,$typeBien,$prix){
        $qbBien =  $this->createQueryBuilder('b');
        $qbBien->join('b.localite','l')
                ->join('b.typeBien','t')
                ->addSelect('l')
                ->addSelect('t')
                ->WHERE('l.id= :idLoc OR t.id= :idType OR b.prixLocation BETWEEN :prixMin AND :prixMax')
                ->setParameters(array('idLoc'=>$localiteBien,'idType'=>$typeBien,'prixMin'=>$prix-10000, 'prixMax'=>$prix+10000));

                return $qbBien->getQuery()->getResult();
    }
}
