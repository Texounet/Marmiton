<?php

/**
* 
*/
class ModelCom 
{
	
	function add_com($nom,$mail,$note,$com,$id){
		$dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        //insertioon dans la table com
        $insert_com = "INSERT INTO `Commentaire`( `id_recette`, `com`, `note`, `mail`, `pseudo`) VALUES ('".$id."','".$com."','".$note."','".$mail."','".$nom."')";
        $dbh->exec($insert_com);
	}

	function get_com($id){
		$dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');
    	$sql1 = "SELECT * FROM `Commentaire` WHERE id_recette=".$id;

        $json = "";
        $resultats=$dbh->query($sql1);
            while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
                $json = json_encode($resultat);
            }
        return($json);
	}
}

?>