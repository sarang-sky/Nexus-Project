<?php 
/**
 * 
 */
class Book extends Controller{
	
	
	function index(){
		echo "this is the user index";
	}

	function testing(){
		echo "this is the user testing";
	}
	function getAllBooks(){
		//echo"test1";
		$this->model->getAllBooks();
	}

	function addBook(){


		 if (isset($_POST['submit_add_book'])) {
		 	

		 	$this->model->addBook($_POST['book'],$_POST['author'],$_POST['description']);

		 	$var=new View();
		 	$var->render('bookAdded');
		 	// $var->render('bookAdded');
		 	
		 	// echo"<pre>"; print_r($_POST); echo "</pre>";
		 	
			//$book=$_POST['book'];
			// $author=$_POST['author'];
			// $description=$_POST['description'];
			
			// require('config/view.php');
			// render('bookAdded');

			}
	else{echo "sorry!";}
		}
		
	}

 ?>