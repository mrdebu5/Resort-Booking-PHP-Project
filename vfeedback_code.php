<?php
include("connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$massage=$_POST['msg'];
$date=date("Y-m-d");
$q="insert into feedback(name,email,massage,date) values('$name','$email','$massage','$date')";
mysqli_query($cn,$q);
PRINT $q;
header("location:vfeedback.php");
?>