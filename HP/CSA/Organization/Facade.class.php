<?php
	namespace HPCSA\Organization;
	class Facade implements iOrganization
	{
		private $communication;
		private $userID;
		private $organizationObjectList;
		private $needles;
		
		public function __construct()
		{
			$this->communication = new \HPCSA\Communication();
			$this->userID = $this->communication->authenticate();
			$this->initNeedles();
		}
		
		public function getOrganizations()
		{
			$replaces = array('<user_id>'=>$this->userID);
			$data = $this->communication->query(self::URL_BASE.self::URL_LIST_ORGANIZATION, $replaces, $this->needles, array('organization'=>'/OrganizationList/organization'));
			$this->organizationObjectList = \HPCSA\Factory::getObjectList(\ToolBox::cleanArray($data));
			$this->setPersons();
			return ($this->organizationObjectList);
		}
		
		private function setPersons()
		{
			$personFacade = new \HPCSA\Organization\Person\Facade();
			foreach($this->organizationObjectList['organization'] as $object)
				$object->setPersons($personFacade->getPersonByIdOrganization($object->getId()));
		}
		
		public function initNeedles()
		{
			$this->needles['id'] = '/organization/id';
			$this->needles['creationDate'] = '/organization/createdOn';
			$this->needles['modificationDate'] = '/organization/updatedOn';
			$this->needles['description'] = '/organization/description';
			$this->needles['detailedDescription'] = '/organization/detailedDescription';
			$this->needles['name'] = '/organization/name';
			$this->needles['displayName'] = '/organization/displayName';
		}
	}
?>