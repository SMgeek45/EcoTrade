<?php

namespace App\Repository;

use App\Entity\auth;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method auth|null find($id, $lockMode = null, $lockVersion = null)
 * @method auth|null findOneBy(array $criteria, array $orderBy = null)
 * @method auth[]    findAll()
 * @method auth[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AuthRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Auth::class);
    }

    // /**
    //  * @return auth[] Returns an array of auth objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?auth
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
