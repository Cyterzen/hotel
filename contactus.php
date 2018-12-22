<?php

if(isset($_POST['submit'])){
$name =$_POST['name'];
$mailFrom =$_POST['mail'];
$number =$_POST['number'];
$site =$_POST['site'];
$message =$_POST['message'];
$mailTo = "hotelmog@gmail.com";
$headers = "From: ".$mailFrom;
$txt = "You have received an email from ".$name.".\n\n".$message;
mail($mailTo, $number, $txt, $headers);
header("Location: contact.php?mailsend");
}