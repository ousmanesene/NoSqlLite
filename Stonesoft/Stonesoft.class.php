<?php
	class  Stonesoft
	{
		private $curl;
		
		public function __construct()
		{
			$this->curl = new MyCurl(true);
			$this->curl->setMyCookie('cookie.txt');
			$this->curl->setContentType('Content-type: application/json');
		}
		
		public function __destruct()
		{
		
		}
		
		public function login()
		{
			$url = 'http://f1d001t03asu.itc.integra.fr:8082/5.6/login?authenticationkey=eBlbLSyCoCnyjrdxRDS60001';
			$result = $this->curl->myCurl($url, 'POST');
			
			return ($result['content']);
		}
		
		public function logout()
		{
			
		}
		
		public function addHost($newHost)
		{
			echo $newHost;
			$url = 'http://f1d001t03asu.itc.integra.fr:8082/5.6/elements/host?authenticationkey=eBlbLSyCoCnyjrdxRDS60001';
			$result = $this->curl->myCurl($url, 'POST', $newHost);
			print_r($result);
			return ($result['content']);
		}
		
		public function listHost()
		{
			//$url = 'http://f1d001t03asu.itc.integra.fr:8082/5.6/elements/host?authenticationkey=eBlbLSyCoCnyjrdxRDS60001';
			$url = 'http://f1d001t03asu.itc.integra.fr:8082/5.6/elements/host/12';
			$result = $this->curl->myCurl($url);
			
			return ($result['content']);
		}
		
		public function listGroup()
		{
			$url = 'http://f1d001t03asu.itc.integra.fr:8082/5.6/elements/group/127';
			$result = $this->curl->myCurl($url);
			
			return ($result['content']);
		}
		
		public function readHost()
		{
		
		}
		
		public function updateHost()
		{
		
		}
	}
?>