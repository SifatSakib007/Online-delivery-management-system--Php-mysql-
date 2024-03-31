<?php

require('db.php');
//collect data from html
$br_add = $_POST['address'];
$br_num1 = $_POST['number1'];
$br_num2 = $_POST['number2'];

if(isset($_POST['search'])){
	$searchkey = $_POST['search'];
	$sql = "select * from branch where address LIKE '%$searchkey%'";
  }

$bra = "insert into `branch` (`address`,`number1`,`number2`) values
('$br_add','$br_num1','$br_num2');";

if($db->query($bra) === TRUE){
	echo "Branch added successfully";
}else{
	echo "Error: " . $bra . "<br>" . $db->error;
}
$db->close();
