<?php
	require_once('../curl/MyCurl.class.php');
	require_once('Stonesoft.class.php');
	
	$stonesoft = new Stonesoft();
	$stonesoft->login();
	$hostList = json_decode($stonesoft->listHost());
	
	//$newHost = '{"name":"myHost1","comment":"My SMC API\'s host1","address":"200.0.0.1","ipv6_address":"::11","secondary":["1.1.1.1","2.2.2.2"]}';
	$newHost['name'] = "myHost1";
	$newHost["comment"] = "My SMC API's host1";
	$newHost["address"] = "200.0.0.1";
	$newHost["ipv6_address"] = "::11";
	$newHost["secondary"] = array("1.1.1.1","2.2.2.2");
	
	//$stonesoft->addHost(json_encode($newHost));
// 	$hostList = json_decode($stonesoft->listHost());
	$groupList = json_decode($stonesoft->listGroup());
	print_r($groupList);
?>