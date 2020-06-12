<?php
include("connect.php");
session_start();
$email=$_POST['email'];
print $email;
$password=$_POST['password'];
print $password;


			$q="select * from userregister where email='$email' and password='$password'";
					$rs=mysqli_query($cn,$q);
					if($row=mysqli_fetch_array($rs))
 					{
 						$_SESSION['reg_id']=$row['reg_id'];
 						header("Location:index.php");

					}
					else
					{
						header("location:vlogin.php");
					}
			

?>