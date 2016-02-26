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

		array_push($array_recette, $_POST['name']);
		array_push($array_recette, $_POST['tmp_min']);
		array_push($array_recette, $_POST['tmp_min']);
		array_push($array_recette, $_POST['pseudo']);


		$this->loadModel('modelRecherche');
		$result = $this->modelRecherche->Recherche($array_recette);
	}
}
?>