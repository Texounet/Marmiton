<?php

/**
* 
*/
class controlerInscription extends Controler
{
	
	function index()
	{

		$this->loadModel('ModelIscription');
		$result = $this->ModelIscription->getIngredient('');
		$array = json_decode($result, true);
		// print_r($array);
		for ($i=0; isset($array[$i]); $i++) { 
			$d['ingredients'][$i] = $array[$i]['ingredients'];
			$d['id'][$i] = $array[$i]['id'];
		}
		$this->set($d);
		$this->render('index');
	}
}

?>