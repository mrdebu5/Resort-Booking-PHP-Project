<?php
include("connect.php");
$name=$_POST['name'];
print $name;
$address=$_POST['address'];
print $address;
$area=$_POST['area'];
print $area;
$email=$_POST['email'];
print $email;
$contact=$_POST['contact'];
print $contact;
$password=$_POST['password'];
print $password;

$hr_id=1;
$q="insert into hotelregister(name,address,area,email,contact,password) values('$name','$address','$area','$email','$contact','$password')";
print $q;
mysqli_query($cn,$q);
header("Location:hotelregister.php");
?>