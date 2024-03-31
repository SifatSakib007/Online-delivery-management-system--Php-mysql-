<?php

require('db.php');
//collect data from html
$id=$_POST['id'];
$st_name = $_POST['name'];
$st_email = $_POST['email'];
$st_num = $_POST['Pnumber'];
$st_city = $_POST['city'];
$st_branch=$_POST['branch'];
$st_salary=$_POST['salary'];

$stf_sql = "insert into `staff` (`id`,`name`, `email`, `number`,`city`,`branch`,`salary` ) values
('$id','$st_name', '$st_email', '$st_num','$st_city','$st_branch','$st_salary');";

if($db->query($stf_sql) === TRUE){
	echo "Staffs information added successfully";
}else{
	echo "Error: " . $stf_sql . "<br>" . $db->error;
}
$db->close();




?>