<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loginsignup";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql="SELECT * from staff ORDER BY id DESC";
$result=$conn->query($sql);
$conn->close();
?>