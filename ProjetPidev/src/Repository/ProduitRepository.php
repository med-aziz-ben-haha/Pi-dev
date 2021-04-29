<?php

namespace App\Repository;

use App\Entity\Produit;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;
use phpDocumentor\Reflection\Types\Array_;

/**
 * @method Produit|null find($id, $lockMode = null, $lockVersion = null)
 * @method Produit|null findOneBy(array $criteria, array $orderBy = null)
 * @method Produit[]    findAll()
 * @method Produit[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProduitRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Produit::class);
    }

    /**
     * @return Query
     */
    public function findByparapharmacie( $id):Query
    {
        return $this->createQueryBuilder('p')
            ->andWhere('IDENTITY(p.parapharmacie) = :id')
            ->setParameter('id', $id)
            ->getQuery()

            ;
    }

    /**
     * @return Query
     */
    public function findBycategorie( $id):Query
    {
        return $this->createQueryBuilder('p')
            ->andWhere('IDENTITY(p.categorie) = :id')
            ->setParameter('id', $id)
            ->getQuery()

            ;
    }

    /**
     * @return Query
     */
    public function findByNomProduitPara( $id , $nomProduit):Query
    {
        return $this->createQueryBuilder('p')
            ->andWhere('IDENTITY(p.parapharmacie) = :id')
            ->andWhere('p.nomProduit = :nomProduit')
            ->setParameter('id', $id)
            ->setParameter('nomProduit', $nomProduit)
            ->getQuery()

            ;
    }

    /**
     * @return Query
     */
    public function findByNomProduitCat( $id , $nomProduit):Query
    {
        return $this->createQueryBuilder('p')
            ->andWhere('IDENTITY(p.categorie) = :id')
            ->andWhere('p.nomProduit = :nomProduit')
            ->setParameter('id', $id)
            ->setParameter('nomProduit', $nomProduit)
            ->getQuery()

            ;
    }

    /**
     * @return Query
     */
    public function findAllProduit( ):Query
    {
        return $this->createQueryBuilder('p')

            ->getQuery()

            ;
    }









    // /**
    //  * @return Produit[] Returns an array of Produit objects
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
    public function findOneBySomeField($value): ?Produit
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
