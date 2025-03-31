<?php

namespace App\Repository;

use App\Entity\ContactA;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ContactA>
 *
 * @method ContactA|null find($id, $lockMode = null, $lockVersion = null)
 * @method ContactA|null findOneBy(array $criteria, array $orderBy = null)
 * @method ContactA[]    findAll()
 * @method ContactA[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ContactARepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ContactA::class);
    }

//    /**
//     * @return ContactA[] Returns an array of ContactA objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ContactA
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
