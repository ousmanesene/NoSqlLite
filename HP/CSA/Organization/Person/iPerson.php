<?php
	namespace HPCSA\Organization\Person;
	interface iPerson
	{
		const URL_BASE = 'https://f1d001t02asw.itc.integra.fr:8444/csa/rest/';
		const URL_LIST_PERSON = 'organization/<organization_id>?scope=baseplusone&detail=basic&userIdentifier=<user_id>';
	}
?>