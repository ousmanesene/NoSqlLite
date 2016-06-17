<?php
	require_once('CouchDBAttachment.class.php');
	require_once('CouchDBFactory.class.php');
	
	class CouchDBFacade implements iCouchDB
	{
		private $cdba;
	
		public function __construct($url)
		{
			$this->cdba = new CouchDBAttachment($url);
		}
		
		public function create($query)
		{
			$this->cdba;
		}
		
		public function read($query)
		{
		
		}
		
		public function update($query)
		{
		
		}
		
		public function delete($query)
		{
		
		}
	}
?>