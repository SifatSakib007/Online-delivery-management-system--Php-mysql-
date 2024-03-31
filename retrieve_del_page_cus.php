<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsignup";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$var=$_SESSION['emailId'];
$sql = "SELECT *  from shipment where s_email = '$var'";
$result = $conn->query($sql);


$conn->close();
?> 