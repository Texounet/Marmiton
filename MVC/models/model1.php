<?php

/**
* 
*/
class model1 extends FuncDB 
{

	function getNameRecette() {
	$dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

    $json = $this->select($dbh, 'Recette', array('nom', 'id'), array(), array());
    
    // echo $json;
    return($json);
  }

    function getRecette($id) {
        $dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        $json = $this->select($dbh, 'Recette', array(), array("id = ".$id), array());
    
        // echo $json;
        return($json);
    }
}
?>