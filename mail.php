<?php
//get data from form  
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
$name = $_POST['name'];
$number = $_POST['mobile'];
$email = $_POST['email'];
$message= $_POST['message'];

$to = "ankitsingh88331gmail@mail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Mobile number = " . $number .  "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@covidcare.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);

//redirect
header("Location:C:\Users\ankit\Desktop\New folder (2)\thankyou.html");
?>
