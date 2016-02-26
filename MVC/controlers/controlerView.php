<?php

/**
* 
*/
class controlerView extends Controler
{
	
	function view($id){

		$this->loadModel('ModelView');
		$result = $this->ModelView->getRecette($id);
		$array = json_decode($result, true);

		$recette = $array['recette'];
		$ing = $array['ing'];
		$etape = $array['etape'];

		$d['recette'] = $array['recette'];
		$d['tag'] = $array['tag'];
		for ($i=0; isset($ing[$i]) ; $i++) { 
			$d['ing'][$i] = $ing[$i];
			// print_r($d['ing'][$i]);
			// echo "<br/><br/>";
		}

		for ($i=0; isset($etape[$i]) ; $i++) { 
			$d['etape'][$i] = $etape[$i];
			$ingred = unserialize($d['etape'][$i]['ingredients']);
			// print_r($ingred);
			unset($d['etape'][$i]['ingredients']);
			$d['etape'][$i]['ingredients'] = $ingred;
		}

		$this->set($d);
		$this->render('view');
	}
}
?>