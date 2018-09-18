<!-- <?php
	// if(!isset($_POST['Search'])){
	// 	header("Location:nexus.php");
	// }
	// $search_sql="SELECT * FROM customerDetails WHERE name LIKE '%".$_POST['search']."%' OR description LIKE '%".$_POST['search']."%'";
	// $search_query=mysql_query($search_sql);
	// if(mysql_num_rows($search_query!=0)){
	// 	$search_rs=mysql_fetch_assoc($search_query);
	// }

?> -->

<p>Search Results</p>
<?php
	if($search_query->num_rows>0){
				//output data of each row
				while($row = $search_query->fetch_assoc()){
			echo $row["c_name"]."| Phone: ".$row["phone"]."| Email: "$row["email"]."| Hotel Booked: ".$row["h_name"]."<br>";
	// if(mysql_num_rows($search_query)!=0){
	// 	// do{ 
	// 	// echo "<br> Name: ".$search_rs['c_name']."| Phone: ".$search_rs['phone']."| Email: "$search_rs['email']."| Hotel Booked: ".$search_rs['h_name']."<br>";
	// 	// }
	// 	while($search_rs=mysql_fetch_assoc($search_query));{
	// 		echo ("<br> Name: ".$search_rs['c_name']."| Phone: ".$search_rs['phone']."| Email: "$search_rs['email']."| Hotel Booked: ".$search_rs['h_name']."<br>");
	// 	}
	}
	else{
		echo "no results found!";
	}
	}
?>