<?php
	namespace HPCSA\Organization\Person;
	class Facade implements iPerson
	{
		private $communication;
		private $userID;
		private $personObjectList;
		private $needles;
		
		public function __construct()
		{
			$this->communication = new \HPCSA\Communication();
			$this->userID = $this->communication->authenticate();
			$this->initNeedles();
		}
		
		public function getPersonByIdOrganization($organizationId)
		{
			$replaces = array('<organization_id>'=>$organizationId, '<user_id>'=>$this->userID);
			$data = $this->communication->query(self::URL_BASE.self::URL_LIST_PERSON, $replaces, $this->needles, array('person'=>'/Organization/person'));
			$this->personObjectList = \HPCSA\Factory::getObjectList(\ToolBox::cleanArray($data));
			return ($this->personObjectList);
		}
		
		public function initNeedles()
		{
			$this->needles['id'] = '/person/id';
			$this->needles['name'] = '/person/name';
			$this->needles['displayName'] = '/person/displayName';
		}
	}
?>