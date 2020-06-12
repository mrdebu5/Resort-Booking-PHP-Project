<?php
include("connect.php");
$title=$_POST['title'];
$g_id=$_POST['g_id'];
print $title;
$photo="gallery/".$_FILES['photo']['name'];
move_uploaded_file($_FILES['photo']['tmp_name'],$photo);
print $photo;
$q="update gallary set title='$title', photo='$photo' where g_id='$g_id'";
mysqli_query($cn,$q);
header("Location:view_gallery.php");
?>