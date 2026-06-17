<?php
session_start();
require_once('include/config.php');
$data = $_POST;
$err = '';

//echo "<pre>"; print_r($data); exit;


 if($_SERVER['HTTP_HOST'] != 'localhost'){
if(!empty($_POST)){
		$recaptcha_secret = SECRET_KEY;
		$recaptcha_response = $_POST['g-recaptcha-response'];

		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$res_data = [
			'secret' => $recaptcha_secret,
			'response' => $recaptcha_response
		];

		$options = [
			'http' => [
				'method' => 'POST',
				'content' => http_build_query($res_data)
			]
		];

		$context = stream_context_create($options);
		$result = file_get_contents($url, false, $context);
		$json = json_decode($result);

		if ($json->success) {
		  
		} else { 
		   	$err = 1;
		} 
   }
   }





if(isset($data['name']) && $data['name'] != ''){
	$name = $data['name'];
}else{
	$name ='';
	$err = 1;
}


if(isset($data['email']) && $data['email'] != ''){
	if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
		$err = 1;
		$email  = '';
	 }else{
		 $email = $data['email'];
	 }
}else{
	$err = 1;
	$email  = '';
}

if(isset($data['phone']) && $data['phone'] != ''){ 
	if(validateMobileNumber($data['phone'])){
		$phone = $data['phone']; 
	}else{ 
		$err = 1;
	}
}else{ 
	$phone ='';
	$err = 1;
}


if(isset($data['country_code']) && $data['country_code'] != ''){
	$country_code = $data['country_code'];
	
}else{
	$country_code ='';
    $err = 1;	
}

if(isset($data['subject']) && $data['subject'] != ''){
	$subject = $data['subject'];
}else{
	$subject ='';		
}

if(isset($data['message']) && $data['message'] != ''){
	$message = $data['message'];
}else{
	$message ='';
}


if(isset($data['country']) && $data['country'] != ''){
	$country = $data['country'];
}else{
	$country ='';
}

if(isset($data['state']) && $data['state'] != ''){
	$state = $data['state'];
}else{
	$state ='';
}


if(isset($data['city']) && $data['city'] != ''){
	$city = $data['city'];
}else{
	$city ='';
}










if($err == ''){ 
			$mail_message = "<html>
			   <head>
			   </head>
			   <body>
				  <table width='80%' border='0' cellpadding='3' cellspacing='3' style='border:#EFEFEF 5px solid; padding:5px;'>
					
					 <tr>
						<td  align='left' valign='middle'><h3><b> ".WEBSITE_NAME." </b></h3></td>
					 </tr>
					
					 <tr>
						<td class='style2'>Hi admin!  New contact enquiry has been recived from ".WEBSITE_NAME."</td>
					 </tr>
					 <tr>
						<td>&nbsp;</td>
					 </tr>
					 <tr>
						<td align='left' valign='middle'>
						   <table width='98%' border='0' align='right' cellpadding='5' cellspacing='5' style='background-color:#F5F5F5'>
							  
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Name</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$name."</td>
							  </tr>
							   
							 <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Email</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$email."</td>
							  </tr>
							   <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Phone</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$country_code.' '.$phone."</td>
							  </tr>
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Country</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$country."</td>
							  </tr>
							   <tr>
								 <td width='30%' align='left' valign='top' class='style2'>State</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$state."</td>
							  </tr>
							   <tr>
								 <td width='30%' align='left' valign='top' class='style2'>City</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$city."</td>
							  </tr>
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Subject</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$subject."</td>
							  </tr>
							   <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Message</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$message."</td>
							  </tr>
						   </table>
						</td>
					 </tr>
					
					 <tr>
						<td>&nbsp;</td>
					 </tr>
				  </table>
			   </body>
			</html>"; 
		   
		  
		   $name = mysqli_real_escape_string($conn, $name);
		   
		   $subject = mysqli_real_escape_string($conn, $subject);
		   
		   $message = mysqli_real_escape_string($conn, $message);
		   
		   $created_at = date('Y-m-d H:i:s');
		   $sql = "INSERT INTO `contacts` (`name`, `email`, country_code,`phone`, `subject`, `country`, `state`, `city`,`message`, `created_at`) VALUES ('".$name."', '".$email."','".$country_code."', '".$phone."', '".$subject."', '".$country."', '".$state."', '".$city."','".$message."','".$created_at."')";
		   $conn->query($sql);
		   
			if($_SERVER['HTTP_HOST'] != 'localhost'){
				$recipient = ADMIN_MAIL;
				$subject =  'Hi admin!  New contact enquiry has been recived from '.WEBSITE_NAME;
				$message = $mail_message; 
				$headers = "Content-Type: text/html; charset=UTF-8\r\n";
				$headers .= 'From: '.trim(WEBSITE_NAME). '<'.FROM_MAIL.'>'."\r\n";
				mail($recipient, $subject, $message, $headers);
				mail('sumit@royalways.com', $subject, $message, $headers);
				mail('manjit@rtpltech.com', $subject, $message, $headers);
			}
		   $_SESSION['user_name'] = $name;
			echo '<script>window.location.href="thanks.php"; </script>'; die;
}else{
			echo '<script>window.location.href="index.php"; </script>'; die;
}




?>