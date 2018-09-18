<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "NexusDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT c_no, name, h_name FROM customerDetails";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["c_no"]. " - Name: " . $row["name"]. " - Hotel Name: " . $row["h_name"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>