<?php

namespace App\Repository;

use App\Entity\PackAleatorio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method PackAleatorio|null find($id, $lockMode = null, $lockVersion = null)
 * @method PackAleatorio|null findOneBy(array $criteria, array $orderBy = null)
 * @method PackAleatorio[]    findAll()
 * @method PackAleatorio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PackAleatorioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PackAleatorio::class);
    }

    // /**
    //  * @return PackAleatorio[] Returns an array of PackAleatorio objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?PackAleatorio
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
