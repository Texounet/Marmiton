<?php

/**
* 
*/
class ModelRecette extends funcDB
{
	function getIngredient() {
        $dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        $json = $this->select($dbh, 'Ingredients', array(), array(), array());
    
         // echo $json;
        return($json);
    }

    function getRecette($id) {
        $dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        $json = $this->select($dbh, 'Recette', array(), array("id = ".$id), array());
    
        // echo $json;
        return($json);
    }

    function insertRecette($nom, $temps, $mail, $pseudo){
        $dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        //insertioon dans la table recette
        $insert_recette = "INSERT INTO `Recette`(`nom`, `temps`, `mail`, `pseudo`) VALUES ('".$nom."','".$temps."','".$mail."','".$pseudo."')";
        $dbh->exec($insert_recette);

        //recuperation de l'id
        $select_id = "SELECT MAX(`id`) FROM `Recette`";
        $resultats=$dbh->query($select_id);
        while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
            $id = $resultat[0]['MAX(`id`)'];
        }

        return($id);
    }

    function insertIngredient($id, $ing, $type){
        $dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        //insertioon dans la table recette
        $insert_recette = "INSERT INTO `Ingredients`(`ingredients`, `type`, `id_rec`) VALUES ('".$ing."','".$type."','".$id."')";

        $dbh->exec($insert_recette);
    }

    function insertEtape($id, $nom, $desc, $table){
        $dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        //insertioon dans la table recette
        $insert_recette = "INSERT INTO `Etape`(`id_recette`, `nom`, `description`, `ingredients`) VALUES ('".$id."','".$nom."','".$desc."','".$table."')";

        $dbh->exec($insert_recette);
    }
}
?>