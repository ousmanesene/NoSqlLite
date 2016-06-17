<?php
	require_once('CouchDB.class.php');
	class CouchDBAttachment extends CouchDB
	{
		
		public function __construct($url)
		{
			parent::__construct($url);
		}
		
		public function addAttachment($database, $id, $rev, $attachment)
		{
			$url = $this->url.$database.'/'.$id.'/'.$attachment['name'].'?rev='.$rev;
			$resultJson = $this->mCurl->myCurl($url, 'PUT', '', $attachment['path']);
			echo $resultJson, "\n\n";
			$result = json_decode($resultJson, true);
			$this->lastResult = $result;
			return($result);
		}
		
		public function deleteAttachment($database, $id, $rev, $attachment)
		{
			$url = $this->url.$database.'/'.$id.'/'.$attachment['name'].'?rev='.$rev;
			$resultJson = $this->mCurl->myCurl($url, 'DELETE');
			echo $resultJson, "\n";
			$result = json_decode($resultJson, true);
			$this->lastResult = $result;
			return($result);
		}
	}
?>