<?php
	namespace HPCSA\model;
	class Organization
	{
		private $id;
		private $creationDate;
		private $modificationDate;
		private $description;
		private $detailedDescription;
		private $name;
		private $displayName;
		private $persons;
		
		public function __construct(){}
		
		public function getId(){return ($this->id);}
		public function getCreationDate(){return ($this->creationDate);}
		public function getModificationDate(){return ($this->modificationDate);}
		public function getDescription(){return ($this->description);}
		public function getDetailedDescription(){return ($this->detailedDescription);}
		public function getName(){return ($this->name);}
		public function getDisplayName(){return ($this->displayName);}
		public function getPersons(){return ($this->persons);}
		
		public function setId($id){$this->id = $id;}
		public function setCreationDate($creationDate){$this->creationDate = $creationDate;}
		public function setModificationDate($modificationDate){$this->modificationDate = $modificationDate;}
		public function setDescription($description){$this->description = $description;}
		public function setDetailedDescription($detailedDescription){$this->detailedDescription = $detailedDescription;}
		public function setName($name){$this->name = $name;}
		public function setDisplayName($displayName){$this->displayName = $displayName;}
		public function setPersons($persons){$this->persons = $persons;}
	}
?>