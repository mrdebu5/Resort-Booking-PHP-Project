<?php
session_start();
include("connect.php");
$title=$_POST['title'];
print $title;

$photo="gallery/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);

print $photo;
$hr_id=$_SESSION['hr_id'];
$q="insert into gallary(hr_id,title,photo) values('$hr_id','$title','$photo')";
print $q;
mysqli_query($cn,$q);
header("Location:view_gallery.php");
?>