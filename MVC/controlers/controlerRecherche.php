<?php

/**
* 
*/
class controlerRecherche extends Controler
{
	
	function index(){
		$this->render('index');
	}

	function result(){
		$array_recette = array();

		// print_r($_POST);

		array_push($array_recette, $_POST['name']);
		array_push($array_recette, $_POST['tmp_min']);
		array_push($array_recette, $_POST['tmp_max']);
		array_push($array_recette, $_POST['pseudo']);

		if(isset($_POST['tag']))
			$tag = $_POST['tag'];
		else
			$tag = array();

		if(isset($_POST['ing']))
			$ing = $_POST['ing'];
		else
			$ing = array();

		$this->loadModel('modelRecherche');
		$result = $this->modelRecherche->Recherche($array_recette, $tag, $ing);

		$d=array();
		for ($i=0; isset($result[$i]); $i++) { 

			$d['nom'][$i]= $result[$i][0]['nom'];
			$d['temps'][$i]= $result[$i][0]['temps'];
			$d['mail'][$i]= $result[$i][0]['mail'];
			$d['pseudo'][$i]= $result[$i][0]['pseudo'];
			$d['id'][$i]= $result[$i][0]['id'];
		}
		// print_r($d['sql']);

		$this->set($d);
		$this->render('view');
	}
}
?>