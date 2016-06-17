<?php
	class Toolbox
	{
		/**
		* Transform an array  to an object using reflection method
		**/
		public static function toObjectByReflectionMethod($array, $reflection, $className)
		{
			$obj = $reflection->newInstance();
			foreach ($array as $key=>$value)
			{
				$reflectionMethod = new \ReflectionMethod($className, 'set'.ucFirst($key));
				$reflectionMethod->invoke($obj, $value);
			}
			
			return ($obj);
		}

		/**
		* $array = array(description => array([0] => 'CSA Consumer organization'))
		* Transform to 
		* $array = array(description => 'CSA Consumer organization')
		* empty array give null;
		**/
		public static function cleanArray($array)
		{
			if (!is_array($array))
				return ($array);
			$result = $array;
			
			foreach ($array as $key=>$value)
			{
				if (is_array($value) && count($value) == 0)
					$result[$key] = null;
				else if (is_array($value) && count($value) == 1 && isset($value[0]))
					$result[$key] = self::cleanArray($value[0]);
				else if (is_array($value))
					$result[$key] = self::cleanArray($value);
			}
			
			return ($result);
		}
	}
?>