<?php

/**
* 
*/
class controlerRecherche extends Controler
{
	
	function index(){
		$this->render('index');
	}

	function result(){
		print_r($_POST);
	}
}
?>