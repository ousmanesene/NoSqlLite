<?php
	//require_once('Knowledge.class.php');
	//require_once('Desire.class.php');
	//require_once('Plan.class.php');
	//require_once('Intention.class.php');
	require_once('BDI.class.php');
	
	$name = 'Pierre';
	
	$bdi = new BDI($name);
	$maslow = array();
	
	$maslow[0] = array('name'=>'physiological', 'category'=>array('food', 'water', 'sleep'));
	$maslow[1] = array('name'=>'safety', 'category'=>array('security', 'order', 'stability'));
	$maslow[2] = array('name'=>'belonging', 'category'=>array('friendship', 'family'));
	$maslow[3] = array('name'=>'esteem', 'category'=>array('confidence', 'achievement'));
	$maslow[4] = array('name'=>'self-actualization', 'category'=>array('cognitive', 'aesthetic'));
	
	$bdi->setMaslow($maslow);
	

	$bdi->addDesire("travel", "self-actualization.cognitive", 1);
	$bdi->addDesire("doctorat", "safety.security", 3);
	$bdi->addDesire("assistant", "safety.stability", 2);
	
	$bdi->makeChoice();
	
	print_r($bdi->getIntentions());
	
	
	
	
	
	
	
	/*$bdi->addPlan('name'=>'doctorat', 'details'=>array('occurence'=>10, 'unit'=>'second', 'success'=>array('assistant'), 'failure'=>'doctorat'));
	$bdi->addPlan('name'=>'assistant', 'details'=>array('occurence'=>60, 'unit'=>'second', 'failure'=>'assistant'));
	$bdi->addPlan('name'=>'travel', 'details'=>array('occurence'=>60, 'unit'=>'second', 'failure'=>'assistant'));
	*/
	//$bdi->addBelief("Pierre a la croyance que, si quelqu'un passe son temps à étudier, cette personne peut faire une thèse de doctorat");
	//$bdi->addBelief("Pierre", "quelqu'un", "passe son temps à étudier", "cette personne",  "peut faire", "une thèse de doctorat");
	//$bdi->addBelief(array('believer'=>"self", 'who'=>"someone", 'do_what'=>"learn", 'can_do'=>true, 'what'=>"doctorat", 'reciprocal'=>true));
	//$bdi->addKnowledge(array('expert'=>'self', 'do_what'=>'travel', 'can_do'=>false, 'what'=>'doctorat||assistant', 'reciprocal'=>true));
	
	//require_once('Belief.class.php');
?>