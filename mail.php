<?php
	$from = $_POST['email']; // this is the sender's Email address
	$to = "info@sarangapanivm.com"; 
	$subject = "Sarangapani Vaira Maligai";
// my fields    
	$name = $_POST['firstname'].' '.$_POST['lastname'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$msg = $_POST['message'];
	
//mail content 
	$message = "
	Name: $name \n
	Email Id: $email \n
	Phone Number: $phone \n
	Message: $msg \n";
	
	
// mail content end	
$headers  = "From:" .$from."< ". $email." >\n";	
	if(mail($to,$subject,$message,$headers))    
	{
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
	else{
        echo "Error on sending your mail... Plese try again";
    }
	
   // header('Location: thank_you.php');
    
?>