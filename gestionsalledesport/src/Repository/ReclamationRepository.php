<?php

namespace App\Repository;

use App\Entity\Reclamation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Reclamation>
 *
 * @method Reclamation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Reclamation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Reclamation[]    findAll()
 * @method Reclamation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReclamationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamation::class);
    }

    public function save(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Reclamation $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    
        ////////////////////////////////////////////////////////////////////////////////
        public function findReclamation($Value, $order)
        {
            $em = $this->getEntityManager();
            if ($order == 'DESC') {
                $query = $em->createQuery(
                    'SELECT r FROM App\Entity\Reclamation r where  r.Nom like :suj or  r.Email  like :suj order by r.id DESC '
                );
                $query->setParameter('suj', $Value . '%');
            } else {
                $query = $em->createQuery(
                    'SELECT r FROM App\Entity\Reclamation r where  r.Nom like :suj or  r.Email like :suj order by r.id ASC '
                );
                $query->setParameter('suj', $Value . '%');
            }
            return $query->getResult();
        }
//    /**
//     * @return Reclamation[] Returns an array of Reclamation objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Reclamation
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
public function findByNom(string $Nom): array 
    {
        $qb = $this->createQueryBuilder('r');
    
        return $qb->where($qb->expr()->like('r.Nom', ':Nom'))
            ->setParameter('Nom', '%'.$Nom.'%')
            ->getQuery()
            ->getResult();
    }
   
 
    public function findByEmail()
    {
        return $this->createQueryBuilder('r')
            ->orderBy('r.Email', 'ASC')
            ->getQuery()
            ->getResult()
        ;
    }
}

