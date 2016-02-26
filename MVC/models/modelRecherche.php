<?php

/**
* 
*/
class modelRecherche
{
	
	function Recherche($array)
	{
		$and = 0;
		print_r($array);
		$sql = "SELECT id FROM Recette WHERE ";

		if(!empty($array[0])){
			$sql .= "nom LIKE '%".$array[0]."%' ";
			$and = 1;
		}
		if(!empty($array[1])){
			if($and != 0)
				$sql .=" AND ";
			else
				$and += 1;
			$sql .= "temps > ".$array[1]." ";
		}
		if(!empty($array[2])){
			if($and != 0)
				$sql .=" AND ";
			else
				$and += 1;
			$sql .= "temps < ".$array[2]." ";
		}
		if(!empty($array[3])){
			if($and != 0)
				$sql .=" AND ";
			else
				$and += 1;
			$sql .= "pseudo LIKE '%".$array[3]."%'";
		}

		echo $sql;
	}
}
?>