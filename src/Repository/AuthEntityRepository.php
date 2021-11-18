<?php

namespace App\Repository;

use App\Entity\AuthEntity;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AuthEntity|null find($id, $lockMode = null, $lockVersion = null)
 * @method AuthEntity|null findOneBy(array $criteria, array $orderBy = null)
 * @method AuthEntity[]    findAll()
 * @method AuthEntity[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuthEntityRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AuthEntity::class);
    }

    // /**
    //  * @return AuthEntity[] Returns an array of AuthEntity objects
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
    public function findOneBySomeField($value): ?AuthEntity
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
