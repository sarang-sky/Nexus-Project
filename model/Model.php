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

	    public function addBook($c_name, $phone, $email, $h_name){
	    	// echo "testing 2";

	        $sql = "INSERT INTO hoteldetails (name, phone, email, h_name) VALUES (:name, :phone, :email, :h_name)";
	        $query = $this->db->prepare($sql);
	        $parameters = array(':name' => $c_name, ':phone' => $phone, ':email' => $email, ':address' => $h_name);

	        

	        $query->execute($parameters);

	        
	    }
	    public function addCustomer($c_name, $phone, $email, $h_name){
	    	// echo "testing 2";

	        $sql = "INSERT INTO customerdetails (c_name, phone, email, h_name) VALUES (:c_name, :phone, :email, :h_name)";
	        $query = $this->db->prepare($sql);
	        $parameter = array(':c_name' => $c_name, ':phone' => $phone, ':email' => $email, ':h_name' => $h_name);

	        

	        $query->execute($parameter);

	        
	    }
	    

}
?>