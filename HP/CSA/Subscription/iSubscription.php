<?php
	namespace HPCSA\Subscription;
	interface iSubscription extends \HPCSA\iHPCSACommunication
	{
		const URL_GET_SUBSCRIPTION_DETAILS = 'catalog/<catalog_id>/subscription/<subscription_id>?userIdentifier=<user_id>';
		const URL_LIST_REQUEST_IN_CATALOG = 'catalog/<catalog_id>/request?userIdentifier=<user_id>';
		const URL_LIST_SUBSCRIPTION_IN_CATALOG = 'catalog/<catalog_id>/subscription?userIdentifier=<user_id>';
		const URL_LIST_SUBSCRIPTION_IN_CATALOG_BY_PERSON = 'user/mysubscription?userIdentifier=<admin_id>&requestor=<user_name>&scope=view';
	}
?>