<?php

class FuncDB
{

	function select($dbh ,$table, $array_select, $array_where, $array_groupe){
		$where = '';
		$groupe = '';

		$requette = "SELECT ";

		$select = $this-> parcourt_tab_select($array_select);
		$requette .= $select;

		$requette .= 'FROM '.$table." ";
		if(!empty($array_where)){
			$where = $this->parcourt_tab_where($array_where);
			$requette .= "WHERE ".$where;
		}
		if(!empty($array_groupe)){
			$group = $this->parcourt_tab_groupe($array_groupe);
			$requette .= "GROUPE BY ".$group;
		}
		$resultats=$dbh->query($requette);
		while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
			$json = json_encode($resultat);
		}
		echo $requette;
		return $json;
	}

	function insert($table, $array_collumn, $array_value){
		//Verifier que les deux tableaux sont de la meme taille
		$insert = "INSERT INTO ".$table."(";
		return("EN DEV");
	}

	function parcourt_tab_select($array){
		$requette = '';
		if(empty($array)){
			$requette .= "* ";
		}
		else{
			for($i=0; isset($array[$i]); $i++){
				$requette .= $array[$i]." ";
				if(!empty($array[$i+1])){
					$requette .=", ";
				}
			}
		}
		return($requette);
	}

	function parcourt_tab_where($array){
		$requette = '';
		if(empty($array)){
			$requette .= " ";
		}
		else{
			for($i=0; isset($array[$i]); $i++){
				$requette .= $array[$i]." ";
				if(!empty($array[$i+1])){
					$requette .="AND ";
				}
			}
		}
		return($requette);
	}

	function parcourt_tab_groupe($array){
		$requette = '';
		if(empty($array)){
			$requette .= " ";
		}
		else{
			for($i=0; isset($array[$i]); $i++){
				$requette .= $array[$i]." ";
				if(!empty($array[$i+1])){
					$requette .=", ";
				}
			}
		}
		return($requette);
	}
}
?>