<!DOCTYPE html>
<html>
<head>
	<title>Resort Booking User Register  Page</title>
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
				<h2>User Register</h2>
			</div>
			<div class="agileits-border"> </div>
			</div>
			
			<form action="userregister_code.php" enctype="multipart/form-data" method="post">
			<div class="col-md-4 col-md-offset-4">

				<div class="form-group">
					<label for="exampleFormControlSelect1">Name</label><br>
						<input class="form-control" type="text" name="name" placeholder="Please enter name of user">
				</div>
				<div class="form-group">
						<label for="exampleFormControlTextarea1">Email</label>
						<textarea class="form-control" name="email" placeholder="Please enter your email" rows="3"></textarea>
					</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Password</label><br>
						<input class="form-control" type="password" name="password" placeholder="Please enter your password">
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Address</label><br>
						<textarea class="form-control" name="address" placeholder="Please enter your address" rows="3"></textarea>
				</div>
				
				<div class="form-group">
					<label for="exampleFormControlSelect1">Contact</label><br>
						<input class="form-control" type="text" name="contact" placeholder="Please enter your concat number">
				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Gender</label><br>
					<input type="radio" name="b1">Male<input type="radio" name="b1">Female

				</div>
				<div class="form-group">
					<label for="exampleFormControlSelect1">Brith Date</label><br>
					<input class="form-control" type="Date" name="date" placeholder="Please enter your brithdate">

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

