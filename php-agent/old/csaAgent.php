<?php
	require_once('../curl/MyCurl.class.php');
	//require_once('../couchDB/CouchDB.class.php');
	//require_once('../HP/CSA/HPCSABiling.class.php');
	//require_once('OSSAgent.class.php');
	//require_once('CsaAgent.class.php');
	
	function open_https_url($url,$refer = "",$usecookie = false, $post = false) {
	echo $url, "\n";
    if ($usecookie) {
       
        if (file_exists($usecookie)) {
       
            if (!is_writable($usecookie)) {
               
                return "Can't write to $usecookie cookie file, change file permission to 777 or remove read only for windows.";
            }
        } else {
            $usecookie = "cookie.txt";
            touch($usecookie);
            if (!is_writable($usecookie)) {
                return "Can't write to $usecookie cookie file, change file permission to 777 or remove read only for windows.";
            }
        }
   
    }

    $ch = curl_init();
   
    curl_setopt($ch, CURLOPT_URL, $url);
    
    $header[] = "Connection: keep-alive";
    $header[] = "Accept: text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8";
   
   curl_setopt($ch, CURLOPT_HTTPHEADER, $header); 
   
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
   
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
   
    curl_setopt($ch, CURLOPT_HEADER, 1);
    
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    
	if ($post)
		curl_setopt ($ch, CURLOPT_POSTFIELDS, "j_username=admin&j_password=cloud");
	else
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'OPTIONS');
   
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (X11; Linux x86_64; rv:25.0) Gecko/20100101 Firefox/25.0');
    
   
    if ($usecookie) {
        curl_setopt($ch, CURLOPT_COOKIEJAR, $usecookie);
       
        curl_setopt($ch, CURLOPT_COOKIEFILE, $usecookie);   
    }
   
    if ($refer != "") {
   
        curl_setopt($ch, CURLOPT_REFERER, $refer );
       
    }
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
   
   $result =curl_exec ($ch);
   
   curl_close ($ch);
   
   return $result;
}
///csa/j_spring_security_check
///csa/rest/login/CSA-Provider/admin
///csa/rest/catalog?userIdentifier=90d96588360da0c701360da0f1d600a1
///https://f1d001t02asw.itc.integra.fr:8444/csa/rest/organization/90d96588360da0c701360da0f15b009e?scope=baseplusone&detail=basic&userIdentifier=90d96588360da0c701360da0f1d600a1

//csa/rest/user/mysubscription?userIdentifier=90d96588360da0c701360da0f1d600a1&requestor=customer&scope=view &creationStartDate=<date>&creationEndDate=<date>
$urls = array('j_spring_security_check', 'rest/CSA-Provider/admin', 'rest/catalog?userIdentifier=90d96588360da0c701360da0f1d600a1');
$host = 'https://f1d001t02asw.itc.integra.fr:8444/csa/';

foreach ($urls as $key=>$value)
{
	if ($key == 0 )
		echo  open_https_url($host.$value, '', true, true);
	else
		echo  open_https_url($host.$value, '', true);
}
?>