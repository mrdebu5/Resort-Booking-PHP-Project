<!DOCTYPE html>
<html>
<head>
	<title>Resort Booking Feedback Page</title>
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
				<h2>Feedback</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>
			<div class="contact-form">
			<!-- Custom form of login -->
					<form class="loginform" action="vfeedback_code.php" method="post">
					  <div class="form-group row">
					    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
					    <div class="col-sm-5">
					      <input type="name" name="name" class="form-control" id="inputEmail3" placeholder="Name">
					    </div>
					  </div>
					  
					  <div class="form-group row">
					    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
					    <div class="col-sm-5">
					      <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="inputPassword3" class="col-sm-2 col-form-label">Message</label>
					    <div class="col-sm-5">
					      <textarea name="msg" class="form-control" id="inputPassword3" placeholder="Message"></textarea>
					    </div>
					  </div>
					  <div class="form-group row">
					    <div class="col-sm-10">
					      <button type="submit" class="btn btn-primary">Submit</button>
					    </div>
					  </div>
					</form>
			<!-- End of custom form -->
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

