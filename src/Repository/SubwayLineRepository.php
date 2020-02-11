<?php

namespace App\Repository;

use App\Entity\SubwayLine;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SubwayLine|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubwayLine|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubwayLine[]    findAll()
 * @method SubwayLine[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubwayLineRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubwayLine::class);
    }

    // /**
    //  * @return SubwayLine[] Returns an array of SubwayLine objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SubwayLine
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
