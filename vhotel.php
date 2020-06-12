<!DOCTYPE html>
<html>
<head>
	<title>Resort Booking Hotels Details Page</title>
</head>
<body>

<?php
include("vmenu.php");

?><!-- //banner -->
<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<div class="w3ls-heading">
				<h2>All Hotels Details</h2>
			</div>
			<div class="gallery-grids">
					<?php
					$q="select * from hotelregister ";
					$rs=mysqli_query($cn, $q);
					while($row=mysqli_fetch_array($rs))
					{

					?>	
					<div class="col-md-4 ">
						<?php print $row['name'];?>
							<br><a href="vroom.php?hr_id=<?php print $row['hr_id'];?>">View Room</a>
							<br><a href="vgallery.php?hr_id=<?php print $row['hr_id'];?>">View Gallery</a>
							<br><a href="vreview.php?hr_id=<?php print $row['hr_id'];?>">View Reivew</a>
						</div>
					<?php
					}
					?>	
							<div class="clearfix"> </div>
					<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>
		</div>
	</div>
	<!-- //gallery -->
<!-- footer -->
<?php 
	include("footer.php");
?>
</body>
</html>

