<?php
	require_once('MyCurl.class.php');
	
	/*$mCurl = new MyCurl();
	$url = 'http://localhost/rest/request/tasks';
	$resultJson = $mCurl->myCurl($url, 'POST', '{"title":"redsfds","description":"sdfgdsgds"}');
	echo $resultJson, "\n";
	$result = json_decode($resultJson);
	print_r($result);*/
	
	
	$mCurl = new MyCurl(true, false, true);
	$mCurl->setMyCookie('cookie.txt');
	$url = 'http://115.22.68.3/datasheet-pdf/view/28265/TI/SN74AHC1G08DCKT/+Q7377UPGZSxYtElHtMNhMMUf+/datasheet.pdf';
	$result = $mCurl->myCurl($url);
	print_r($result);
?>