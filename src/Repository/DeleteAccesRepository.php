<?php

namespace App\Repository;

use App\Entity\DeleteAcces;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DeleteAcces|null find($id, $lockMode = null, $lockVersion = null)
 * @method DeleteAcces|null findOneBy(array $criteria, array $orderBy = null)
 * @method DeleteAcces[]    findAll()
 * @method DeleteAcces[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DeleteAccesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DeleteAcces::class);
    }

    // /**
    //  * @return DeleteAcces[] Returns an array of DeleteAcces objects
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
    public function findOneBySomeField($value): ?DeleteAcces
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
