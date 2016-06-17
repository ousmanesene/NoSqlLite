<?php
	class Billing
	{
		private $billList;
		private $db;
		
		public function __construct($user)
		{
			$this->db = new CouchDBAttachment('http://127.0.0.1:5984/');
		}
		
		public function getNewBills()
		{
			try
			{
				$facade = new \HPCSA\Facade();
				$subscriptions = $facade->getAllSubscription();
				$this->save($subscriptions);
				return ($subscriptions);
			}
			catch (Exception $e){echo $e;}
		}
		
		private function save($subscriptions)
		{
			$billsId = $this->getBillsId();
			$couch = $this->db;
			if ($couch->isConnected == '454566')
			{
				foreach ($subscriptions as $organization=>$persons)
				{
					foreach ($persons as $person=>$objects)
					{
						foreach ($objects as $subscription)
						{
							if (!in_array($subscription->getId(), $billsId))
							{
								$details = array('organization'=>$organization,
											'person'=>$person,
											'billId'=>$subscription->getId(),
											'submittedOn'=>$subscription->getSubmittedOn(),
											'startDate'=>$subscription->getStartDate(),
											'detailedDescription'=>$subscription->getDetailedDescription(),
											'name'=>$subscription->getName(),
											'displayName'=>$subscription->getDisplayName(),
											'catalogId'=>$subscription->getCatalogId(),
											'options'=>$subscription->getOptions()
										);
								$couch->create('bills', $details);
								$this->generatePdf($subscription, $organization, $person, $couch);
							}
							else
								echo $subscription->getId() . " is already in db!\n";
						}
					}
				}
			}
		}
		
		private function getBillsId()
		{
			$billsId = array();
			$result = $this->db->query('bills/_design/bill/_view/listBillId');
			
			foreach ($result['rows'] as $row)
				$billsId[$row['id']] = $row['value'];
			
			return ($billsId);
		}
		
		private function generatePdf($subscription, $organization, $person, $couch)
		{
			// Create PDF
			$odf = new odf("docs/template.odt");

			$odf->setVars('organization', $organization, false, 'UTF-8');
			$odf->setVars('person', $person, false, 'UTF-8');
			$odf->setVars('billId', $subscription->getId(), false, 'UTF-8');
			$odf->setVars('submittedOn', $subscription->getSubmittedOn(), false, 'UTF-8');
			$odf->setVars('startDate', $subscription->getStartDate(), false, 'UTF-8');
			$odf->setVars('detailedDescription', $subscription->getDetailedDescription(), false, 'UTF-8');
			$odf->setVars('displayName', $subscription->getDisplayName(), false, 'UTF-8');
			$odf->setVars('catalogId', $subscription->getCatalogId(), false, 'UTF-8');
			
			$options = $odf->setSegment('options');
			foreach($subscription->getOptions() as $element) {
				$options->setVars('optionName', $element['displayName'], false, 'UTF-8');
				$options->setVars('optionValue', $element['displayValue'], false, 'UTF-8');
				$options->setVars('optionInitialFixedPrice', $element['optionInitialFixedPrice'][0], false, 'UTF-8');
				$options->setVars('optionInitialUnitPrice', $element['optionInitialUnitPrice'][0], false, 'UTF-8');
				$options->setVars('optionRecurrentFixedPrice', $element['optionRecurrentFixedPrice'][0], false, 'UTF-8');
				$options->setVars('optionRecurrentUnitPrice', $element['optionRecurrentUnitPrice'][0], false, 'UTF-8');
				$options->merge();
			}
			$odf->mergeSegment($options);
			// We export the file
			$odf->saveToDisk($subscription->getId().'.odt');
			system('unoconv -f pdf '.$subscription->getId().'.odt');
			system('rm '.$subscription->getId().'.odt');
			
			$attachment['path'] = '/home/osene/cloud/svn/csa/doc/Facturation/app/modules/HP/CSA/'.$subscription->getId().'.pdf';
			$attachment['name'] = $subscription->getId().'.pdf';
			echo 'Adding attachment to last document created ', "\n";
			$documentInfo = $couch->addAttachment('bills', $couch->lastResult['id'], $couch->lastResult['rev'], $attachment);
			
			system('rm '.$subscription->getId().'.pdf');
		}
	}
?>