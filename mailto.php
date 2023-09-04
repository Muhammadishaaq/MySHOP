<?php

$from=$_POST['email'];
$name=$_POST['name'];
$msg=$_POST['msg'];

$sub="$name sent this message.. from OnlineShop";
$headers="From: ".$from;
// echo $sub;
// echo $name;

// mail("gadgetspick@gmail.com",$sub,$msg,$headers) or die("!!! Message not sent !!!");
mail("mianpukhtoonkhan94@gmail.com",$sub,$msg,"From: 123hamza112233@gmail.com") or die("!!! Message not sent !!!");
// mail("@gmail.com",$sub,$msg,"From: 123hamza112233@gmail.com") or die("!!! Message not sent !!!");


// echo "<script>alert('sent')</script>";
// echo "<script>window.location='contact.php'";
header('Location:contact.php');

?>