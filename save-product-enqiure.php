<?php
session_start();
require_once('include/config.php');
$data = $_POST;
$err = '';
//echo "<pre>"; print_r($data); exit;
if(isset($data['name']) && $data['name'] != ''){
	$name = $data['name'];
}else{
	$name ='';
	$err = 1;
}

if(!empty($data['g-recaptcha-response']) && !empty($data['hidden-grecaptcha']) && $data['g-recaptcha-response'] == $data['hidden-grecaptcha'] ){
		if(strlen($data['hidden-grecaptcha']) < 1000){
			//$err = 1;
		}
   }else{
		//$err = 1;
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



if(isset($data['grade']) && $data['grade'] != ''){
	$grade = $data['grade'];
	
}else{
	$grade ='';	
    $err = 1;	
}

if(isset($data['size']) && $data['size'] != ''){
	$size = $data['size'];
	
}else{
	$size ='';
    $err = 1; 	
}

if(isset($data['quantity']) && $data['quantity'] != ''){
	$quantity = $data['quantity'];
	
}else{
	$quantity ='';
     $err = 1;	
}

if(isset($data['company_name']) && $data['company_name'] != ''){
	$company_name = $data['company_name'];
	
}else{
	$company_name ='';
    $err = 1;	
}

if(isset($data['address']) && $data['address'] != ''){
	$address = $data['address'];
}else{
	$address ='';
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
          
		  $product_name = $data['product_name'];
		  $page_link = $data['page_link'];
		  $created_at = date('Y-m-d H:i:s');
          $sql = "insert into product_enquiries (name, email,country_code, phone, country,state,city,company_name, address, product_name, page_link, grade, size, quantity, created_at) values ('".$name."', '".$email."','".$country_code."', '".$phone."','".$country."','".$state."','".$city."', '".$company_name."', '".$address."', '".$product_name."', '".$page_link."', '".$grade."', '".$size."', '".$quantity."', '".$created_at."');";
          $conn->query($sql);
          
			$mail_message = "<html>
			   <head>
			   </head>
			   <body>
				  <table width='80%' border='0' cellpadding='3' cellspacing='3' style='border:#EFEFEF 5px solid; padding:5px;'>
					
					 <tr>
						<td  align='left' valign='middle'><h3><b> ".WEBSITE_NAME." </b></h3></td>
					 </tr>
					
					 <tr>
						<td class='style2'>Hi admin!  New product enquiry has been recived from ".WEBSITE_NAME."</td>
					 </tr>
					 <tr>
						<td>&nbsp;</td>
					 </tr>
					 <tr>
						<td align='left' valign='middle'>
						   <table width='98%' border='0' align='right' cellpadding='5' cellspacing='5' style='background-color:#F5F5F5'>
							  <tr>
							   <td colspan='3' align='left' valign='top'><h3>Form Details<h3></td>
							  </tr>
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
								 <td width='30%' align='left' valign='top' class='style2'>Company Name</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$company_name."</td>
							  </tr>
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Address</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$address."</td>
							  </tr>
							   <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Message</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$message."</td>
							  </tr>
							  <tr>
							    <td colspan='3'><hr></td>
							  </tr>
							  <tr>
							   <td colspan='3' align='left' valign='top'><h3>Product Details<h3></td>
							  </tr>
							   <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Product Name</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$product_name."</td>
							  </tr>
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Page Link</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'><a href='".$page_link."'>".$page_link."</a></td>
							  </tr>
							  
							   <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Grade</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$grade."</td>
							  </tr>
							  <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Size</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$size."</td>
							  </tr>
							   <tr>
								 <td width='30%' align='left' valign='top' class='style2'>Quantity</td>
								 <td width='5%' align='left' valign='top' class='style2'>:</td>
								 <td width='65%' align='left' valign='top' class='style3'>".$quantity."</td>
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
		   if($_SERVER['HTTP_HOST'] != 'localhost'){
			$recipient = ADMIN_MAIL;
			$subject =  'Hi admin!  New product enquiry has been recived from '.WEBSITE_NAME;
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