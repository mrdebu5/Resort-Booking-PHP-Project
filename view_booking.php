<?php
session_start();
if(!isset($_SESSION['hr_id']))
{
	header("location:login.php");
}
$hr_id=$_SESSION['hr_id'];
?><
<!DOCTYPE html>
<html lang="en">
<head>
<title>Resort Booking View boking page</title>
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
include("connect.php");
?><!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>View Booking</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>
			
			
			<div class="contact-form">
				<table class="table">
					<tr>
						<th>Bookingdate</th>
						<th>No of adult</th>
						<th>No of child</th>
						<th>From date</th>
						<th>To date</th>
						<th>Room no</th>
						<th>User Detail</th>
					</tr>
					<?php
					$q="select b.*,u.*,r.* from booking b ,userregister u,roommaster r where u.reg_id=b.reg_id and r.hr_id=$hr_id";
					print $q;
					$rs=mysqli_query($cn,$q);
					while($row=mysqli_fetch_array($rs))
					{
					?>						
					<tr>
						<td><?php print $row['bookingdate'];?></td>
						<td><?php print $row['noofadult'];?></td>
						<td><?php print $row['noofchild'];?></td>
						<td><?php print $row['from_date'];?></td>
						<td><?php print $row['to_date'];?></td>
						<td><?php print $row['rm_id'];?></td>
						<td>
								<?php print $row['name'];?><br>
								<?php print $row['email'];?><br>
								<?php print $row['address'];?><br>
								<?php print $row['contact'];?><br>
									
						</td>
					
					</tr>


					<?php
				}
				?>
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

