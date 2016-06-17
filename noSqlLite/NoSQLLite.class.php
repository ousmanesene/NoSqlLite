<?php
	class NoSQLLite
	{
		private $dbFile;
		private $currentDb;
		private $sgbd;
		private $xml_sgbd;
		
		public function __construct($dbFile)
		{
			$this->currentDb = 'default';
			$this->dbFile = $dbFile;
			if (file_exists($dbFile))
				$this->init();
			else
			{
				touch($dbFile);
				$this->init();
			}
		}
		
		public function query($query)
		{
			$result = array();
			
			foreach($this->sgbd[$this->currentDb] as $id=>$document)
			{
				foreach ($query as $key=>$value)
				{
					if($key == '_id' && $value == $id)
						return ($this->sgbd[$this->currentDb][$id]);
					else if($document[$key] == $value)
						$result[$id] = $document;
				}
			}
			
			return ($result);
		}

		public function createDocument($document)
		{
			$idDoc = uniqid();
			$this->sgbd[$this->currentDb][$idDoc] = $document;
			$this->save();
		}
		
		public function updateDocument($id, $document)
		{
			$this->sgbd[$this->currentDb][$id] = $document;
			$this->save();
		}
		
		public function deleteDocument($id)
		{
			unset($this->sgbd[$this->currentDb][$id]);
			$this->save();
		}
	
		public function useDb($_name)
		{
			$name = trim($_name);
			if (strlen($name) == 0)
				Throw new Exception("Database name must not be empty.\n");
			else if (!isset($this->sgbd[$name]))
				Throw new Exception("$name does not exist! Please choose a valid database name.\n");
			else
				$this->currentDb = $name;
		}
	
		public function createDb($_name)
		{
			$name = trim($_name);
			if (strlen($name) == 0)
				Throw new Exception("Database name must not be empty.\n");
			else if (!isset($this->sgbd[$name]))
				$this->sgbd[$name] = [];
			else
				Throw new Exception("$name exist! Please choose another name.\n");
			
		}
		
		public function deleteDb($_name)
		{
			$name = trim($_name);
			if (strlen($name) == 0)
				Throw new Exception("Database name must not be empty.\n");
			else if (!isset($this->sgbd[$name]))
				Throw new Exception("$name does not exist! Please choose a valid database name.\n");
			else
				unset($this->sgbd[$name]);
		}
		
		public function myXpath($query)
		{
			//print_r($this->sgbd);
			//array to xml
			$tool = new ArrayToXml();
			print_r($tool->dataToXml($this->sgbd));
			//xml to array
			/*$xml = simplexml_load_string($xmlstring);
			$json = json_encode($xml);
			$array = json_decode($json,TRUE);
			$result = array();
			
			return ($result);*/
		}
		
		private function init()
		{
			$content = file_get_contents($this->dbFile);
			if (strlen($content) > 0)
				$this->sgbd = (array) json_decode($content);
			else
			{
				$this->sgbd = array();
				$this->createDb('default');
				$this->useDb('default');
				$this->save();
			}
		}
		
		private function save(){file_put_contents($this->dbFile, json_encode($this->sgbd));}
	}
?>