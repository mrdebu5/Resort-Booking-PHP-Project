<?php
session_start();
include("connect.php");
$todate=$_POST['todate'];
$fromdate=$_POST['fromdate'];
$child=$_POST['child'];
$adult=$_POST['adult'];
$rm_id=$_POST['rm_id'];
$date=date("yyyy-mm-dd");
$reg_id=1;
$q="insert into booking (reg_id,to_date,from_date,noofchild,noofadult,rm_id,bookingdate) values('$reg_id','$todate','$fromdate','$child','$adult','$rm_id','$date')";
mysqli_query($cn,$q);
print $q;
header("Location:vthank.php");
?>