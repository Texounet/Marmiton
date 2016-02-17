<?php

/**
* 
*/
class ModelIscription extends funcDB
{
	function getIngredient() {
        $dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        $json = $this->select($dbh, 'Ingredients', array(), array(), array());
    
         // echo $json;
        return($json);
    }
}
?>