<?php

/**
* 
*/
class ModelRecette extends funcDB
{
	function getIngredient() {
        $dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        $json = $this->select($dbh, 'Ingredients', array(), array(), array());

        return($json);
    }

    function getRecette($id) {
        $dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        $json = $this->select($dbh, 'Recette', array(), array("id = ".$id), array());

        return($json);
    }

    function insertRecette($nom, $temps, $mail, $pseudo){
        $dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        $date = date('Y-m-d H:i:s');

        //insertioon dans la table recette
        $insert_recette = "INSERT INTO `Recette`(`nom`, `temps`, `mail`, `pseudo`, `date`) VALUES ('".$nom."','".$temps."','".$mail."','".$pseudo."', '".$date."')";
        $dbh->exec($insert_recette);

        //recuperation de l'id
        $select_id = "SELECT MAX(`id`) FROM `Recette`";
        $resultats=$dbh->query($select_id);
        while( $resultat = $resultats->fetchAll(PDO::FETCH_ASSOC) ){
            $id = $resultat[0]['MAX(`id`)'];
        }

        return($id);
    }

    function insertIngredient($id, $ing, $type, $quantiter){
        $dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        //insertioon dans la table recette
        $insert_ing = "INSERT INTO `Ingredients`(`ingredients`, `type`, `id_rec`, `quantiter`) VALUES ('".$ing."','".$type."','".$id."', '".$quantiter."')";

        $dbh->exec($insert_ing);
    }

    function insertEtape($id, $nom, $desc, $table){
        $dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        //insertioon dans la table recette
        $insert_etape = "INSERT INTO `Etape`(`id_recette`, `nom`, `description`, `ingredients`) VALUES ('".$id."','".$nom."','".$desc."','".$table."')";

        $dbh->exec($insert_etape);
    }

    function insertTag($tag, $id){
        $dbh = new PDO('mysql:host=localhost;dbname=Marmiton', 'root', 'root');

        //insertioon dans la table recette
        $insert_tag = "INSERT INTO `Tag`(`tag`, `id_recette`) VALUES ('".$tag."','".$id."')";

        $dbh->exec($insert_tag);
    }
}
?>