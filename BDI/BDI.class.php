<?php
	class BDI
	{
		private $name;
		private $maslow;
		private $desireList;
		private $intentionList;
		/*
		private $beliefList;
		private $knowledgeList;
		private $planList;
		private $facade;
		*/
		public function __construct($name)
		{
			$this->name = $name;
			$this->maslow = array();
			$this->desireList = array();
			$this->intentionList = array();
			//$this->beliefList = array();
			//$this->facade = new BDIFacade();
		}
		
		public function makeChoice()
		{
			// Ordering desires based on each level of the Maslow pyramide
			for ($i = 0; $i < count($this->maslow); $i++)
			{
				$maslowName = $this->maslow[$i]['name'];
				// Ordering desires based on each category of the current level
				for ($j = 0; $j < count($this->maslow[$i]['category']); $j++)
				{
					$maslowCategory = $this->maslow[$i]['category'][$j];
					$desires = $this->getDesiresByCategory($maslowName, $maslowCategory);
					foreach ($desires as $desire)
						$this->intentionList[] = $desire;
				}
			}
		}
		
		public function addDesire($desire, $category, $rank)
		{
			$this->desireList[$desire] = array('desire'=>$desire, 'category'=>$category, 'rank'=>$rank);
		}
		
		public function removeDesire($desire)
		{
			unset($this->desireList[$desire]);
		}
		
		public function getDesiresByCategory($level, $_category)
		{
			$result = array();
			$category = $level.'.'.$_category;
			foreach ($this->desireList as $desire)
			{
				if ($desire['category'] === $category)
					$result[] = $desire;
			}
			
			return ($result);
		}
		
		public function setMaslow($maslow){$this->maslow = $maslow;}
		public function getMaslow(){return ($this->maslow);}
		public function getIntentions(){return ($this->intentionList);}
	}
		/*public function think()
		{
			$this->intentionList = array();
			// Getting opportunities list
			$opportunitiesList = $this->getOpportunitiesList();
			$predicate = array('fullfilled'=>0, 'groupBy'=>'context', 'orderBy'=>'Maslow',  'opportunities'=>$opportunitiesList);
			
			// Retrieve all desire that contains elements in the opportunity list
			$desireList = $this->facade->read('desire', $predicate);
			
			foreach($desireList as $desire)
			{
				// for each desire we get the plan assocaited we add it in the intention list
				$plans = $this->facade->read('plan', $desire->name);
				$this->intentionList[$desire->name] = $plans;
			}
		}*/
?>