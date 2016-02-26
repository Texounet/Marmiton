<?php

/**
* 
*/
class modelRecherche
{
	
	function Recherche($array, $tag, $ing)
	{
		$dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

		$recette = $this->RechercheRecette($array);
		$array_tag = $this->RechercheTag($tag);
		$array_ing = $this->RechercheIng($ing);

		$id = $this->compare($recette, $array_tag, $array_ing);
		
		$result = array();
		if(isset($id[0])){
			for ($i=0; isset($id[$i]) ; $i++) { 
				$tmp = $this->Select($id[$i]);
				array_push($result, $tmp);
			}
		}
		return($result);
	}

	function Select($id)
	{
		$dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

		$select_id = "SELECT * FROM `Recette` WHERE id = ".$id;
		$resultats=$dbh->query($select_id);
	    while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
            $arrayFinal = $resultat;
        }
        return($arrayFinal);
		
	}

	function compare($array1, $array2, $array3){
		$array = array();

		for ($i=0; isset($array1[$i]) ; $i++) { 
			for ($i2=0; isset($array2[$i2]) ; $i2++) { 
				for ($i3=0; isset($array3[$i3]) ; $i3++) { 
					if($array1[$i]['id'] == $array2[$i2]['id'] && $array1[$i]['id'] == $array3[$i3]['id']){
						array_push($array, $array2[$i2]['id']);
					}
				}
			}
		}
		return($array);
	}

	function RechercheRecette($array)
	{
		$dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

		$and = 0;
		$select_id = "SELECT id FROM Recette ";

		if(!empty($array[0])){
			$select_id .= "WHERE nom LIKE '%".$array[0]."%' ";
			$and = 1;
		}
		if(!empty($array[1])){
			if($and != 0)
				$select_id .=" AND ";
			else{
				$and += 1;
				$select_id .=" WHERE ";
			}
			$select_id .= "temps > ".$array[1]." ";
		}
		if(!empty($array[2])){
			if($and != 0)
				$select_id .=" AND ";
			else{
				$and += 1;
				$select_id .=" WHERE ";
			}
			$select_id .= "temps < ".$array[2]." ";
		}
		if(!empty($array[3])){
			if($and != 0)
				$select_id .=" AND ";
			else{
				$and += 1;
				$select_id .=" WHERE ";
			}
			$select_id .= "pseudo LIKE '%".$array[3]."%'";
		}
		$arrayFinal = array();

			$resultats=$dbh->query($select_id);
			
	        while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
	            $arrayFinal = $resultat;
	        }
        return($arrayFinal);
	}

	function RechercheTag($array){
		$dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

		$and = 0;
		$select_id = "SELECT DISTINCT `id_recette` AS id FROM `Tag`";

		for ($i=0; isset($array[$i]); $i++) { 

			if($i > 0)
				$select_id .=" AND ";
			else
				$select_id .=" WHERE ";
			$select_id .= "tag LIKE '%".$array[$i]."%'";
		}

		$arrayFinal = array();

			$resultats=$dbh->query($select_id);
			
	        while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
	            $arrayFinal = $resultat;
	        }
        return($arrayFinal);
	}

	function RechercheIng($array){
		$dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

		$and = 0;
		$select_id = "SELECT DISTINCT `id_rec` AS id FROM `Ingredients`";

		for ($i=0; isset($array[$i]); $i++) { 

			if($i > 0)
				$select_id .=" AND ";
			else
				$select_id .=" WHERE ";
			$select_id .= "ingredients LIKE '%".$array[$i]."%'";
		}

		$arrayFinal = array();

			$resultats=$dbh->query($select_id);
			
	        while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
	            $arrayFinal = $resultat;
	        }
        return($arrayFinal);
	}
}
?>