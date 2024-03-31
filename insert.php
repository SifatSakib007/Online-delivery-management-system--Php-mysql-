<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="loginsignup";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$name =  $_POST['name'];
//$email = $_POST['email'];

//sql query execute
$sql = "INSERT INTO report  VALUES ('$name')";
   if($conn->query($sql)===TRUE){
     echo "New record created successfully";

   }else{
     echo "Error: ". $sql. "<br>" .$conn->error;
   }

$conn->close();
