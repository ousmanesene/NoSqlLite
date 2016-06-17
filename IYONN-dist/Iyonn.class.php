<?php
    //1915
    class Iyonn{
        protected $url;
		protected $mCurl;
        
		public $lastResult = null;
		public $isConnected = false;

        public function __construct($url){
			$this->mCurl = new MyCurl();
			$this->url = $url;
			try{
				$this->isConnected = $this->connect();
			}
			catch(Exception $e){
            }
        }
        
        public function postUser($action, $data, $user = 'anonymous'){
            $result = $this->post('data/rest/users?action='.$action.'&user='.$user, $data);
            
            return $result;
        }
        
        public function getAllArticlesByIp($ip){
            $result = array();
            
            $city = $this->getCityFromIp($ip);
            
            return $this->getAllArticlesByCity($city);
        }
        
        public function getAllArticlesByCity($city){
            $result = array();
            
            $result = $this->query('data/rest/users?action=getAllArticles&user=anonymous&city='.$city);
            
            return $this->getValues($result['rows'], 'articles');
        }
        
        public function renderView($name, $data){
            Mustache_Autoloader::register();
            $mustache = new Mustache_Engine(array(
                'cache' => dirname(__FILE__).'/tmp/cache/mustache',
                'cache_lambda_templates' => true,
                'loader' => new Mustache_Loader_FilesystemLoader('templates'),
                'escape' => function($value) {
                    return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                },
                'charset' => 'utf-8',
                'logger' => new Mustache_Logger_StreamLogger('./tmp/errors.html'),
                'strict_callables' => true,
                'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
            ));

            $tpl = $mustache->loadTemplate($name);
            return $tpl->render($data);
        }
        
        public function encode_array(&$value, $key){
            $value = utf8_encode($value);
        }
        
        public function decode_array(&$value, $key){
            $value = utf8_decode($value);
        }
        
        public function debug($var){
            echo '<pre>';
            print_r($var);
            echo '</pre>';
        }
		
		private function connect()
		{
			$resultJson = $this->mCurl->myCurl($this->url);
			//echo $resultJson['content'], "\n";
			$result = json_decode($resultJson['content'], true);
			if ($result['IYONN'] === 'Welcome')
				return (true);
			else
				throw new Exception();
		}
        
        private function setCache(){
            
        }
        
        private function getCache(){
            
        }
        
        private function getCityFromIp($ip){
            $freegeoip = false; //@file_get_contents("http://freegeoip.net/json/$ip");
            if ($freegeoip === false){
                return 'paris';
            }
            $details = (array) json_decode($freegeoip, true);
            if (empty($details['city'])){
                return 'paris';
            }
            
            return strtolower($details['city']);
        }
        
        private function getValues($rows, $key){
            $result = array();
            if (!is_array($rows)){
                return $result;
            }
            foreach ($rows as $data){
                $tag = $data['value']['tag'];
                array_walk($data['value'], array($this, 'decode_array'));
                $data['value']['tag'] = $tag;
                $result[$key][] = $data['value'];
            }
            
            return $result;
        }
        
		private function query($query){
			$url = $this->url.'/'.$query;
            //echo $url, '<br/>';
			$resultJson = $this->mCurl->myCurl($url, 'GET');
			//echo $resultJson['content'], '<br/>';
			$result = (array) json_decode($resultJson['content'], true);
			$this->lastResult = $result;
			return($result);
		}
        
        private function post($query, $data){
			$url = $this->url.'/'.$query;
            //echo $url, '<br/>';
            $object = array('object'=>json_encode($data));
			$resultJson = $this->mCurl->myCurl($url, 'POST', $object);
			//echo $resultJson['content'], '<br/>';
			$result = (array) json_decode($resultJson['content'], true);
			$this->lastResult = $result;
			return($result);
        }
    }
?>