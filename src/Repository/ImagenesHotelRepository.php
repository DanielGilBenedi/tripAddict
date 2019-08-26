<?php

namespace App\Repository;

use App\Entity\ImagenesHotel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method ImagenesHotel|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImagenesHotel|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImagenesHotel[]    findAll()
 * @method ImagenesHotel[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImagenesHotelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImagenesHotel::class);
    }

    // /**
    //  * @return ImagenesHotel[] Returns an array of ImagenesHotel objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImagenesHotel
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
