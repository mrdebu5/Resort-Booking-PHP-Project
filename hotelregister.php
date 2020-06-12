<!DOCTYPE html>
<html>
<head>
	<title>Resort Booking Hotel Register Page</title>
</head>
<body>

	<?php
	include("vmenu.php");
	?>
	<!-- //banner -->
	<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
				<div class="w3ls-heading">
					<h2>Hotel Register</h2>
				</div>
				<div class="agileits-border"> </div>
			</div>
			
			<form action="hotelregister_code.php" enctype="multipart/form-data" method="post">
			<div class="col-md-4 col-md-offset-4">

				<div class="form-group">
					<label for="exampleFormControlSelect1">Name</label><br>
						<input class="form-control" type="text" name="name" placeholder="Please enter name of hotel">
				</div>
				<div class="form-group">
						<label for="exampleFormControlTextarea1">Address</label>
						<textarea class="form-control" name="address" placeholder="enter details about hotel" rows="3"></textarea>
					</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Area</label><br>
						<input class="form-control" type="text" name="area" placeholder="Please enter name of area">
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Email</label><br>
						<input class="form-control" type="text" name="email" placeholder="Please enter your email">
				</div>
				
				<div class="form-group">
					<label for="exampleFormControlSelect1">Contact</label><br>
						<input class="form-control" type="text" name="contact" placeholder="Please enter your concat number">
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Password</label><br>
						<input class="form-control" type="text" name="password" placeholder="Please enter your password">
				</div>
										

					<div class="form-group">
						<button class="btn1" type="submit">Submit</button>
					</div>
					
				</form>
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

