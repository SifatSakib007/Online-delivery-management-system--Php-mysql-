<?php
require('db.php');
//collect data from html
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

if($sender_division=='Dhaka'){
	if($receiver_division=='Sylhet'){
		$price = 50;
	}
	if($receiver_division=='Chittagong'){
		$price = 70;
	}
	if($receiver_division=='Barishal'){
		$price = 80;
	}
	if($receiver_division=='Khulna'){
		$price = 60;
	}
	if($receiver_division=='Rajshahi'){
		$price = 50;
	}
	if($receiver_division=='Rangpur'){
		$price = 100;
	}
	if($receiver_division=='Mymensingh'){
		$price = 65;
	}
	
}

if($sender_division=='Sylhet'){
	if($receiver_division=='Dhaka'){
		$price = 50;
	}
	if($receiver_division=='Chittagong'){
		$price = 70;
	}
	if($receiver_division=='Barishal'){
		$price = 80;
	}
	if($receiver_division=='Khulna'){
		$price = 60;
	}
	if($receiver_division=='Rajshahi'){
		$price = 50;
	}
	if($receiver_division=='Rangpur'){
		$price = 100;
	}
	if($receiver_division=='Mymensingh'){
		$price = 65;
	}
	
}

if($sender_division=='Chittagong'){
	if($receiver_division=='Dhaka'){
		$price = 50;
	}
	if($receiver_division=='Sylhet'){
		$price = 70;
	}
	if($receiver_division=='Barishal'){
		$price = 80;
	}
	if($receiver_division=='Khulna'){
		$price = 60;
	}
	if($receiver_division=='Rajshahi'){
		$price = 50;
	}
	if($receiver_division=='Rangpur'){
		$price = 100;
	}
	if($receiver_division=='Mymensingh'){
		$price = 65;
	}
	
}


if($sender_division=='Barishal'){
	if($receiver_division=='Dhaka'){
		$price = 50;
	}
	if($receiver_division=='Sylhet'){
		$price = 70;
	}
	if($receiver_division=='Chittagong'){
		$price = 80;
	}
	if($receiver_division=='Khulna'){
		$price = 60;
	}
	if($receiver_division=='Rajshahi'){
		$price = 50;
	}
	if($receiver_division=='Rangpur'){
		$price = 100;
	}
	if($receiver_division=='Mymensingh'){
		$price = 65;
	}
	
}

if($sender_division=='Khulna'){
	if($receiver_division=='Dhaka'){
		$price = 50;
	}
	if($receiver_division=='Sylhet'){
		$price = 70;
	}
	if($receiver_division=='Chittagong'){
		$price = 80;
	}
	if($receiver_division=='Barishal'){
		$price = 60;
	}
	if($receiver_division=='Rajshahi'){
		$price = 50;
	}
	if($receiver_division=='Rangpur'){
		$price = 100;
	}
	if($receiver_division=='Mymensingh'){
		$price = 65;
	}
	
}
if($sender_division=='Rajshahi'){
	if($receiver_division=='Dhaka'){
		$price = 50;
	}
	if($receiver_division=='Sylhet'){
		$price = 70;
	}
	if($receiver_division=='Chittagong'){
		$price = 80;
	}
	if($receiver_division=='Barishal'){
		$price = 60;
	}
	if($receiver_division=='Khulna'){
		$price = 50;
	}
	if($receiver_division=='Rangpur'){
		$price = 100;
	}
	if($receiver_division=='Mymensingh'){
		$price = 65;
	}
	
}

if($sender_division=='Rangpur'){
	if($receiver_division=='Dhaka'){
		$price = 50;
	}
	if($receiver_division=='Sylhet'){
		$price = 70;
	}
	if($receiver_division=='Chittagong'){
		$price = 80;
	}
	if($receiver_division=='Barishal'){
		$price = 60;
	}
	if($receiver_division=='Khulna'){
		$price = 50;
	}
	if($receiver_division=='Rajshahi'){
		$price = 100;
	}
	if($receiver_division=='Mymensingh'){
		$price = 65;
	}
	
}

if($sender_division=='Mymensingh'){
	if($receiver_division=='Dhaka'){
		$price = 50;
	}
	if($receiver_division=='Sylhet'){
		$price = 70;
	}
	if($receiver_division=='Chittagong'){
		$price = 80;
	}
	if($receiver_division=='Barishal'){
		$price = 60;
	}
	if($receiver_division=='Khulna'){
		$price = 50;
	}
	if($receiver_division=='Rajshahi'){
		$price = 100;
	}
	if($receiver_division=='Rangpur'){
		$price = 65;
	}
	
}
	      

$sql = "insert into `shipment` (`s_name`, `s_email`, `s_number`, `s_street`, `s_city`,`s_division`,  `r_name`, `r_email`, `r_number`, `r_street`, `r_city`,`r_division`,`price`) values
('$sender_name', '$sender_email', '$sender_num', '$sender_str', '$sender_city', '$sender_division','$receiver_name', '$receiver_email', '$receiver_num', '$receiver_str', '$receiver_city','$receiver_division','$price');";

if($db->query($sql) === TRUE){
	echo "Order placed successfully <br>";
	echo "Price from ". $sender_division ." to " . $receiver_division . " is " . $price;
}else{
	echo "Error: " . $sql . "<br>" . $db->error;
}

$html="<table><tr><td>Customer Name</td><td>$sender_name</td></tr><tr><td>Customer Email</td><td>$sender_email</td></tr><tr><td>Customer Mobile</td><td>$sender_num</td></tr><tr><td>Sender division</td><td>$sender_division</td></tr><tr><td>Reciever division</td><td>$receiver_division</td></tr><tr><td>Price</td><td>$price/td></tr></table>";
	
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
	$mail->addAddress($sender_email);
	$mail->addAddress($receiver_email);
	$mail->IsHTML(true);
	$mail->Subject="Shipment Order";
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

$db->close();
