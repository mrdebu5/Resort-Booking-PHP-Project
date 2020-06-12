<?php
include("vmenu.php");

?><!-- //banner -->
<!-- gallery -->
	<div class="gallery">
		<div class="container">
			<div class="w3ls-heading">
				<h2>Room</h2>
			</div>
			<div class="gallery-grids">
					<?php
					$q="select * from roommaster where hr_id=".$_GET['hr_id'];
					$rs=mysqli_query($cn, $q);
					while($row=mysqli_fetch_array($rs))
					{

					?>
					<div class="col-md-4 gallery-grid">
						<div class="grid">
							<figure class="effect-apollo">
								<a class="example-image-link" href="vroom_detail.php?rm_id=<?php print $row['rm_id'];?>">
									<img src="<?php print $row['photo'];?>" alt="" width="300px" height="250px" />
									<figcaption>
										<p><?php print $row['price'];?></p>
									</figcaption>	
								</a>
							</figure>
						</div>
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
<!-- //footer -->

</body>
</html>

