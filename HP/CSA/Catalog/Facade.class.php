<?php
	namespace HPCSA\Catalog;
	class Facade implements iCatalog
	{
		private $communication;
		private $userID;
		private $catalogObjectList;
		private $needles;
		
		public function __construct()
		{
			$this->communication = new \HPCSA\Communication();
			$this->userID = $this->communication->authenticate();
			$this->initNeedles();
		}
		
		public function getCatalogs()
		{
			$replaces = array('<user_id>'=>$this->userID);
			$data = $this->communication->query(self::URL_BASE.self::URL_LIST_CATALOG, $replaces, $this->needles, array('catalog'=>'/CatalogList/catalog'));
			$this->catalogObjectList = \HPCSA\Factory::getObjectList(\ToolBox::cleanArray($data));
			
			return ($this->catalogObjectList);
		}
		
		public function getCatalogsByUserId($userIdentifier)
		{
			$replaces = array('<user_id>'=>$userIdentifier);
			$data = $this->communication->query(self::URL_BASE.self::URL_LIST_CATALOG, $replaces, $this->needles, array('catalog'=>'/CatalogList/catalog'));
			print_r($data);
			$this->catalogObjectList = \HPCSA\Factory::getObjectList($data);
			return ($this->catalogObjectList);
		}
		
		public function initNeedles()
		{
			$this->needles['id'] = '/catalog/id';
			$this->needles['creationDate'] = '/catalog/createdOn';
			$this->needles['modificationDate'] = '/catalog/updatedOn';
			$this->needles['description'] = '/catalog/description';
			$this->needles['name'] = '/catalog/name';
			$this->needles['displayName'] = '/catalog/displayName';
			$this->needles['ownerId'] = '/catalog/ownedBy/id';
		}
	}
?>