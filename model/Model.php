<?php

	class Model
{

		function __construct($db){
        	try {
            		$this->db = $db;
        		} 
        	catch (PDOException $e) {
            		exit('Database connection could not be established.');
        		}
    	}

  //   	public function getAllBooks(){
  //   		echo "test2";
	 //        $sql = "SELECT id, title, author, description FROM book";
	 //        $query = $this->db->prepare($sql);
	 //        $query->execute();

	      
	 //        $result=$query->fetchAll();
	 //        echo "<pre>";print_r($result);echo "</pre>";
		// }

	    public function addHotel($name, $phone, $email, $address){
	    	// echo "testing 2";

	        $sql = "INSERT INTO hoteldetails (name, phone, email, address) VALUES (:name, :phone, :email, :address)";
	        $query = $this->db->prepare($sql);
	        $parameters = array(':name' => $name, ':phone' => $phone, ':email' => $email, ':address' => $address);

	        

	        $query->execute($parameters);

	        
	    }
	    public function addCustomer($c_name, $phone, $email, $h_name){
	    	// echo "testing 2";

	        $sql = "INSERT INTO customerdetails (c_name, phone, email, h_name) VALUES (:c_name, :phone, :email, :h_name)";
	        $query = $this->db->prepare($sql);
	        $parameter = array(':c_name' => $c_name, ':phone' => $phone, ':email' => $email, ':h_name' => $h_name);

	        

	        $query->execute($parameter);

	        
	    }

	 	public function searchResults($Search){
			if(!isset($_POST['Search'])){
				header("Location:index.php");
			}
			$search_sql = "SELECT * FROM customerDetails WHERE name LIKE '%".$_POST['search']."%'" ;
			$search_query=$this->db->query($search_sql);
			
			
			// if($search_query->num_rows>0){
			// 	//output data of each row
			// 	while($row= $search_query->fetch_assoc()){

				// }
			}

			// if(mysql_num_rows($search_query!=0)){
			// 	$search_rs=mysql_fetch_assoc($search_query);
			// }

		}	
	    


?>