					<?php
					include("connect.php");
					session_start();
					if(!isset($_SESSION['hr_id']))
{
	header("location:login.php");
}
						$rm_id=$_GET['rm_id'];

					$q="select * from roommaster where rm_id='$rm_id'";
					$rs=mysqli_query($cn,$q);
					$row=mysqli_fetch_array($rs);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Resort Booking Edit Room Page</title>
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
				<h2>edit room </h2>
			</div>
				<div class="agileits-border"> </div>
			</div>
			
			
			<div class="contact-form">
				<form action="editroom_code.php" method="post" enctype="multipart/form-data">
				<div class="col-sm-3"></div>
				<div class="col-sm-8">
				<input type="hidden" name="rm_id" value="<?php print $rm_id;?>">
				Room Type<br><select name="roomtype">
								<option value="1">Suit</option>
								<option value="2">delux</option>
								<option vlaue="3">super delux</option>
				<br><br>Detail<br><textarea name="details" placeholder="enter details about room"><?php print $row['detail'];?></textarea>
				<br><br>Price<br><input type="text" name="price" value="<?php print $row['price'];?>" placeholder="enter price">	
				<br><br>Photo<br><input type="file" name="photo"> 
				<br><br><button class="btn1">Edit</button>



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

