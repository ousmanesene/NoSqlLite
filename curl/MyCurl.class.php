<?php
	class MyCurl
	{
		private $certificate;
		private $cookie;
		public $cHeader;
		private $ssl;
		private $useCookie;
		private $verbose;
		private $credential;
		
		public function __construct($useCookie = false, $ssl = false, $verbose = false)
		{
			$this->verbose = $verbose;
			$this->useCookie = $useCookie;
			$this->certificate = null;
			$this->cookie = null;
			$this->credential = array();
			$this->ssl = $ssl;
			$this->cHeader[] = "Connection: keep-alive";
			$this->cHeader[] = "Accept-Language: fr,fr-fr;q=0.8,en-us;q=0.5,en;q=0.3";
			//$this->cHeader[] = "Accept-Encoding: gzip, deflate";
			$this->cHeader[] = "Accept: application/xml,application/xhtml+xml,text/html,application/json;q=0.9,*/*;q=0.8";
		}
	
		public function getCertificate(){ return ($this->certificate);}
		public function setCertificate($certificate){$this->certificate = $certificate;}
	
		public function myCurl($url, $action='GET', $body='', $file=null)
		{
			$curl = curl_init();
			$this->setSslDefaults($curl);
			$this->setDefaults($curl, $url);
			$this->setCurlCookie($curl);
			$this->setVerbose($curl);
			//$this->setAuth($curl);
			if ($action !== 'GET')
			{
				curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $action);
				curl_setopt($curl, CURLOPT_POSTFIELDS, $body);
				curl_setopt($curl, CURLOPT_POST, true);
				if ($file != null)
					curl_setopt($curl, CURLOPT_POSTFIELDS, array('@'.$file));
			}
			$result['content'] = curl_exec ($curl);
			$result['http_code'] = curl_getinfo($curl, CURLINFO_HTTP_CODE);
			
			if (FALSE === $result['content'])
				throw new Exception(curl_error($curl), curl_errno($curl));
			curl_close($curl);
			return ($result);
		}
		
		public function authenticate($url, $auth)
		{
			$curl = curl_init();
			$postData = array();
			
			foreach ($auth as $key=>$value)
				$postData[] .= $key.'='.$value;
			$this->setSslDefaults($curl);
			curl_setopt ($curl, CURLOPT_POSTFIELDS, implode('&', $postData));
			$this->setDefaults($curl, $url);
			$this->setCurlCookie($curl);
			$this->setVerbose($curl);
			$result['content'] = curl_exec ($curl);
			$result['http_code'] = curl_getinfo($curl, CURLINFO_HTTP_CODE);
			curl_close ($curl);

			return $result;
		}
	
		public function setAuth($curl)
		{
			curl_setopt($curl, CURLOPT_USERPWD, implode(':', $this->credential));
		}
		
		public function setCredential($username, $password)
		{
			$this->credential = array('user'=>$username, 'pass'=>$password);
		}
		
		public function setMyCookie($cookie)
		{
			$this->cookie = $cookie;
			if ($this->cookie !== null)
			{
				if (file_exists($this->cookie))
				{
					if (!is_writable($this->cookie))
						throw new Exception("Can't write CURLOPT_HEADER to ".$this->cookie." cookie file, curlange file permission to 777 or remove read only for windows.");
				}
				else 
				{
					touch($this->cookie);
					if (!is_writable($this->cookie))
						throw new Exception("Can't write to ".$this->cookie." cookie file, curlange file permission to 777 or remove read only for windows.");
				}
			}
		}
		
		private function setDefaults($curl, $url)
		{
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_HEADER, 0);
			curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($curl, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64; rv:25.0) Gecko/20100101 Firefox/25.0');
			curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
			curl_setopt($curl, CURLOPT_HTTPPROXYTUNNEL, 0);
			curl_setopt($curl, CURLOPT_PROXY, null);
			curl_setopt($curl, CURLOPT_HTTPHEADER, $this->cHeader);
		}
		
		private function setSslDefaults($curl)
		{
			if ($this->ssl)
			{
				curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
				curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
			}
		}
		
		private function setCurlCookie($curl)
		{
			if ($this->useCookie)
			{
				curl_setopt($curl, CURLOPT_COOKIEJAR, $this->cookie);
				curl_setopt($curl, CURLOPT_COOKIEFILE, $this->cookie);
			}
		}
		
		private function setVerbose($curl)
		{
			if ($this->verbose)
				curl_setopt($curl, CURLOPT_VERBOSE, 1);
		}
		
		public function setContentType($type)
		{
			$this->cHeader[] = $type;
		}
		
		public function getHeader()
		{
			return ($this->cHeader);
		}
		
		public function setHeader($header)
		{
			$this->cHeader = $header;
		}
		
		public function open_https_url($url, $refer = "", $usecookie = false, $post = false, $showHeader = 0)
		{
			if ($usecookie) {
       
        if (file_exists($usecookie)) {
       
            if (!is_writable($usecookie)) {
               
                return "Can't write to $usecookie cookie file, change file permission to 777 or remove read only for windows.";
            }
        } else {
            $usecookie = "cookie.txt";
            touch($usecookie);
            if (!is_writable($usecookie)) {
                return "Can't write to $usecookie cookie file, change file permission to 777 or remove read only for windows.";
            }
        }
   
    }

    $ch = curl_init();
   
    curl_setopt($ch, CURLOPT_URL, $url);
    
    $cHeader[] = "Connection: keep-alive";
    $cHeader[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
   
   curl_setopt($ch, CURLOPT_HTTPHEADER, $cHeader); 
   
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
   
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
   
    curl_setopt($ch, CURLOPT_HEADER, $showHeader);
    
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    
	if ($post)
		curl_setopt ($ch, CURLOPT_POSTFIELDS, "j_username=admin&j_password=cloud");
	else
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
   
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64; rv:25.0) Gecko/20100101 Firefox/25.0');
    
   
    if ($usecookie) {
        curl_setopt($ch, CURLOPT_COOKIEJAR, $usecookie);
       
        curl_setopt($ch, CURLOPT_COOKIEFILE, $usecookie);   
    }
   
    if ($refer != "") {
   
        curl_setopt($ch, CURLOPT_REFERER, $rCURLOPT_HEADERefer );
       
    }
   
			curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 0);
			curl_setopt($ch, CURLOPT_PROXY, null);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch, CURLOPT_VERBOSE, 1);
			$result['content'] = curl_exec ($ch);
			$result['http_code'] = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close ($ch);

			return ($result);
		}
	}
?>