<?php

namespace App\Repository;

use App\Entity\CentreMedical;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CentreMedical|null find($id, $lockMode = null, $lockVersion = null)
 * @method CentreMedical|null findOneBy(array $criteria, array $orderBy = null)
 * @method CentreMedical[]    findAll()
 * @method CentreMedical[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CentreMedicalRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CentreMedical::class);
    }

    // /**
    //  * @return CentreMedical[] Returns an array of CentreMedical objects
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
    public function findOneBySomeField($value): ?CentreMedical
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
