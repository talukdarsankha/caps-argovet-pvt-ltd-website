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

        <style>
            .page-header {
            margin-top: 82px;
            background: url(assets/images/bg-images/farmer-joining.jpg);
            margin-top: 0px;
            /* padding-top: 0px; */
           
            }

            
           
          
        </style>
       <!-- Page Header Section Start Here -->
		<section class="page-header bg_img padding-tb">
            <div class="overlay" style="opacity: 0.2;"></div>
			<div class="container">
				<div class="page-header-content-area" >
					<h4 class="ph-title">Join Us</h4>
					<ul class="lab-ul">
                        <li><a href="index.php">Home</a></li>
						<li><a class="active">Register</a></li>
					</ul>
				</div>
			</div>
		</section>
		<!-- Page Header Section Ending Here -->

		<section class="p-4 m-2">
			<div class="container">

            <form action="farmer-mail.php" method="post">
             <h3 class="text-center text-success">Register As a Farmer</h3>
                <div class="row">

                    <div class="col-md-6">
                        
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="mobile" class="form-label">Mobile No.</label>
                            <input type="text" class="form-control" id="mobile" name="mobile">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                    </div>

                    <div class="col-md-6">
                        
                        <div class="mb-3">
                            <label for="place" class="form-label">Place</label>
                            <input type="text" class="form-control" id="place" name="place">
                        </div>
                        <div class="mb-3">
                            <label for="shed_size" class="form-label">Shed Size</label>
                            <input type="text" class="form-control" id="shed_size" name="shed_size">
                        </div>
                        <div class="mb-3">
                            <label for="total_area" class="form-label">Total_Area (in Sq. Ft.)</label>
                            <input type="text" class="form-control" id="total_area" name="total_area">
                        </div>

                    </div>

                    <div class="form-floating col-md-12">
                    <textarea class="form-control" placeholder="Leave a Message here" id="floatingTextarea2" name="message" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Message</label>
                    </div>

                </div>

                <div class="submit_button" style="text-align: center;">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>

            </form>		

			</div>
		</section>
		<!-- Page Header Section Ending Here -->


        

	  

		<?php include("include/footer.php");?>	

		

		<!-- scrollToTop start here -->
		<a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span class="pluse_2"></span></a>
		<!-- scrollToTop ending here -->


        <?php include("include/script.php");?>

	</body>

</html>