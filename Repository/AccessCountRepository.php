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
}
