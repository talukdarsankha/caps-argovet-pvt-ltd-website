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

		<!-- Page Header Section Start Here -->
		<section class="page-header bg_img padding-tb">
			<div class="overlay"></div>
			<div class="container">
				<div class="page-header-content-area">
					<h4 class="ph-title">Blog Posts</h4>
					<ul class="lab-ul">
						<li><a href="newsblog.php">All</a></li>
						<li><a class="active">News</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Page Header Section Ending Here -->

	    <?php include("include/blog.php");?>	

		<?php include("include/footer.php");?>	

		

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
		<!-- scrollToTop ending here -->


		<script src="assets/js/jquery.js"></script>
		<script src="assets/js/fontawesome.min.js"></script>
		<script src="assets/js/waypoints.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/swiper.min.js"></script>
		<script src="assets/js/jquery.countdown.min.js"></script>
		<script src="assets/js/jquery.counterup.min.js"></script>
		<script src="assets/js/isotope.pkgd.min.js"></script>
		<script src="assets/js/lightcase.js"></script>
		<script src="assets/js/functions.js"></script>
	</body>

</html>