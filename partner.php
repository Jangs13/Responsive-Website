<?php
//varibale setting
$name = $_POST['name'];
$email = $_POST['Email'];
$message = $_POST['Message'];
$number = $_POST['ph_no'];
$Salonname = $_POST['Sname'];

//getting data
$to = "atharvjangam@styloopedia.com";
$subject = "Join Team Stylopedia website";
$txt = "name:-". $name . "\r\nEmail:-". $email . "\r\nPhone" . $number . "\r\nSalon Name:-". $Salonname. "\r\nMessage:-". $message;
$headers = "From: contact@styloopedia.com";

mail($to,$subject,$txt,$headers);


//redirect
header("Location:thankyou.html");
?>