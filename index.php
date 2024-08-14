<?php include("include/head.php");?>

<body>

	<!-- loader and search Start Here -->
	<?php include("include/loader.php");?>
	<!-- loader and search Ending Here -->

	<!-- Mobile Menu Start Here -->
	<?php include("include/mobilemenu.php");?>
	<!-- Mobile Menu Ending Here -->

	<!-- desktop menu start here -->


	<?php include("include/header.php");?>

	<!-- desktop menu ending here -->

	<!-- Banner Section Start Here -->
	<?php include("include/slider.php"); ?>
	<!-- Banner Section Ending Here -->

	<style>
		.blink_me {
			animation: blinker 2s linear infinite;
		}

		@keyframes blinker {
			50% {
				opacity: 0;
			}
		}
	</style>
	<div class="post-item-2 quite-post col-lg-12 col-sm-12 col-md-12" style="margin: auto;">
		<div class="post-inner">
			<div class="post-content">
				<div class="qute-content text-center blink_me" style="color: red;">
					<h6>Today's Date :
						<?php echo date("d/m/y") ?>
					</h6>
					<h6 style="color: red;">Fresh Poultry Rate :</h6>
					<h6 style="color: red;">Lame Poultry Rate :</h6>
				</div>
			</div>
		</div>
	</div>
	<!-- about section start here -->
	<?php include("include/about.php"); ?>
	<!-- about section ending here -->

	<!-- product category section start here -->
	<?php include("include/products.php"); ?>
	<!-- product category section ending here -->

	<!-- blog section start here -->

	<!-- blog section ending here -->

	<!-- blog section start here -->
	<?php include("include/newsletter.php");?>
	<!-- blog section ending here -->

	<!-- footer section start here -->
	<?php include("include/footer.php");?>
	<!-- footer section start here -->

	<!-- scrollToTop start here -->
	<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span
			class="pluse_2"></span></a>
	<!-- scrollToTop ending here -->

	<?php include("include/script.php");?>

</body>

<a href="https://abnsealcollege.ac.in/wp-content/uploads/2023/10/nt4.pdf" target="_blank"><img decoding="async"
		src="https://abnsealcollege.ac.in/wp-content/uploads/2023/10/blinking_new.gif"
		style="width: 25px;float: left; display:null"></a>

</html>