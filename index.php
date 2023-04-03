<?php
$servername = "web-app-database-test-server.mysql.database.azure.com";
$username = "qnlnwbfheg";
$password = "2B70E8OHL7FIJBM3$";


  
  
// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
