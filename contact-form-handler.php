<?php
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $message=$_POST['message'];

$to='jerrindawny707@gmail.com';
$subject='E-Resume Form Submission';
$message="Name: ".$name."\n". "Phone: ".$phone."\n". "Wrote the following: "."\n\n".$message;
$headers="From: ".$email;

 if(mail($to,$subject,$message,$headers)){
    echo"<h1>Response Sent Successfully! Thank You"." ".$name.", We will contact you soon! </h1>";
    }
 
 else{
    echo"Something went wrong!";
    }
 }
?>