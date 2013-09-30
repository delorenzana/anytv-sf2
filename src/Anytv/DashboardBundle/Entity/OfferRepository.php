<?php

namespace Anytv\DashboardBundle\Entity;

use Doctrine\ORM\EntityRepository;
//use Doctrine\ORM\Query\Expr;

/**
 * OfferRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class OfferRepository extends EntityRepository
{
    public function findAllOffers($page, $items_per_page, $order_by, $order, $keyword, $status, $category = null, $country = null)
    {
        $first_result = ($items_per_page * ($page-1));
        
        $query = $this->createQueryBuilder('o');
        
        $where = "o.status = :status AND o.name LIKE :keyword";
        $params = array('status'=>$status, 'keyword'=>"%$keyword%");
                
        if($category)
        {
          $query = $query->join('o.offerCategories', 'oc');
          $where .= " AND oc.id = :category";
          $params['category'] = $category;
        }
        
        if($country)
        {
          $query = $query->join('o.countries', 'c');
          $where .= " AND c.id = :country";
          $params['country'] = $country;
        }
        
        $query = $query->where($where)
                       ->setParameters($params)
                        ->setFirstResult($first_result)
                       ->setMaxResults($items_per_page)
                       ->orderBy('o.'.$order_by, $order)
                       ->getQuery();
        
        return $query->getResult();
    }
    
    public function countAllOffers($keyword, $status, $category = null, $country = null)
    {    
        $query = $this->createQueryBuilder('o')
                      ->select('count(o.id)');
        
        $where = "o.status = :status AND o.name LIKE :keyword";
        $params = array('status'=>$status, 'keyword'=>"%$keyword%");
        
        if($category)
        {
          $query = $query->join('o.offerCategories', 'oc');
          $where .= " AND oc.id = :category";
          $params['category'] = $category;
        }
        
        if($country)
        {
          $query = $query->join('o.countries', 'c');
          $where .= " AND c.id = :country";
          $params['country'] = $country;
        }
        
        $query = $query->where($where)
                       ->setParameters($params)
                       ->getQuery();
        
        return $query->getSingleScalarResult();
    }
}
