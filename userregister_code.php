<?php
include("connect.php");
extract($_POST);
$q="insert into userregister(name,email,password,address,contact,gender,brithdate) values('$name','$email','$password','$address','$contact','$b1','$date')";
print $q;
mysqli_query($cn,$q);
header("Location:userregister.php");
?>