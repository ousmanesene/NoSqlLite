<?php	
	class CouchDB
	{
		protected $couchParser;
		protected $url;
		protected $mCurl;
		
		public $lastResult = null;
		public $isConnected = false;
	
		public function __construct($url)
		{
			$this->mCurl = new MyCurl();
			$this->url = $url;
			//$this->couchParser = new CouchParser();
			try
			{
				//echo 'Trying to connect to couchDB', "\n";
				$this->isConnected = $this->connect();
				//echo 'Successfully connected to couchDB', "\n";
			}
			catch(CouchDBException $e){echo $e->connect(), "\n";}

		}
		
		private function connect()
		{
			$resultJson = $this->mCurl->myCurl($this->url);
			//echo $resultJson['content'], "\n";
			$result = json_decode($resultJson['content'], true);
			if ($result['couchdb'] === 'Welcome')
				return (true);
			else
				throw new CouchDBException();
		}
		
		public function getDatabases()
		{
			$url = $this->url.'_all_dbs';
			$resultJson = $this->mCurl->myCurl($url);
			echo $resultJson['content'], "\n";
			return(json_decode($resultJson['content'], true));
		}
		
		public function addDatabase($database)
		{
			$url = $this->url.$database;
			$resultJson = $this->mCurl->myCurl($url, 'PUT');
			echo $resultJson['content'], "\n";
			return(json_decode($resultJson['content'], true));
		}
		
		public function deleteDatabase($database)
		{
			$url = $this->url.$database;
			$resultJson = $this->mCurl->myCurl($url, 'DELETE');
			echo $resultJson['content'], "\n";
			return(json_decode($resultJson['content'], true));
		}
		
		public function getDatabase($database)
		{
			$url = $this->url.$database;
			$resultJson = $this->mCurl->myCurl($url);
			echo $resultJson['content'], "\n";
			return(json_decode($resultJson['content'], true));
		}
		
		public function create($database, $infos)
		{
			$url = $this->url.$database;
			$resultJson = $this->mCurl->myCurl($url.'/'.uniqid(), 'PUT', json_encode($infos));
			echo $resultJson['content'], "\n";
			$result = json_decode($resultJson['content'], true);
			$this->lastResult = $result;
			return($result);
		}
		
		public function read($database, $id)
		{
			$url = $this->url.$database;
			$resultJson = $this->mCurl->myCurl($url.'/'.$id, 'GET');
			echo $resultJson['content'], "\n";
			return(json_decode($resultJson['content'], true));
		}
		
		public function update($database, $id, $infos)
		{
			$url = $this->url.$database;
			$resultJson = $this->mCurl->myCurl($url.'/'.$id, 'PUT', json_encode($infos));
			echo $resultJson['content'], "\n";
			$result = json_decode($resultJson['content'], true);
			$this->lastResult = $result;
			return($result);
		}
		
		public function delete($database, $id, $rev)
		{
			$url = $this->url.$database;
			$resultJson = $this->mCurl->myCurl($url.'/'.$id.'?rev='.$rev, 'DELETE');
			echo $resultJson['content'], "\n";
			$result = json_decode($resultJson['content'], true);
			$this->lastResult = $result;
			return($result);
		}
		
		public function query($query)
		{
			$url = $this->url.$query;
			$resultJson = $this->mCurl->myCurl($url, 'GET');
			//echo $resultJson['content'], "\n";
			$result = json_decode($resultJson['content'], true);
			$this->lastResult = $result;
			return($result);
		}
	}
?>