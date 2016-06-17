<?php
	namespace HPCSA;
	interface iHPCSACommunication
	{
		const AUTH_LABEL_USERNAME = 'j_username';
		const AUTH_LABEL_PASSWORD = 'j_password';
		const AUTH_VALUE_USERNAME = 'admin';
		const AUTH_VALUE_PASSWORD = 'cloud';
		const ORGANIZATION_NAME = 'CSA-Provider';
		const USER_NAME = 'admin';
		const COOKIE = 'HPCSACookie.txt';
		
		const URL_BASE = 'https://f1d001t02asw.itc.integra.fr:8444/csa/rest/';
		const URL_AUTH = 'https://f1d001t02asw.itc.integra.fr:8444/csa/j_spring_security_check';
		const URL_LOGIN = 'login/<organization_name>/<user_name>';
		const URL_GET_REQUEST_DETAILS = '/catalog/<catalog_id>/request/<request_id>?userIdentifier=<user_id>';
	}
?>