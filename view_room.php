<?php
session_start();
$hr_id=$_SESSION['hr_id'];
include("connect.php");
if(isset($_GET['rm_id']))
{
	$rm_id=$_GET['rm_id'];
	$q="delete from roommaster where rm_id='$rm_id'";
	mysqli_query($cn,$q);
}
?>

<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Resort Booking View Room page</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Mug house Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- tabs -->
<link href="css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
<!-- //tabs -->
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Prompt:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
</head>
<body>
<!-- banner -->

<?php
include("resort_menu.php");
?>
<!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>View Room</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>
			
			
			<div class="contact-form">
				<table class="table">
					<tr>
						<th>Room Details</th>
						<th>Price</th>
						<th>Photo</th>
						<th>Option</th>
					</tr>
					<?php
					$q="select * from roommaster where hr_id='$hr_id'";
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
 					{	
					?>
					
					<tr>
						<td><?php print $row['detail'];?></td>
						<td><?php print $row['price'];?></td>
						<td><img src="<?php print $row['photo'];?>" style="width: 300px;height: 200px"></td>
						<td><a href="edit_room.php?rm_id=<?php print $row['rm_id'];?>">Edit</a> | <a href="view_room.php?rm_id=<?php print $row['rm_id'];?>">Delete</a></td></td>
					<?php
					}
					?>					

					</tr>
				</table>
			</div>	
		</div>
	</div>
	<!-- //contact -->


<!-- footer -->
<?php
include("footer.php");
?>
</body>
</html>

