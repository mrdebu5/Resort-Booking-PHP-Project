<html>
<head><title>Resort Booking Home Page</title></head>
<body>
<?php
include("vmenu.php");
?>
<!-- //banner -->
<!-- welcome -->
	<div class="about">
		<div class="container">
			<div class="w3ls-heading">
				<h2>welcome</h2>
			</div>
			<div class="w3-about-grids">
				<div class="col-md-6 w3-about-left">
					<h5>Our aim is make your day special</h5>
					 <p>So,basically we are provide so many resorts to make your holiday spcial:)
						you can book the resort anytime anywhere,Our perpose is give the best facility
						to user to make there life luxurios,The all resort on out list is provide luxurios
						facilitys like Airconditioning,Gym,Football ground,Basketball ground,Swimming Pool etc..
						<span>You can see the same photos on right side the laxurious facilites,
						We love to tell you our india's beautiful resort in many states like Rajsatan,
						Gujarat,Maharastra etc...The more you see it,The more you love it...
						Treat yourself! Your dream resort stay is just a few clicks away:)</span>





					</p>
				</div>
				<div class="col-md-6 w3-about-right">
					<div class="about-img-grids">
						<div class="col-md-7 about-img">
							<img src="images/4.jpg" alt=" " />
						</div>
						<div class="col-md-5 about-img about-img1">
							<img src="images/6.jpg" alt=" " />
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="about-img-grids">
						<div class="col-md-5 about-img about-img1">
							<img src="images/7.jpg" alt=" " />
						</div>
						<div class="col-md-7 about-img">
							<img src="images/5.jpg" alt=" " />
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
				<center><p style="font-family: Segoe Script, serif; font-size:20pt;"><b>Top 6 Resort List</b></p></center> <br><br>		
	<div class="row">
			<div class="container">
						<?php
						$q="select * from  hotelregister limit 6";
						$rs=mysqli_query($cn,$q);
						while($row=mysqli_fetch_array($rs))
						{
						?>

						<div class="col-md-4 about-img">
							<a href="vroom.php?hr_id=<?php print $row['hr_id'];?>"><?php print $row['name'];?>
						</div>
						<?php
					}
						?>
						<div class="clearfix"> </div>
					</div>
	</div><br><br>

	         <a href="vhotel.php"><center><p style="font-family: Segoe Script, serif; font-size:20pt;">Do you Want to see more resort?</center></a>
<!-- //welcome -->
				
<!-- footer -->
	<?php
	include("footer.php");
	?>
<!-- //footer -->

</body>
</html>

