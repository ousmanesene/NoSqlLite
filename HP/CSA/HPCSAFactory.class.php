<?php
	namespace HPCSA;
	class Factory
	{
		public static function getCSAUrl($url, $replaces, $needles, $curlSession)
		{
			foreach ($replaces as $key=>$value)
				$url = str_replace($key, $value, $url);
			echo $url, "\n";
			$content = $curlSession->open_https_url($url, '', true);
			$result = XMLHarvester::parse($content['content'], $needles);
			
			return ($result);
		}
		
		public static function getObjectList($data)
		{
			$result = array();
			foreach ($data as $name=>$arrayList)
			{
				$className = '\\HPCSA\\model\\'.ucFirst($name);
				$reflection = new \ReflectionClass($className);
				if (!isset($arrayList[0]))
					$result[$name][] = \Toolbox::toObjectByReflectionMethod($arrayList, $reflection, $className);
				else
					foreach ($arrayList as $array)
						$result[$name][] = \Toolbox::toObjectByReflectionMethod($array, $reflection, $className);
			}
			
			return ($result);
		}
		
		public static function getCSABillingObjectsFromCSA($csaBillingConf, $curlSession)
		{
		
		}
		
	}
?>
