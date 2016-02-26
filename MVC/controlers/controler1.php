<?php

/**
* 
*/
class Controler1 extends Controler
{
	function index(){
		$d = array();

		$this->loadModel('Model1');
		$result = $this->Model1->getNameRecette();
		// echo $result;
		$array = json_decode($result, true);
		// print_r($array);
		for ($i=0; isset($array[$i]); $i++) { 
			$d['nom'][$i]= $array[$i]['nom'];
			$d['temps'][$i]= $array[$i]['temps'];
			$d['mail'][$i]= $array[$i]['mail'];
			$d['pseudo'][$i]= $array[$i]['pseudo'];
			$d['id'][$i]= $array[$i]['id'];
		}
		// print_r($d['sql']);

		$this->set($d);
		$this->render('index');
	}

	function view($id){
		echo $id;
	}
}
?>
