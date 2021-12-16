<?php
//get data from form  

// $name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "rounaklongani@gmail.com";
$subject = "Feedback Mail From SENJU";
$txt ="\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@senju.in" . "\r\n" .
"CC: rongamingg@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>