<?php
	require_once('../BDI/BDI.class.php');
	
	class Agent
	{
		private $bdi;
		private $jobList;
		
		public function __construct($name)
		{
			$this->bdi = new BDI($name);
			$this->jobList = array();
		}
		
		public function look($eventList)
		{
			foreach ($eventList as $event)
			{
				if ($this->checkTags($event['tag']) === true)
					$this->jobList[] = $event;
			}
		}
		
		public function analyse()
		{
			$todoList = $this->jobList;
			foreach ($todoList as $todo)
			{
				if ()
			}
		}
		
		public function getIntentions()
		{
		
		}
		
		public function act()
		{
		
		}
	}
?>