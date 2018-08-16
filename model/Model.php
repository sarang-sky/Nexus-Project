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

    	public function getAllBooks(){
    		echo "test2";
	        $sql = "SELECT id, title, author, description FROM book";
	        $query = $this->db->prepare($sql);
	        $query->execute();

	      
	        $result=$query->fetchAll();
	        echo "<pre>";print_r($result);echo "</pre>";
		}

	    public function addBook($title, $author, $description){
	    	// echo "testing 2";

	        $sql = "INSERT INTO book (title, author, description) VALUES (:title, :author, :description)";
	        $query = $this->db->prepare($sql);
	        $parameters = array(':title' => $title, ':author' => $author, ':description' => $description);

	        

	        $query->execute($parameters);

	        
	    }

	    

}
?>