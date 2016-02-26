<?php

/**
* 
*/
class ModelView extends FuncDB
{
	function getRecette($id) {
    	$dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');
    	$sql1 = "SELECT * FROM Recette WHERE id = '".$id."'";
        $recette = '';
        $resultats=$dbh->query($sql1);
        while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
            $recette = $resultat;
        }

        $sql2 = "SELECT * FROM `Ingredients` WHERE id_rec = '".$id."'";
        $ing = "";
        $resultats=$dbh->query($sql2);
        while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
            $ing = $resultat;
        }

        $sql3 = "SELECT * FROM `Etape` WHERE  id_recette = '".$id."'";
        $etape = '';
        $resultats=$dbh->query($sql3);
        while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
            $etape = $resultat;
        }

        $sql4 = "SELECT * FROM `Tag` WHERE id_recette = '".$id."'";

        $resultats=$dbh->query($sql4);
        $tag = "";
        while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
            $tag = $resultat;
        }

        $array = array('recette' => $recette, 'ing' => $ing, 'etape' => $etape, 'tag' => $tag);
        
        $json = json_encode($array);
 		
 		return($json);
    }
}
?>