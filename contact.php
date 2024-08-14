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
		<div class="over"></div>
		<div class="container">
			<div class="page-header-content-area">
				<h4 class="ph-title">Contact Us</h4>
				<ul class="lab-ul">
					<li><a href="index.php">Home</a></li>
					<li><a class="active">Connect</a></li>
				</ul>
			</div>
		</div>
	</section>
	<!-- Page Header Section Ending Here -->




	<section class="p-4 m-2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-6 col-sm-12">
					<form action="" method="post" >
						<h3 class="text-center text-dark">DO YOU HAVE ANY QUESTIONS?</h3>

						<?php

						if(isset($_POST['submit'])){
						$name=$_POST['name'];
						$mobile_no=$_POST['mobile'];
						$email=$_POST['email'];
						$msg=$_POST['msg'];
						
						if(!empty("$name")&& !empty("$mobile_no")&& !empty("$email")&& !empty("$msg")){
													
							$to      = 'contact@capspoultry.com';
							$subject = 'Mail From The Website.';
							$message = 'Greetings CAPS Poultry';
							$message.=" My Name is: ". $name. "My Contact Details are as follows: ". $mobile_no.", ". $email." and my message is : ".$msg. "<br>Please see out my message.";
						$headers = 'From: '.$email       . "\r\n" .
									'Reply-To: '.$email . "\r\n" .
									'X-Mailer: PHP/' . phpversion();

						ini_set('max_execution_time', 600); ini_set('memory_limit','1024M');            
						if(mail($to, $subject, $message, $headers)){
							echo "The mail has been sent";
							// header("location: join-trader.php");
						
						} else {
							echo "The mail could not be sent";
							// header("location: join-trader.php");
							// echo $name, $mobile_no,$email,$msg;
						}
					}
						}

					?>

						<div class="row">

							<div class="col-md-6">

								<div class="mb-3">
									<label for="name" class="form-label">Name</label>
									<input type="text" class="form-control" id="name" name="name">
								</div>

							</div>

							<div class="col-md-6">

								<div class="mb-3">
									<label for="mobile" class="form-label">Mobile No.</label>
									<input type="text" class="form-control" id="mobile" name="mobile">
								</div>

							</div>

							<div class="form-floating col-md-12">
								<div class="mb-3">
									<label for="email" class="form-label">Email Address</label>
									<input type="email" class="form-control" id="email" name="email">
								</div>
								<textarea class="form-control" placeholder="Leave your Query here"
									id="floatingTextarea2" name="msg" style="height: 100px"></textarea>
								<label for="floatingTextarea2"></label>
							</div>

						</div>

						<div class="submit_button"  style="text-align:center">
							<button type="submit" class="btn btn-success"  name="submit">Submit</button>
						</div>

						

					</form>
				</div>

				<div class="col-md-6 col-lg-6 col-sm-12 p-4">
					<iframe
						src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.235625538771!2d89.85345617533902!3d26.318868685358602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e28500306e2309%3A0xaff9ffbf96464711!2sCaps%20Poultry%20(%20CAPS%20AGROVET%20PRIVATE%20LIMITED)!5e0!3m2!1sen!2sin!4v1705042646930!5m2!1sen!2sin"
						width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
						referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>


		</div>
	</section>

	<?php include("include/footer.php");?>



	<!-- scrollToTop start here -->
	<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span
			class="pluse_2"></span></a>
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