<?php
	require_once('ArrayToXml.class.php');
	require_once('NoSQLLite.class.php');
	
	$db = new NoSQLLite('db.nos');
	
	//$db->createDb('services');
	$db->useDb('services');
	
	$product1 = array('name'=>'Sandwich thon', 'description'=>'Sandwich au thon et aux crudités', 'price'=>'0.99', 'currency'=>'€', 'tag'=>'thon|triangle');
	$product2 = array('name'=>'Banane', 'price'=>'0.25', 'currency'=>'€', 'tag'=>'banane|fruit');
	$product3 = array('name'=>'Soda', 'description'=>'Cannette de cola', 'price'=>'0.15', 'currency'=>'€', 'tag'=>'boisson|coca');
	$product4 = array('name'=>'Calamar Fritti', 'description'=>'Plat de calamar avec des concombres et de la salade', 'price'=>'12.00', 'currency'=>'€', 'tag'=>'calamar|salade|concombre');
	$product5 = array('name'=>'Provençale', 'description'=>'Pizza provençale au champignons et au poivrons', 'price'=>'9.50', 'currency'=>'€', 'tag'=>'pizza|champigon|poivron');
	
	$repas1[] = array('name'=>'sandwich classique', 'productList'=>array($product1, $product2));
	$repas1[] = array('name'=>'sandwich full', 'productList'=>array($product1, $product2, $product3));
	
	
	$repas2[] = array('name'=>'Calamar fritti', 'productList'=>array($product4));
	$repas2[] = array('name'=>'Menu pizza', 'productList'=>array($product5, $product3));
	
	$document1 = array('name'=>'monoprix', 'location'=>'63 rue des Fontanots, Nanterre, France', 'hour'=>'8h : 20h', 'rate'=>'3', 'menus'=>$repas1);
	$document2 = array('name'=>'Pizzeria', 'location'=>'63 rue des Fontanots, Nanterre, France', 'hour'=>'8h : 15h', 'rate'=>'4', 'menus'=>$repas2);
	
	//$db->createDocument($document1);
	//$db->createDocument($document2);
	
	/*$query = array('name'=>'monoprix');
	$result = $db->query($query);
	print_r($result);*/
	
	$db->myXpath('');
?>