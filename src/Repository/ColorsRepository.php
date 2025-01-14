<?php

namespace App\Repository;

use App\Entity\Colors;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Colors>
 *
 * @method Colors|null find($id, $lockMode = null, $lockVersion = null)
 * @method Colors|null findOneBy(array $criteria, array $orderBy = null)
 * @method Colors[]    findAll()
 * @method Colors[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ColorsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Colors::class);
    }

    public function add(Colors $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Colors $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAtColumn(bool $includeUnavailableProducts = false): array
    {
        $qb = $this->createQueryBuilder('c')
            ->select('c.color')
            ->orderBy('c.id', 'ASC');

        $query = $qb->getQuery();

        return $query->execute();
    }

//    /**
//     * @return Colors[] Returns an array of Colors objects
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

//    public function findOneBySomeField($value): ?Colors
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
