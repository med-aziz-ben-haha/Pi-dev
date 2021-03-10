<?php

namespace App\Repository;

use App\Entity\SoinMP;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SoinMP|null find($id, $lockMode = null, $lockVersion = null)
 * @method SoinMP|null findOneBy(array $criteria, array $orderBy = null)
 * @method SoinMP[]    findAll()
 * @method SoinMP[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SoinMPRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SoinMP::class);
    }

    // /**
    //  * @return SoinMP[] Returns an array of SoinMP objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SoinMP
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
    public function search($titre){

        return $this->createQueryBuilder('s')
            ->where('s.titreSoinMP LIKE :titre Or s.descriptionSoinMP LIKE :description Or s.adresseSoinMP LIKE :adresse  ')
            ->setParameters(array('titre'=>'%'.$titre.'%','description'=>'%'.$titre.'%','adresse'=>'%'.$titre.'%'))
            ->getQuery()
            ->execute();
    }

    public function searchs($titre,$idCategorie){

        return $this->createQueryBuilder('s')
            ->where('s.titreSoinMP LIKE :titre Or s.descriptionSoinMP LIKE :description Or s.adresseSoinMP LIKE :adresse  ')
            ->andWhere('s.CategorieSoinMP = :categorieid')
            ->setParameters(array('titre'=>'%'.$titre.'%','description'=>'%'.$titre.'%','adresse'=>'%'.$titre.'%','categorieid'=>$idCategorie))
            ->getQuery()
            ->execute();
    }

    public function findAlltri()
    {
        return $this->findBy(array(), array('titreSoinMP' => 'ASC'));
    }

    public function findAlltriDESC()
    {
        return $this->findBy(array(), array('titreSoinMP' => 'DESC'));
    }

}
