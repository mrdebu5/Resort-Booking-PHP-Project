<?php
include("connect.php");
session_start();
$email=$_POST['email'];
print $email;
$password=$_POST['password'];
print $password;


			$q="select * from hotelregister where email='$email' and password='$password'";
					$rs=mysqli_query($cn,$q);
					if($row=mysqli_fetch_array($rs))
 					{
 						$_SESSION['hr_id']=$row['hr_id'];
 						header("Location:hhome.php");

					}
					else
					{
						header("location:login.php");
					}
			print $q;


?>