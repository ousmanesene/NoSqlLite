<?php
	namespace HPCSA;
	class Communication implements iHPCSACommunication
	{
		private $curl;
		
		public function __construct()
		{
			$this->curl = new \MyCurl(true, true);
			$this->curl->setMyCookie(self::COOKIE);
			$this->curl->setCredential(self::AUTH_VALUE_USERNAME, self::AUTH_VALUE_PASSWORD);
			$auth = array(self::AUTH_LABEL_USERNAME=>self::AUTH_VALUE_USERNAME, self::AUTH_LABEL_PASSWORD=>self::AUTH_VALUE_PASSWORD);
			//echo self::URL_AUTH;
			$status = $this->curl->authenticate(self::URL_AUTH, $auth);
			if ($status['http_code'] !== 200)
				throw new \Exception('Unable to authenticate: http code received is '.$status['http_code']."\n\n".$status['content']);
			//else
				//echo "Successfully authenticated", "\n\n";
		}
		
		public function authenticate()
		{
			// Getting User Identifier
			$replaces = array('<organization_name>'=>self::ORGANIZATION_NAME, '<user_name>'=>self::USER_NAME);
			$needles = array('id'=>'/person/id');
			$userIdentifierArr = $this->getCSAUrl(self::URL_BASE.self::URL_LOGIN, $replaces, $needles, $this->curl);
			
			return ($userIdentifierArr['id'][0]);
		}
		
		public function query($url, $replaces, $needles, $group = null)
		{
			return ($this->getCSAUrl($url, $replaces, $needles, $group));
		}
		
		public function getCSAUrl($url, $replaces, $needles, $group = null)
		{
			$result = array();
			
			foreach ($replaces as $key=>$value)
				$url = str_replace($key, $value, $url);
			//echo $url, "\n";
			$content = $this->curl->myCurl($url);
			//print_r($content);
			if (is_array($group))
				$result = \XMLHarvester::parseAndGroupByNode($content['content'], $needles, $group);
			else
				$result = \XMLHarvester::parse($content['content'], $needles);

			return ($result);
		}
		
	}
?>