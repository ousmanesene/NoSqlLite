<?php 
	class CouchDBException extends Exception
	{
		public function __toString() {
			return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
		}

		public function connect() {
			echo "CouchDBException: Unexpected response when trying to connect.";
		}
	}
?>