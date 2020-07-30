<?php

namespace App\Repository;

use App\Entity\Wydarzenia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Wydarzenia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Wydarzenia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Wydarzenia[]    findAll()
 * @method Wydarzenia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class WydarzeniaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Wydarzenia::class);
    }

    // /**
    //  * @return Wydarzenia[] Returns an array of Wydarzenia objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('w.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Wydarzenia
    {
        return $this->createQueryBuilder('w')
            ->andWhere('w.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
