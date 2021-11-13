<?php
//varibale setting
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];
$number = $_REQUEST['ph_no'];

//getting data
$to = "atharvjangam@styloopedia.com";
$subject = "Join Team Stylopedia website";
$txt = "name:-". $name . "\r\nEmail:-". $email ."\r\nPhone".$number."\r\nMessage:-". $message;
$headers = "From: contact@styloopedia.com";

mail($to,$subject,$txt,$headers);


//redirect
header("Location:thankyou.html");
?>