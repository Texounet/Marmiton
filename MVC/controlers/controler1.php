<?php

/**
* 
*/
class Controler1 extends Controler
{
	function index(){
		$d = array();
		$d['test_tab'] = array('id' => 0, 'test' => 'test');

		$this->loadModel('Model1');
		$result = $this->Model1->getRecette('');
		// print_r($result);
		$d['sql'] = $result;


		$this->set($d);
		$this->render('index');
	}

	function view($id){
		echo($id);
	}
}
?>
