<?php

namespace App\Repository;

use App\Entity\Postt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Postt|null find($id, $lockMode = null, $lockVersion = null)
 * @method Postt|null findOneBy(array $criteria, array $orderBy = null)
 * @method Postt[]    findAll()
 * @method Postt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PosttRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Postt::class);
    }

    // /**
    //  * @return Postt[] Returns an array of Postt objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Postt
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
