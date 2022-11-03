<?php
//get data from form  
$name = $_POST['first_name'];
$email= $_POST['email'];
$number= $_POST['telephone'];
$message= $_POST['message'];
$to = "danishscaria555@mail.com";
$subject = "Mail From paul`s homestay";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n number =" . $number . "\r\n Message =" . $message ;
$headers = "From: noreply@yoursite.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("<Location:index.html");
?>