<?php
//get data from form  
$name = $_POST['first name'];
$email= $_POST['email'];
$adress= $_POST['adress'];
$city=$_POST['city'];
$to = "iyadsalmi320@gmail.com";
$subject = "Mail From website";
$txt ="first name = ". $name . "\r\n  Email = " . $email . "\r\n adress=". $adress. "\r\n city=".$city
$headers = "From: IYAD-FIT@gmail.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?> 