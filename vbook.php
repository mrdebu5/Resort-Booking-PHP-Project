<?php
include("vmenu.php");
?><!-- //banner -->
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			<div class="w3ls-heading">
				<h2>Booking</h2>
			</div>
				<div class="agileits-border"> </div>
			</div>
			
			<form action="vbook_code.php" enctype="multipart/form-data" method="post">
						
				
				
				<div class="form-group">
						<label for="exampleFormControlSelect1">To Date</label><br>
						<input class="form-control" type="date" name="todate" placeholder="Please enter the title">
				</div>
				<div class="form-group">
						<label for="exampleFormControlSelect1">From Date</label><br>
						<input class="form-control" type="date" name="fromdate" placeholder="Please enter the title">
				</div>
				<div class="form-group">
						<label for="exampleFormControlSelect1">No of Child</label><br>
						<input class="form-control" type="text" style="width:730px" name="child" placeholder="Please enter No of Child">
				</div>
				<div class="form-group">
						<label for="exampleFormControlSelect1">No Of Adult</label><br>
						<input class="form-control" style="width:730px" type="text" name="adult" placeholder="Please enter No of Adult">
				</div>
				<input type="hidden" name="rm_id" value="<?php print $_GET['rm_id'];?>">
					<div class="form-group">
						<button class="btn1" type="submit">Submit</button>
					</div>
	
		</div>
	</div>
	<!-- //contact -->


<!-- footer -->
<?php
	include("footer.php");
?>
<!-- //footer -->

</body>
</html>

