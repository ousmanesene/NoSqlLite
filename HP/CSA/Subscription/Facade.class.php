<?php
	namespace HPCSA\Subscription;
	class Facade implements iSubscription
	{
		private $communication;
		private $userID;
		private $subscriptionObjectList;
		private $needles;
		
		public function __construct()
		{
			$this->communication = new \HPCSA\Communication();
			$this->userID = $this->communication->authenticate();
			$this->initNeedles();
		}
		
		public function getSubscriptions($catalog, $organization = '')
		{
			$replaces = array('<catalog_id>'=>$catalog->getId(), '<user_id>'=>$this->userID);
			$subscriptionIdList = $this->communication->query(self::URL_BASE.self::URL_LIST_SUBSCRIPTION_IN_CATALOG, $replaces, array('id'=>'/ServiceSubscriptionList/ServiceSubscription/id'));
			
			if (count($subscriptionIdList['id']) > 0)
			{
				foreach ($subscriptionIdList as $subscriptionId)
				{
					$replaces['<subscription_id>'] = $subscriptionId;
					$data = $this->communication->query(self::URL_BASE.self::URL_GET_SUBSCRIPTION_DETAILS, $replaces, $this->needles, array('subscription'=>'/SubscriptionList/subscription'));
					$this->subscriptionObjectList[] = \HPCSA\Factory::getObjectList($data);
				}
			}
			return ($this->subscriptionObjectList);
		}
		
		public function getSubscriptionsByPerson($admin_id, $personName)
		{
			$replaces = array('<admin_id>'=>$admin_id, '<user_name>'=>$personName);
			$data = $this->communication->query(self::URL_BASE.self::URL_LIST_SUBSCRIPTION_IN_CATALOG_BY_PERSON, $replaces, $this->needles[0], array('subscription'=>'/ServiceSubscriptionList/ServiceSubscription'));
			$detailedData = $this->getSubscriptionDetails(\ToolBox::cleanArray($data), $admin_id);
			$this->subscriptionObjectList = \HPCSA\Factory::getObjectList($detailedData);
			
			return ($this->subscriptionObjectList);
		}
		
		public function getSubscriptionDetails($data, $admin_id)
		{
			foreach ($data as $k1=>$subscriptions)
			{
				foreach ($subscriptions as $k2=>$infos)
				{
					$replaces = array('<catalog_id>'=>$infos['catalogId'], '<subscription_id>'=>$infos['id'], '<user_id>'=>$admin_id);
					$allDetails = $this->communication->query(self::URL_BASE.self::URL_GET_SUBSCRIPTION_DETAILS, $replaces, $this->needles[1], array('details'=>'/ServiceSubscription/optionModel/optionSets/options'));
					$details = $this->cleanOptions($allDetails['details']);
					$data[$k1][$k2]['options'] = $details;
				}
			}
			return ($data);
		}
		
		private function cleanOptions($allDetails)
		{
			$result = array();
			foreach ($allDetails as $option)
			{
				if ($option['isSelected'][0] == 'true')
				{
					unset($option['isSelected']);
					if (count($option['name']) == 1)
						$result[] = \ToolBox::cleanArray($option);
					else
					{
						for ($i = 0; $i < count($option['name']); $i++)
						{
							$name = isset($option['name'][1]) ? $option['name'][1] : null;
							$option2 = array('displayValue'=>$option['displayValue'][0],
											'name'=>$option['name'][$i],
											'displayName'=>$option['displayName'][$i],
											'value'=>$option['value'][$i],
											'recurrentFixedPrice'=>$option['recurrentFixedPrice'],
											'initialFixedPrice'=>$option['initialFixedPrice'],
											'initialUnitPrice'=>$option['initialUnitPrice'],
											'recurrentUnitPrice'=>$option['recurrentUnitPrice']
											);
							$result[] = $option2;
						}
					}
				}
			}
			
			return ($result);
		}
		
		private function initNeedles()
		{
			$this->needles[0]['id'] = '/ServiceSubscription/id';
			$this->needles[0]['startDate'] = '/ServiceSubscription/startDate';
			$this->needles[0]['submittedOn'] = '/ServiceSubscription/submittedOn';
			$this->needles[0]['description'] = '/ServiceSubscription/description';
			$this->needles[0]['detailedDescription'] = '/ServiceSubscription/detailedDescription';
			$this->needles[0]['name'] = '/ServiceSubscription/name';
			$this->needles[0]['displayName'] = '/ServiceSubscription/displayName';
			$this->needles[0]['catalogId'] = '/ServiceSubscription/catalogItem/catalog/id';
			$this->needles[0]['baseInitialFixedPrice'] = '/ServiceSubscription/basePrice[@xsi:type="initialPricingVO"]/fixedPrice';
			$this->needles[0]['baseInitialUnitPrice'] = '/ServiceSubscription/basePrice[@xsi:type="initialPricingVO"]/unitPrice';
			$this->needles[0]['baseRecurrentFixedPrice'] = '/ServiceSubscription/basePrice[@xsi:type="recurrentPricingVO"]/fixedPrice';
			$this->needles[0]['baseRecurrentUnitPrice'] = '/ServiceSubscription/basePrice[@xsi:type="recurrentPricingVO"]/unitPrice';
			$this->needles[0]['totalInitialFixedPrice'] = '/ServiceSubscription/totalPrice[@xsi:type="initialPricingVO"]/fixedPrice';
			$this->needles[0]['totalInitialUnitPrice'] = '/ServiceSubscription/totalPrice[@xsi:type="initialPricingVO"]/unitPrice';
			$this->needles[0]['totalRecurrentFixedPrice'] = '/ServiceSubscription/totalPrice[@xsi:type="recurrentPricingVO"]/fixedPrice';
			$this->needles[0]['totalRecurrentUnitPrice'] = '/ServiceSubscription/totalPrice[@xsi:type="recurrentPricingVO"]/unitPrice';
			
			$this->needles[1]['displayValue'] = '/options/displayName';
			$this->needles[1]['initialFixedPrice'] = '/options/pricing/fixedPrice';
			$this->needles[1]['initialUnitPrice'] = '/options/pricing/unitPrice';
			$this->needles[1]['recurrentFixedPrice'] = '/options/pricing/fixedPrice';
			$this->needles[1]['recurrentUnitPrice'] = '/options/pricing/unitPrice';
			$this->needles[1]['name'] = '/options/property/name';
			$this->needles[1]['displayName'] = '/options/property/displayName';
			$this->needles[1]['value'] = '/options/property/values/value';
			$this->needles[1]['isSelected'] = '/options/isSelected';
		}
	}
?>