<?php
	namespace HPCSA\model;
	class Person
	{
		private $id;
		private $name;
		private $displayName;
		
		public function __construct(){}
		
		public function getId(){return ($this->id);}
		public function getName(){return ($this->name);}
		public function getDisplayName(){return ($this->displayName);}
		
		public function setId($id){$this->id = $id;}
		public function setName($name){$this->name = $name;}
		public function setDisplayName($displayName){$this->displayName = $displayName;}
	}
?>