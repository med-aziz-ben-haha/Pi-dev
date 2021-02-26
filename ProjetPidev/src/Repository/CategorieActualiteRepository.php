<?php

namespace App\Repository;

use App\Entity\CategorieActualite;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CategorieActualite|null find($id, $lockMode = null, $lockVersion = null)
 * @method CategorieActualite|null findOneBy(array $criteria, array $orderBy = null)
 * @method CategorieActualite[]    findAll()
 * @method CategorieActualite[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CategorieActualiteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CategorieActualite::class);
    }

    // /**
    //  * @return CategorieActualite[] Returns an array of CategorieActualite objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CategorieActualite
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
