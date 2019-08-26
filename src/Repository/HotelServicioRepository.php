<?php

namespace App\Repository;

use App\Entity\HotelServicio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method HotelServicio|null find($id, $lockMode = null, $lockVersion = null)
 * @method HotelServicio|null findOneBy(array $criteria, array $orderBy = null)
 * @method HotelServicio[]    findAll()
 * @method HotelServicio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HotelServicioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HotelServicio::class);
    }

    // /**
    //  * @return HotelServicio[] Returns an array of HotelServicio objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('h.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?HotelServicio
    {
        return $this->createQueryBuilder('h')
            ->andWhere('h.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
