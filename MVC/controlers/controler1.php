<?php

/**
* 
*/
class Controler1 extends Controler
{
	function index(){
		$d = array();

		$this->loadModel('Model1');
		$result = $this->Model1->getNameRecette('');
		$array = json_decode($result, true);
		// print_r($array);
		for ($i=0; isset($array[$i]); $i++) { 
			// echo($array[$i]['nom']);
			$d['nom'][$i] = $array[$i]['nom'];
			$d['id'][$i] = $array[$i]['id'];
		}
		// print_r($d['sql']);

		$this->set($d);
		$this->render('index');
	}

	function view($id){
		$d =array();
		$this->loadModel('Model1');
		$result = $this->Model1->getRecette($id);
		$array = json_decode($result, true);
		// print_r($array);
		for ($i=0; isset($array[$i]); $i++) { 
			// echo($array[$i]['nom']);
			$d['recette'][$i] = $array[$i];
		}
		$this->set($d);

		$this->render('recette');
	}
}
?>
