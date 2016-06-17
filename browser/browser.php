<?php
    require_once('simple_html_dom.php');
    require_once('../curl/MyCurl.class.php');
    require_once('../couchDB/CouchDB.class.php');
    require_once('../couchDB/CouchDBAttachment.class.php');
    require_once('../couchDB/CouchDBException.class.php');
    require_once('Browser.class.php');
	$browserConfStr = utf8_encode(file_get_contents('browser.json'));
	$conf = ($browserConfStr !== '') ? (array) json_decode($browserConfStr, true) : array();
    $browser = new Browser($conf, '127.0.0.1:5984/ma_articles');
    $browser->start();
?>