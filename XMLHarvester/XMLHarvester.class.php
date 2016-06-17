<?php
	class XMLHarvester
	{
		public static function parse($source, $infos)
		{
			$xml = new SimpleXMLElement($source);
			$result = array();
			foreach ($infos as $key=>$path)
			{
				$temp = array();
				$xpath = $xml->xpath($path);
				while(list( , $node) = each($xpath))
					$temp[] = (string) $node;
				$result[$key] = $temp;
			}
			
			return ($result);
		}
		
		public static function parseAndGroupByNode($source, $infos, $nodeList)
		{
			$xml = new SimpleXMLElement($source);
			$result = array();
			if (is_array($nodeList))
			{
				foreach ($nodeList as $nodename=>$path)
				{
					$xpath = $xml->xpath($path);
					while(list( , $node) = each($xpath))
						$result[$nodename][] = self::parse($node->asXML(), $infos);
				}
			}
			return ($result);
		}
	}
?>