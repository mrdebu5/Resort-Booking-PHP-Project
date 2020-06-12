<?php
include("vmenu.php");
$q="select * from roommaster where rm_id=".$_GET['rm_id'];
$rs=mysqli_query($cn, $q);
$row=mysqli_fetch_array($rs);
?>
<!-- //banner -->
<!-- about -->
<!-- courses -->
	<div class="courses">
		<div class="container"> 
			<div class="w3ls-heading">
				<h2>Room Detail</h2>
			</div>
			<div class="agileits_w3layouts_team_grids w3ls_courses_grids">
				<div class="col-md-6 w3ls_banner_bottom_left w3ls_courses_left">
					<div class="w3ls_courses_left_grids">
						<div class="w3ls_courses_left_grid">
							<h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Details</h3>
							<p><?php print $row['detail'];?></p>
						</div>
						<?php
						if(isset($_SESSION['reg_id']))
						{
							?>
						<a href="vbook.php?rm_id=<?php print $row['rm_id'];?>"><p style="font-family: Segoe Script, serif; font-size:20pt;">Book Now</p></a>
						<?php
						}
						else
						{
						?>
						<a href="vlogin.php"><p style="font-family: Segoe Script, serif; font-size:20pt;">To Book Room Login First</p></a>
						
						<?php
						}
						?>

					</div>
				</div>
				<div class="col-md-6 agileits_courses_right">
					<img src="<?php print $row['photo'];?>" style="width: 500px;height: 70%" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //courses -->
<!-- stats -->
<!-- //stats -->
<!-- stats-bottom-banner -->
<!-- //stats-bottom-banner -->	
<!-- //about -->
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

</body>
</html>

