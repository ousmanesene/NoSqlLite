<?php
	namespace HPCSA;
	class Facade
	{
		private $organizationObjectList;
		private $subscriptionObjectList;
		private $catalogObjectList;
		
		private $organizationFacade;
		private $subscriptionFacade;
		private $catalogFacade;
		
		public function __construct()
		{
			$this->organizationFacade = new \HPCSA\Organization\Facade();
			$this->subscriptionFacade = new \HPCSA\Subscription\Facade();
			$this->catalogFacade = new \HPCSA\Catalog\Facade();
			
			//$this->refresh();
		}
		
		public function getAllSubscription()
		{
			$result = array();
			$this->organizationObjectList = $this->organizationFacade->getOrganizations();
			foreach ($this->organizationObjectList['organization'] as $organization)
			{
				$persons = $organization->getPersons();
				$organizationName = $organization->getName();
				if (isset($persons['person']) && count($persons['person']) > 0)
				{
					foreach ($persons['person'] as $person)
					{
						$personName = $person->getName();
						$subscriptionList = $this->subscriptionFacade->getSubscriptionsByPerson($person->getId(), $personName);
						if (count($subscriptionList) > 0)
							$result[$organizationName][$personName] = $subscriptionList['subscription'];
					}
				}
			}
			
			return($result);
		}
		
		public function listCatalogsID($userIdentifier)
		{
			$replaces = array('<user_id>'=>$userIdentifier);
			$needles = array('id'=>'/CatalogList/catalog/id');
			$catalogs = HPCSAFactory::getCSAUrl(self::URL_BASE.self::URL_LIST_CATALOG, $replaces, $needles, $this->curl);
			print_r($catalogs['id']);
			
			return ($catalogs['id']);
		}
		
		public function listSubscriptionByCatalogID($userIdentifier, $catalogId)
		{
			$replaces = array('<user_id>'=>$userIdentifier, '<catalog_id>'=>$catalogId);
			$needles = array('id'=>'/ServiceSubscriptionList/ServiceSubscription/id');
			$subscriptions = HPCSAFactory::getCSAUrl(self::URL_BASE.self::URL_LIST_REQUEST_IN_CATALOG, $replaces, $needles, $this->curl);
			print_r($subscriptions['id']);
			$subscriptionsInfo = array();
			foreach ($subscriptions['id'] as $subscriptionId)
				$subscriptionsInfo[$subscriptionId] = $this->getSubscriptionInformation($userIdentifier, $catalogId, $subscriptionId);
			
			return ($subscriptionsInfo);
		}
		
		public function getSubscriptionInformation($userIdentifier, $catalogId, $subscriptionId)
		{
			$replaces = array('<user_id>'=>$userIdentifier, '<catalog_id>'=>$catalogId, '<subscription_id>'=>$subscriptionId);
			$needles = array('id'=>'/ServiceSubscription/id', 'create_date'=>'/ServiceSubscription/createdOn', 'name'=>'/ServiceSubscription/displayName', 'context'=>'/ServiceSubscription/artifactContext/displayName', 'currency'=>'/ServiceSubscription/pricingModel/currency/name');
			$informations = HPCSAFactory::getCSAUrl(self::URL_BASE.self::URL_GET_REQUEST_DETAILS, $replaces, $needles, $this->curl);
			
			return ($informations);
		}
		
		public function refresh()
		{
			$this->organizationObjectList = $this->organizationFacade->getOrganizations();
			$this->catalogObjectList = $this->catalogFacade->getCatalogs();
			$this->subscriptionObjectList = $this->subscriptionFacade->getSubscriptions($this->catalogObjectList['catalog'][0]);
		}
		
		public function getOrganizations(){return ($this->organizationObjectList);}
		public function getCatalogs(){return ($this->catalogObjectList);}
		public function getSubscription(){return ($this->subscriptionObjectList);}
	}
?>