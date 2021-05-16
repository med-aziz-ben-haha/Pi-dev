<?php

namespace App\Repository;

use App\Entity\Ordonnance;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Ordonnance|null find($id, $lockMode = null, $lockVersion = null)
 * @method Ordonnance|null findOneBy(array $criteria, array $orderBy = null)
 * @method Ordonnance[]    findAll()
 * @method Ordonnance[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class OrdonnanceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ordonnance::class);
    }

    // /**
    //  * @return Ordonnance[] Returns an array of Ordonnance objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('o.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Ordonnance
    {
        return $this->createQueryBuilder('o')
            ->andWhere('o.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function OrderByDateQB()
    {
        return $this->createQueryBuilder('o')
            ->orderBy('o.date_ord','ASC')
            ->getQuery()->getResult()
            ;
    }

    public function SearchName($data)
    {
        return $this->createQueryBuilder('m')
            ->where('m.date_ord LIKE :data')->orWhere('m.contenu_ord Like :data ')
            ->setParameter('data', '%'.$data.'%')
            ->getQuery()->getResult()
            ;
    }
}
