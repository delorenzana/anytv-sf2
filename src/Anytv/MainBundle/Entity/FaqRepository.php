<?php

namespace Anytv\MainBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * FaqRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class FaqRepository extends EntityRepository
{
    public function findAllFaqs($page, $items_per_page, $order_by, $order)
    {
        $first_result = ($items_per_page * ($page-1));
                
        $query = $this->createQueryBuilder('f')
          ->setFirstResult($first_result)
          ->setMaxResults($items_per_page)
          ->orderBy('f.'.$order_by, $order)
          ->getQuery();
        
        return $query->getResult();
    }
    
    public function countAllFaqs()
    {    
        $query = $this->createQueryBuilder('f')
          ->select('count(f.id)')
          ->getQuery();
        
        return $query->getSingleScalarResult();
    }
}
