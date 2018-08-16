<?php 

	class Controller{

		public $model=null;
		public $db=null;

		function __construct(){
			$this->openDatabaseConnection();
			$this->loadModel();

		}

		 function openDatabaseConnection(){
			$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);

        	$this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET, DB_USER, DB_PASS, $options);



		}

		public function loadModel(){
			
			$this->model=new Model($this->db);

		}


		// public function invoke(){
		// 	if(isset($_POST['submit_add_book'])){
		// 		include("view/bookAdded.php");
		// 		$books=$_POST;
		// 		print_r($books);


		// 	}


		// }

	}


?>