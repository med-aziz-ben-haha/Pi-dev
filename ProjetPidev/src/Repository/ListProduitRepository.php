<?php

namespace App\Repository;

use App\Entity\ListProduit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ListProduit|null find($id, $lockMode = null, $lockVersion = null)
 * @method ListProduit|null findOneBy(array $criteria, array $orderBy = null)
 * @method ListProduit[]    findAll()
 * @method ListProduit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ListProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ListProduit::class);
    }

    // /**
    //  * @return ListProduit[] Returns an array of ListProduit objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('l.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ListProduit
    {
        return $this->createQueryBuilder('l')
            ->andWhere('l.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
