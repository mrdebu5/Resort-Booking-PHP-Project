<?php
session_start();
include("connect.php");
$msg=$_POST['msg'];
$hr_id=$_POST['hr_id'];
$reg_id=$_SESSION['reg_id'];
$date=date("Y-m-d");
$q="insert into review (hr_id,reg_id,massag,date) values('$hr_id','$reg_id','$msg','$date')";
mysqli_query($cn,$q);
print $q;
header("location:vreview.php?hr_id=$hr_id");
?>