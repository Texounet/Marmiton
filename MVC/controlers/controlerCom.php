<?php

/**
* 
*/
class ControlerCom extends Controler
{
	function ajout(){
		$nom = $_POST['name'];
		$mail = $_POST['mail'];
		$note = $_POST['note'];
		$com = $_POST['com'];
		$id = $_POST['id'];

		$this->loadModel('ModelCom');
		$this->ModelCom->add_com($nom,$mail,$note,$com,$id);

		$this->render('fin');
	}
}
?>