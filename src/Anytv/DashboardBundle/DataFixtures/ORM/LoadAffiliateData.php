<?php

namespace Anytv\DashboardBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Anytv\DashboardBundle\Entity\Affiliate;
use Anytv\DashboardBundle\Entity\AffiliateUser;

class LoadAffiliateData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        //return;
        
        $base = 'https://api.hasoffers.com/Api?';
 
        $params = array(
	  'Format' => 'json'
	  ,'Target' => 'Affiliate'
	  ,'Method' => 'findAll'
          ,'contain' => array('AffiliateUser')
          ,'sort' => array('id' => 'DESC')
	  ,'Service' => 'HasOffers'
	  ,'Version' => 2
	  ,'NetworkId' => 'mmotm'
	  ,'NetworkToken' => 'NETjE4MoLg7NarETCDruHecVmgLHbN'
	  ,'limit' => 50000
        );
 
        $url = $base . http_build_query( $params );
 
        $result = file_get_contents( $url );
        
        $affiliates_result = (array) json_decode( $result );
        $affiliates_response = (array) $affiliates_result['response'];
        $affiliates_data = (array) $affiliates_response['data'];
        $affiliates_data = (array) $affiliates_data['data'];
        
        foreach($affiliates_data as $affiliate_data)
        {
          $affiliate_object = $affiliate_data->Affiliate;
          $affiliate_users_object = $affiliate_data->AffiliateUser;
          
          $affiliate = new Affiliate();
          $affiliate->setAffiliateId($affiliate_object->id);
          $affiliate->setCompany($affiliate_object->company);
          $affiliate->setAddress1($affiliate_object->address1);
          $affiliate->setAddress2($affiliate_object->address2);
          $affiliate->setCity($affiliate_object->city);
          $affiliate->setRegion($affiliate_object->region);
          
          if($this->hasReference('country_'.$affiliate_object->country))
          {
            $affiliate->setCountry($this->getReference('country_'.$affiliate_object->country)); 
          } 
          
          $affiliate->setOther($affiliate_object->other);
          $affiliate->setZipcode($affiliate_object->zipcode);
          $affiliate->setPhone($affiliate_object->phone);
          $affiliate->setFax($affiliate_object->fax);
          $affiliate->setSignupIp($affiliate_object->signup_ip);
          $affiliate->setDateAdded(new \DateTime($affiliate_object->date_added));
          $affiliate->setStatus($affiliate_object->status);
          $affiliate->setWantsAlerts($affiliate_object->wants_alerts);
          $affiliate->setPaymentMethod($affiliate_object->payment_method);
          $affiliate->setPaymentTerms($affiliate_object->payment_terms);
          $affiliate->setW9Filed($affiliate_object->w9_filed);
          $affiliate->setReferralId($affiliate_object->referral_id);
          $affiliate->setAffiliateTierId($affiliate_object->affiliate_tier_id);
          
          $manager->persist($affiliate);
          
          $this->addReference('affiliate_'.$affiliate_object->id, $affiliate);
          
          foreach($affiliate_users_object as $affiliate_user_object)
          {
            $affiliate_user = new AffiliateUser(); 
            $affiliate_user->setAffiliateUserId($affiliate_user_object->id);
            $affiliate_user->setAffiliateId($affiliate_user_object->affiliate_id);
            $affiliate_user->setEmail($affiliate_user_object->email);
            $affiliate_user->setTitle($affiliate_user_object->title);
            $affiliate_user->setFirstName($affiliate_user_object->first_name);
            $affiliate_user->setLastName($affiliate_user_object->last_name);
            $affiliate_user->setPhone($affiliate_user_object->phone);
            $affiliate_user->setCellPhone($affiliate_user_object->cell_phone);
            $affiliate_user->setSalt($affiliate_user_object->salt);
            $affiliate_user->setStatus($affiliate_user_object->status);
            $affiliate_user->setIsCreator($affiliate_user_object->is_creator);
            $affiliate_user->setAccess($affiliate_user_object->access);
            $affiliate_user->setJoinDate(new \DateTime($affiliate_user_object->join_date));
            $affiliate_user->setModified(new \DateTime($affiliate_user_object->modified));
            $affiliate_user->setLastLogin(new \DateTime($affiliate_user_object->last_login));
            $affiliate_user->setPermissions($affiliate_user_object->permissions);
            $affiliate_user->setWantsAlerts($affiliate_user_object->wants_alerts);
            
            $manager->persist($affiliate_user);
          }
        }

        $manager->flush();
    }
    
    /**
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 30; // the order in which fixtures will be loaded
    }
}
