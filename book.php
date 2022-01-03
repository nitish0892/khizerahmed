<?php

$name = $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$date= $_POST['appointment'];
$to = "digifinitesolutions@gmail.com";
$subject = "Mail From Khizer sir's website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Date = ". $date ."\r\n Phone =" . $phone;
$headers = "From: mywebsite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
// header("Location:thank.html");
?>