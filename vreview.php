<!DOCTYPE html>
<html>
<head><title>Resort Booking Review Page</title></head>
<?php
include("vmenu.php");
$hr_id=$_GET['hr_id'];
?><!-- //banner -->
<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<div class="w3ls-heading">
				<h2>Review</h2>
			</div>
			<div class="gallery-grids">
					<?php
					$q="select r.*,u.* from review r, userregister u where r.reg_id = u.reg_id and r.hr_id=$hr_id";
				
					$rs=mysqli_query($cn, $q);
					while($row=mysqli_fetch_array($rs))
					{

					?>

					<table border="1" align="center">
							<div class="col-md-4 gallery-grid">
							<tr>	<th><b>Name</b></th>  
										<td><?php print $row['name'];?><br></td>
							
							</tr>
							<tr>	<th><b>Email</b></th>
										<td><?php print $row['email'];?><br></td>
								
							</tr>			
							<tr>	<th><b>Massage</b></th>
										<td><?php print nl2br($row['massag']);?></td>
							</tr>
							</div>
					</table>
					

					<?php
					}
					?>	
							<div class="clearfix"> </div>
					<script src="js/lightbox-plus-jquery.min.js"> </script>
			</div>
					<?php
					if(isset($_SESSION['reg_id']))
					{
					?>
					<div class="contact-form">
				<form action="vreview_code	.php" enctype="multipart/form-data" method="post">
				<div class="col-sm-3"></div>
				
				<div class="col-sm-8">
				<input type="hidden" name="hr_id" value="<?php print $hr_id;?>">
				
				<div class="form-group">
						<label for="exampleFormControlSelect1">Review</label><br>
						<textarea class="form-control" style="width:730px"  name="msg" placeholder="Please Enter Review"></textarea>
				</div>
				<input type="hidden" name="rm_id" value="<?php print $_GET['rm_id'];?>">
					<div class="form-group">
						<button class="btn1" type="submit">Submit</button>
					</div>
	
		</div>
		<?php
	}
	else
	{
	?>
	<a href="vlogin.php"> Give you must have to login</a>
	<?php
	}
?>
		</div>
	</div>
	<!-- //gallery -->
<!-- footer -->
	<?php
	include("footer.php");
?>
<!-- //footer -->
<!-- start-smooth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smooth-scrolling -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
</body>
</html>

