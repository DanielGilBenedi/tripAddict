<?php

namespace App\Repository;

use App\Entity\Estancia;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Estancia|null find($id, $lockMode = null, $lockVersion = null)
 * @method Estancia|null findOneBy(array $criteria, array $orderBy = null)
 * @method Estancia[]    findAll()
 * @method Estancia[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstanciaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Estancia::class);
    }

    // /**
    //  * @return Estancia[] Returns an array of Estancia objects
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
    public function findOneBySomeField($value): ?Estancia
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
