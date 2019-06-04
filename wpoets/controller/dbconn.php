<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="wpoets";
// Create connection
$conn = new mysqli($servername, $username,'',$db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  
}else{

}

?>
