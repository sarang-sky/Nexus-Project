<?php 

class Index{
	function __construct(){
		$this->view = new View();
	}

	public function index(){
		$this->view->render('Page3');
	}
}

 ?>