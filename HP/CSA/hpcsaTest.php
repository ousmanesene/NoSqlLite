<?php
	// Interfaces
	require_once('iHPCSACommunication.php');
	require_once('Subscription/iSubscription.php');
	require_once('Catalog/iCatalog.php');
	require_once('Organization/iOrganization.php');
	require_once('Organization/Person/iPerson.php');
	
	// Models
	require_once('model/Person.class.php');
	require_once('model/Organization.class.php');
	require_once('model/Catalog.class.php');
	require_once('model/Subscription.class.php');
	
	// Classes
	require_once('../../curl/MyCurl.class.php');
	require_once('../../XMLHarvester/XMLHarvester.class.php');
	require_once('../../Toolbox/Toolbox.class.php');
	require_once('../../odtPdf/library/odf.php');
	require_once('../../couchDB/CouchDBException.class.php');
	require_once('../../couchDB/CouchDB.class.php');
	require_once('../../couchDB/CouchDBAttachment.class.php');
	require_once('HPCSAFactory.class.php');
	require_once('HPCSACommunication.class.php');
	require_once('HPCSAFacade.class.php');
	require_once('Subscription/Facade.class.php');
	require_once('Catalog/Facade.class.php');
	require_once('Organization/Facade.class.php');
	require_once('Organization/Person/Facade.class.php');
	require_once('Billing/Billing.class.php');
	
	try
	{
		$facade = new \HPCSA\Facade();
		$subscriptions = $facade->getAllSubscription();
		print_r($subscriptions);
		$billing = new Billing('consumer');
		$billing->getNewBills();
 		/*$couch = new CouchDBAttachment('http://127.0.0.1:5984/');
		if ($couch->isConnected)
		{
			foreach ($subscriptions as $organization=>$persons)
			{
				foreach ($persons as $person=>$objects)
				{
					foreach ($objects as $subscription)
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
			}
		}*/
	}
	catch (Exception $e){echo $e;}
?>