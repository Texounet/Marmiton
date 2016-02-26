<?php

/**
* 
*/
class controlerRecette extends Controler
{
	
	function index()
	{

		$this->loadModel('ModelRecette');
		$result = $this->ModelRecette->getIngredient('');
		$array = json_decode($result, true);
		// print_r($array);
		for ($i=0; isset($array[$i]); $i++) { 
			$d['ingredients'][$i] = $array[$i]['ingredients'];
			$d['id'][$i] = $array[$i]['id'];
		}
		$this->set($d);
		$this->render('index');
	}

	function view($id){
		$d =array();
		$this->loadModel('ModelRecette');
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

	function etape1($test, $envoi){
		if ($test == 'ok') {
			$json = $envoi;
		}
		else{
			//Recuperartion de l'etape 1
			$nom = $_POST['name'];
			$temps = $_POST['temps'];
			$pseudo = $_POST['pseudo'];
			$mail = $_POST['mail'];
			$test = $_POST['ing'];
			$ingredients = array();
			for($i=0; isset($test[$i]); $i++){
				$ex = explode('_', $test[$i]);
				$ing = array('nom' => $ex[0], 'type' => $ex[1]);
				array_push($ingredients, $ing);
			}

			$debut = array('Base' => array('nom' => $nom, 'tmp' => $temps, 'mail' => $mail, 'ingredients' => $ingredients));
			$json = json_encode($debut);
		}

		$d['var'] = $json;
		$this->set($d);
		$this->render('etape2');
	}

	function etape2(){
		$array = array('nom' => $_POST['name_etape'], 'Description' => $_POST['Descriptif']);
		if(isset($_POST['ing']))
			$ing = $_POST['ing'];

		for($i=0; isset($ing[$i]); $i++){
			$tab = array();
			$array_ing = array();
			$tab = explode('_', $ing[$i]);
			$array_ing['ing'] = $tab[0];
			$array_ing['type'] = $tab[1];
			$array_ing['quant'] = $tab[2];
			$array_ing['dose'] = $tab[3];
			array_push($array, $array_ing);
		}
		$tmp = unserialize($_POST['json']);

		array_push($tmp, $array);
		$json = json_encode($tmp);
		// echo $json;
		// print_r($_POST);
		if($_POST['suite'] == "Ajouter une etape"){
			$this->etape1('ok', $json);
		}
		else{
			$this->etape3($json);
		}
	}

	function etape3($json){
		$table = json_decode($json, true);

		//QAjoue des info general
		$nom = $table['Base']['nom'];
		$temps = $table['Base']['tmp'];
		$mail = $table['Base']['mail'];
		$pseudo = 'pseudo';

		$this->loadModel('ModelRecette');

		$id = $this->ModelRecette->insertRecette($nom, $temps, $mail, $pseudo);

		//Ajoue des ingredients
		for($i=0; isset($table['Base']['ingredients'][$i]); $i++){
			$this->ModelRecette->insertIngredient($id, $table['Base']['ingredients'][$i]['nom'], $table['Base']['ingredients'][$i]['type']);
		}

		$etape = array_shift($table);

		//Ajoue des etape
		for ($i=0; isset($table[$i]); $i++) { 
			$nom = $table[$i]['nom'];
			$desc = $table[$i]['Description'];
			unset($table[$i]['nom']);
			unset($table[$i]['Description']);

			$this->ModelRecette->insertEtape($id, $nom, $desc, serialize($table[$i]));
		}

		$this->render('fin');
	}
}

?>