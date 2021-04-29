<?php

namespace App\Repository;

use App\Entity\TypeReclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method TypeReclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method TypeReclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method TypeReclamation[]    findAll()
 * @method TypeReclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TypeReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TypeReclamation::class);
    }

    // /**
    //  * @return TypeReclamation[] Returns an array of TypeReclamation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TypeReclamation
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */

    public function OrderByid()
    {
        return $this->createQueryBuilder('m')
            ->orderBy('m.id','DESC')
            ->getQuery()->getResult()
            ;

    }
    public function findByid($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.id = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'DESC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
    }
    public function Search($word){


        $qry=$this->createQueryBuilder('m')
            ->where('m.id LIKE :param')
            //      ->orwhere('m.id LIKE :param')
//            ->orwhere('m.typeReclamation LIKE :param')
//

            ->setParameter('param', '%'.$word.'%');
        return $qry->getQuery()->getResult();

    }
}
