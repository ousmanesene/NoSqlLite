<?php
	require_once('CouchDB.class.php');
	
	
	$couch = new CouchDB('http://127.0.0.1:5984/');
	if ($couch->isConnected)
	{
		echo 'List of existing databases:', "\n";
		$databases = $couch->getDatabases();
		foreach ($databases as $db)
			echo $db, "\n";

		echo 'Adding database named "test"', "\n";
		$couch->addDatabase('test');
		echo 'List of existing databases:', "\n";
		$databases = $couch->getDatabases();
		foreach ($databases as $db)
			echo $db, "\n";

		echo 'Reading database named "test"', "\n";
		$databaseInfo = $couch->getDatabase('test');
		print_r($databaseInfo);
		
		$infos = array('title'=>'There is Nothing Left to Lose', 'artist'=>'Foo Fighters');
		echo 'Inserting in database named "test"', "\n";
		$couch->create('test', $infos);
		echo 'List of existing databases:', "\n";
		$databaseInfo = $couch->getDatabase('test');
		print_r($databaseInfo);

		echo 'Reading last document created ', "\n";
		$documentInfo = $couch->read('test', $couch->lastResult['id']);
		print_r($documentInfo);
		
		$infos = array('_rev'=>$couch->lastResult['rev'], 'title'=>'There is Nothing Left to Lose', 'artist'=>'Foo Fighters', 'year'=>'1997');
		echo 'Updating last document created ', "\n";
		$documentInfo = $couch->update('test', $couch->lastResult['id'], $infos);
		print_r($documentInfo);
		
		echo 'Reading last document updated ', "\n";
		$documentInfo = $couch->read('test', $couch->lastResult['id']);
		print_r($documentInfo);
		
		$attachment['path'] = '/home/osene/cloud/svn/csa/doc/Facturation/app/modules/couchDB/couchDB.txt';
		$attachment['name'] = 'couchDB.txt';
		echo 'Adding attachment to last document created ', "\n";
		$documentInfo = $couch->addAttachment('test', $couch->lastResult['id'], $couch->lastResult['rev'], $attachment);
		print_r($documentInfo);
		
		echo 'Reading last document updated ', "\n";
		$documentInfo = $couch->read('test', $couch->lastResult['id']);
		print_r($documentInfo);
		
		/*echo "\n\n".$couch->lastResult['rev'], "\n\n";
		echo 'Deleting last document updated ', "\n";
		$documentInfo = $couch->delete('test', $couch->lastResult['id'], $couch->lastResult['rev']);
		print_r($documentInfo);
		
		echo 'Reading last document deleted ', "\n";
		$documentInfo = $couch->read('test', $couch->lastResult['id']);
		print_r($documentInfo);

		echo 'Deleting database named "test"', "\n";
		$couch->deleteDatabase('test');
		echo 'List of existing databases:', "\n";
		$databases = $couch->getDatabases();
		foreach ($databases as $db)
			echo $db, "\n";*/
	}
?>