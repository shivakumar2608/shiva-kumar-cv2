<?php
//get data from form  
$name = $_POST['name'];
$email= $_POST['email'];
$subject =$_POST['subject'];
$message= $_POST['message'];
$to = "shivakumarchanti12@mail.com";
// $subject = "Mail from Shiva Kumar";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Subject =" . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:cv.html");
?>
