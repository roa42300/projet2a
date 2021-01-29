<?php

namespace App\Repository;

use App\Entity\DeletAcces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DeletAcces|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeletAcces|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeletAcces[]    findAll()
 * @method DeletAcces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeletAccesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeletAcces::class);
    }

    // /**
    //  * @return DeletAcces[] Returns an array of DeletAcces objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DeletAcces
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
