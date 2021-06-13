<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$number= $_POST['phone']
$to = "aaryan140905@gmail.com";
$subject = "New Mail From Shalom";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message ;
$headers = "From: noreply@shalom.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>