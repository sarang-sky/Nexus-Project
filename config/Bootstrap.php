<?php
 /**
 * 	This is the bootstrap class
 */
 class Bootstrap
 {
 	
 	function __construct()
 	{
 		# code...
 	// 	
 		if (!empty($_GET)) {
 			# code...
 			

 			//echo $_GET['url'];
 			$url = explode('/', $_GET['url']);
 			// print_r($url);
 			

 			$f_name = "controller/".$url[0].".php";
 			if (file_exists ($f_name)) {
 				# code...
 				require($f_name);
 				$controller =new $url[0]();

 				if (!empty($url[1])) {
 					# code...
 					$var= $url[1];
 					$controller->$var();
 				}
 				
 				else{
 					// $controller->index();
 					$this->view=new View();
 					$this->view->render('Page3');
 				}
 			}
 			
 		}else{
 			if (file_exists ("controller/index.php")) {
 				# code...
 				require("controller/index.php");
 				$index = new Index();
 				$index->index();
 			}
 		}
 	}

 }