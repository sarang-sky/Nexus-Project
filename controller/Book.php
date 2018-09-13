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

		echo "hi";
		 if (isset($_POST['submit_add_book'])) {
		 	

		 	$this->model->addBook($_POST['name'],$_POST['phone_number'],$_POST['email'],$_POST['Hotel_Name']);

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