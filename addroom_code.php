<?php
session_start();
$hr_id=$_SESSION['hr_id'];
include("connect.php");
$photo="room/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);

$roomtype=$_POST['roomtype'];
print $roomtype;
$details=$_POST['details'];
print $details;
$price=$_POST['price'];
print $price;
print $photo;

$q="insert into roommaster(hr_id,rt_id,detail,price,photo) values('$hr_id','$roomtype','$details','$price','$photo')";
print $q;
mysqli_query($cn,$q);
header('Location: view_room.php');

?>