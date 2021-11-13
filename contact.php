<?php
//varibale setting
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

//getting data
$to = "atharvjangam@styloopedia.com";
$subject = "Mail from Stylopedia website";
$txt = "name:-". $name . "\r\nEmail:-". $email . "\r\nMessage:-". $message;
$headers = "From: contact@styloopedia.com";

mail($to,$subject,$txt,$headers);


//redirect
header("Location:thankyou.html");
?>