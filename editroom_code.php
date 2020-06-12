<?php
include("connect.php");
$roomtype=$_POST['roomtype'];
print $roomtype;
$rm_id=$_POST['rm_id'];
$details=$_POST['details'];
print $details;

$price=$_POST['price'];
print $price;

$photo="gallery/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);

$hr_id=1;
$q="update roommaster set  photo='$photo',price='$price',detail='$details' where rm_id='$rm_id'";
mysqli_query($cn,$q);

print $q;

header("location:view_room.php");

?>