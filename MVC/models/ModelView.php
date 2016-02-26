<?php

/**
* 
*/
class ModelView extends FuncDB
{
	function getRecette($id) {
    	$dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');
    	$sql1 = "SELECT * FROM Recette WHERE id = '".$id."'";

        $resultats=$dbh->query($sql1);
        while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
            $recette = $resultat;
        }

        $sql2 = "SELECT * FROM `Ingredients` WHERE id_rec = '".$id."'";

        $resultats=$dbh->query($sql2);
        while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
            $ing = $resultat;
        }

        $sql2 = "SELECT * FROM `Etape` WHERE  id_recette = '".$id."'";

        $resultats=$dbh->query($sql2);
        while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
            $etape = $resultat;
        }

        $array = array('recette' => $recette, 'ing' => $ing, 'etape' => $etape);
        
        $json = json_encode($array);
 		
 		return($json);
    }
}
?>