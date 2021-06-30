<?php

namespace App\Repository;

use App\Entity\EntityC;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method EntityC|null find($id, $lockMode = null, $lockVersion = null)
 * @method EntityC|null findOneBy(array $criteria, array $orderBy = null)
 * @method EntityC[]    findAll()
 * @method EntityC[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntityCRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EntityC::class);
    }

    // /**
    //  * @return EntityC[] Returns an array of EntityC objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('e.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?EntityC
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
