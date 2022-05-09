<?php
//get data from form  

$name = $_POST['Name'];
$email= $_POST['Email'];
$message= $_POST['Message'];
$to = "tinaranjan51@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" ;
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:C:\Users\palla\OneDrive\Documents\Myweb\thankyou");
?>