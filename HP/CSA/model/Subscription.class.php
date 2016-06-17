<?php
	namespace HPCSA\model;
	class Subscription
	{
		private $id;
		private $description;
		private $detailedDescription;
		private $name;
		private $displayName;
		private $startDate;
		private $submittedOn;
		private $catalogId;
		private $baseInitialFixedPrice;
		private $baseInitialUnitPrice;
		private $baseRecurrentFixedPrice;
		private $baseRecurrentUnitPrice;
		private $totalInitialFixedPrice;
		private $totalInitialUnitPrice;
		private $totalRecurrentFixedPrice;
		private $totalRecurrentUnitPrice;
		private $options;
		
		public function __construct(){}
		
		public function getId(){return ($this->id);}
		public function getDescription(){return ($this->description);}
		public function getDetailedDescription(){return ($this->detailedDescription);}
		public function getName(){return ($this->name);}
		public function getDisplayName(){return ($this->displayName);}
		public function getStartDate(){return ($this->startDate);}
		public function getSubmittedOn(){return ($this->submittedOn);}
		public function getCatalogId(){return ($this->catalogId);}
		public function getBaseInitialFixedPrice(){return ($this->baseInitialFixedPrice);}
		public function getBaseInitialUnitPrice(){return ($this->baseInitialUnitPrice);}
		public function getBaseRecurrentFixedPrice(){return ($this->baseRecurrentFixedPrice);}
		public function getBaseRecurrentUnitPrice(){return ($this->baseRecurrentUnitPrice);}
		public function getTotalInitialFixedPrice(){return ($this->totalInitialFixedPrice);}
		public function getTotalInitialUnitPrice(){return ($this->totalInitialUnitPrice);}
		public function getTotalRecurrentFixedPrice(){return ($this->totalRecurrentFixedPrice);}
		public function getTotalRecurrentUnitPrice(){return ($this->totalRecurrentUnitPrice);}
		public function getOptions(){return ($this->options);}
		
		public function setId($id){$this->id = $id;}
		public function setDescription($description){$this->description = $description;}
		public function setDetailedDescription($detailedDescription){$this->detailedDescription = $detailedDescription;}
		public function setName($name){$this->name = $name;}
		public function setDisplayName($displayName){$this->displayName = $displayName;}
		public function setStartDate($startDate){$this->startDate = $startDate;}
		public function setSubmittedOn($submittedOn){$this->submittedOn = $submittedOn;}
		public function setCatalogId($catalogId){$this->catalogId = $catalogId;}
		public function setBaseInitialFixedPrice($baseInitialFixedPrice){$this->baseInitialFixedPrice = $baseInitialFixedPrice;}
		public function setBaseInitialUnitPrice($baseInitialUnitPrice){$this->baseInitialUnitPrice = $baseInitialUnitPrice;}
		public function setBaseRecurrentFixedPrice($baseRecurrentFixedPrice){$this->baseRecurrentFixedPrice = $baseRecurrentFixedPrice;}
		public function setBaseRecurrentUnitPrice($baseRecurrentUnitPrice){$this->baseRecurrentUnitPrice = $baseRecurrentUnitPrice;}
		public function setTotalInitialFixedPrice($totalInitialFixedPrice){$this->totalInitialFixedPrice = $totalInitialFixedPrice;}
		public function setTotalInitialUnitPrice($totalInitialUnitPrice){$this->totalInitialUnitPrice = $totalInitialUnitPrice;}
		public function setTotalRecurrentFixedPrice($totalRecurrentFixedPrice){$this->totalRecurrentFixedPrice = $totalRecurrentFixedPrice;}
		public function setTotalRecurrentUnitPrice($totalRecurrentUnitPrice){$this->totalRecurrentUnitPrice = $totalRecurrentUnitPrice;}
		public function setOptions($options){$this->options = $options;}
	}
?>