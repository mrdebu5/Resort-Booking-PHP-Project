<?php
session_start();
if(!isset($_SESSION['hr_id']))
{
	header("location:login.php");
}
?><!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Resort Booking add room page </title>
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
					<h2>add room</h2>
				</div>
				<div class="agileits-border"> </div>
			</div>
			
			
			<div class="col-md-4 col-md-offset-4">

				<form action="addroom_code.php" enctype="multipart/form-data" method="post">
					<div class="form-group">
						<label for="exampleFormControlSelect1">Room Type</label>
						<select class="form-control" name="roomtype">
							<option value="1">Suit</option>
							<option value="1">Delux</option>
							<option value="1">Super Delux</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleFormControlTextarea1">Deatils</label>
						<textarea class="form-control" name="details" placeholder="enter details about room" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Price </label>
						<input class="form-control" type="text" name="price" placeholder="Please enter the price">
					</div>
					<div class="form-group">
						<label for="exampleFormControlFile1">Photo</label>
						<input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
					</div>
					<div class="form-group">
						<button class="btn1" type="submit">Submit</button>
					</div>
					
				</form>


				<!-- <form action="addroom_code.php" method="post">
				<div class="col-sm-3"></div>
				<div class="col-sm-8">
				
				Room Type<br><select name="roomtype">
								<option value="1">Suit</option>
								<option value="1">Delux</option>
								<option value="1">Super Delux</option>
							</select>
				<br><br>Detail<br><textarea name="details" placeholder="enter details about room"></textarea>
				<br><br>Price<br><input type="text" name="price" placeholder="enter price">	
				<br><br>Photo<br><input type="file" name="photo">
				<br><br><button class="btn1" type="submit">Submit</button>

				</div>

			</form> -->

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

