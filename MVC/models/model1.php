<?php

/**
* 
*/
class model1 extends FuncDB 
{

	function getNameRecette() {
    	$dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');
    	$sql1 = "SELECT * FROM Recette";

        $resultats=$dbh->query($sql1);
            while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
                $json = json_encode($resultat);
            }
        
        // echo $json;
        return($json);
    }
}
?>