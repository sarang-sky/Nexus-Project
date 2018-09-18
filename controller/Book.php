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

	function addHotel(){

		 if (isset($_POST['submit_add_hotel'])) {
		 	

		 	$this->model->addHotel($_POST['name'],$_POST['phone_number'],$_POST['email'],$_POST['address']);

		 	$var=new View();
		 	$var->render('hotelAdded');
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
		
	
	function addCustomer(){

		 if (isset($_POST['submit_add_customer'])) {
		 	

		 	$this->model->addCustomer($_POST['name'],$_POST['phone_number'],$_POST['email'],$_POST['Hotel_Name']);

		 	$var=new View();
		 	$var->render('customerAdded');
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

		function searchResults(){

		 if (isset($_POST['submit'])) {
		 	

		 	$this->model->searchResults($_POST['Search'],;

		 	$var=new View();
		 	$var->render('searchResults');
		 	
			}
	else{echo "sorry!";}
		}
	
		
	}
 ?>	}
	}
