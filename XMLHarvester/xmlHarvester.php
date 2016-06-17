<?php
	require_once('XMLHarvester.class.php');

	$source = file_get_contents('source.xml');
	$infos = array('id'=>'catalog/id');
	$result = XMLHarvester::parse($source, $infos);
	
	print_r($result);
?>