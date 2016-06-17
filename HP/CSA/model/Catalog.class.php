<?php
	namespace HPCSA\model;
	class Catalog
	{
		private $id;
		private $creationDate;
		private $modificationDate;
		private $description;
		private $ownerId;
		private $name;
		private $displayName;
		
		public function __construct(){}
		
		public function getId(){return ($this->id);}
		public function getCreationDate(){return ($this->creationDate);}
		public function getModificationDate(){return ($this->modificationDate);}
		public function getDescription(){return ($this->description);}
		public function getOwnerId(){return ($this->ownerId);}
		public function getName(){return ($this->name);}
		public function getDisplayName(){return ($this->displayName);}
		
		public function setId($id){$this->id = $id;}
		public function setCreationDate($creationDate){$this->creationDate = $creationDate;}
		public function setModificationDate($modificationDate){$this->modificationDate = $modificationDate;}
		public function setDescription($description){$this->description = $description;}
		public function setOwnerId($ownerId){$this->ownerId = $ownerId;}
		public function setName($name){$this->name = $name;}
		public function setDisplayName($displayName){$this->displayName = $displayName;}
	}
?>