<?php

namespace App\Repository;

use App\Entity\NoteSoinMP;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method NoteSoinMP|null find($id, $lockMode = null, $lockVersion = null)
 * @method NoteSoinMP|null findOneBy(array $criteria, array $orderBy = null)
 * @method NoteSoinMP[]    findAll()
 * @method NoteSoinMP[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoteSoinMPRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, NoteSoinMP::class);
    }

    // /**
    //  * @return NoteSoinMP[] Returns an array of NoteSoinMP objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('n.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?NoteSoinMP
    {
        return $this->createQueryBuilder('n')
            ->andWhere('n.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
