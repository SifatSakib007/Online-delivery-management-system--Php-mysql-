<?php
include('db.php');
$msg="";

	$sender_name=mysqli_real_escape_string($db,$_POST['s_name']);
	$sender_email=mysqli_real_escape_string($db,$_POST['s_email']);
	$sender_num=mysqli_real_escape_string($db,$_POST['s_number']);
	$sender_str=mysqli_real_escape_string($db,$_POST['s_street']);
	$sender_city=mysqli_real_escape_string($db,$_POST['s_city']);
	$sender_division=mysqli_real_escape_string($db,$_POST['s_division']);

	$receiver_name=mysqli_real_escape_string($db,$_POST['r_name']);
	$receiver_email=mysqli_real_escape_string($db,$_POST['r_email']);
	$receiver_num=mysqli_real_escape_string($db,$_POST['r_number']);
	$receiver_str=mysqli_real_escape_string($db,$_POST['r_street']);
	$receiver_city=mysqli_real_escape_string($db,$_POST['r_city']);
	$receiver_division=mysqli_real_escape_string($db,$_POST['r_division']);
	$price=10;

	mysqli_query($db,"insert into shipment(s_name,s_email,s_number,s_street,s_city,s_division,r_name,r_email,r_number,r_street,r_city,r_division,price) values('$sender_name','$sender_email','$sender_num','$sender_str','$sender_city','$sender_division','$receiver_name','$receiver_email','$receiver_num','$receiver_str','$receiver_city','$receiver_division','$price')");
	$msg="Thanks message";
	
	$html="<table><tr><td>Name</td><td>$sender_name</td></tr><tr><td>Email</td><td>$sender_email</td></tr><tr><td>Mobile</td><td>$sender_num</td></tr><tr><td>Comment</td><td>$price</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="2019-2-60-032@std.ewubd.edu";
	$mail->Password="01707955070";
	$mail->SetFrom("2019-2-60-032@std.ewubd.edu");
	$mail->addAddress("2019-2-60-032@std.ewubd.edu");
	$mail->IsHTML(true);
	$mail->Subject="New Contact Us";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		//echo "Mail send";
	}else{
		//echo "Error occur";
	}
	echo $msg;

?>