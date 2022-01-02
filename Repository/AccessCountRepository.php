<?php

namespace Plugin\TestEccubePlugin\Repository;

use Plugin\TestEccubePlugin\Entity\AccessCount;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AccessCount|null find($id, $lockMode = null, $lockVersion = null)
 * @method AccessCount|null findOneBy(array $criteria, array $orderBy = null)
 * @method AccessCount[]    findAll()
 * @method AccessCount[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AccessCountRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AccessCount::class);
    }

    // /**
    //  * @return AccessCount[] Returns an array of AccessCount objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AccessCount
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
