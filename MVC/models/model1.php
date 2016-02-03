<?php

/**
* 
*/
class model1
{
	var $table = "table";

	function getRecette($id) {
	$dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');
	$array = array();
    $sql =  'SELECT * FROM Recette';

    if(!empty($id)){
    	$sql .= ' WHERE id ='.$id;
    }

    foreach($dbh->query($sql) as $row) {
    	$array[$row['id']]['id'] = $row['id'];
        $array[$row['id']]['nom'] = $row['nom'];
        $array[$row['id']]['suivi'] = $row['suivi'];
        $array[$row['id']]['ingredients'] = $row['ingredients'];
        $array[$row['id']]['mail'] = $row['mail'];
        $array[$row['id']]['pseudo'] = $row['pseudo'];
    }
    return($array);
  }
}
?>