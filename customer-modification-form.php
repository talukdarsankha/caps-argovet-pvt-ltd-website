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




    <!-- CUSTOMER MODIFICATION FORM -->

    <style>
        .form-label {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;

        }

        form>h3 {
            color: rgb(122, 169, 230);
        }
    </style>

    <?php
   if(isset($_POST["submit"])){
        if(!empty($_POST['formCheck'])){
            echo "form";
        $cname= $_POST["cname"];
        $contact_person= $_POST["contact_person"]; 
        $cmobile=$_POST["cmobile"];
        $cwhatsapp = $_POST["cwhatsapp"];
        $caddhar = $_POST["caddhar"];
        $cpan = $_POST["cpan"];
        $cbank = $_POST["cbank"];
        $caccount_no = $_POST["caccount_no"];
        $cifsc = $_POST["cifsc"];
        $cbank_branch = $_POST["cbank_branch"];
        $caddress= $_POST["caddress"];

        echo $cname.$contact_person.$cmobile;

       
   }
   else{
    echo "Please check the aggree Terms and condition box.";
   
   }
}
   
//    if(isset($_POST["submit"])){
    // $cname= $_POST["cname"];
    // $contact_person= $_POST["contact_person"]; 
    // $cmobile=$_POST["cmobile"];
    // $cwhatsapp = $_POST["cwhatsapp"];
    // $caddhar = $_POST["caddhar"];
    // $cpan = $_POST["cpan"];
    // $cbank = $_POST["cbank"];
    // $caccount_no = $_POST["caccount_no"];
    // $cifsc = $_POST["cifsc"];
    // $cbank_branch = $_POST["cbank_branch"];
    // $caddress= $_POST["caddress"];

    // // echo $cname.$contact_person.$cmobile;

//     $pdf = new FPDF();
//     $pdf->AddPage();
//     $pdf->output();

//    }

   ?>



    <section class="p-4 m-2">
        <div class="container">

            <form action="customer-receipt/index.php" method="post">
                <h3 class="text-center ">CUSTOMER MODIFICATION FORM</h3>
                <div class="row">

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="cname" class="form-label">Customer Name : </label>&nbsp; &nbsp;
                            <span>
                                <input type="text" class="form-control" id="cname" name="cname" required>
                            </span>
                        </div>
                        <div class="mb-3">
                            <label for="contact_person" class="form-label">Contact Person</label>
                            <input type="text" class="form-control" id="contact_person" name="contact_person" required>
                        </div>
                        <div class="mb-3">
                            <label for="cmobile" class="form-label">Mobile No :</label>
                            <input type="text" class="form-control" id="cmobile" name="cmobile" required>
                        </div>
                        <div class="mb-3">
                            <label for="cwhatsapp" class="form-label">Whats App No :</label>
                            <input type="text" class="form-control" id="cwhatsapp" name="cwhatsapp" required>
                        </div>

                        <div class="mb-3">
                            <label for="cemmail" class="form-label">Email :</label>
                            <input type="text" class="form-control" id="cemmail" name="cemmail" required>
                        </div>

                        <div class="mb-3">
                            <label for="caddhar" class="form-label">Addhar No:</label>
                            <input type="text" class="form-control" id="caddhar" name="caddhar" required>
                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="mb-3">
                            <label for="cpan" class="form-label">PAN No</label>
                            <input type="text" class="form-control" id="cpan" name="cpan" required>
                        </div>

                        <!-- <div class="form-floating col-md-12 mb-3">
                            <label for="caddress"> <b>Bank Details:</b></label>
                            <textarea class="form-control"
                                placeholder="Enter your- Bank Name, A/C No, IFSC Code, Branch etc." id="caddress"
                                name="caddress" style="height: 100px"></textarea>
                        </div> -->

                        <div class="mb-3">
                            <label for="cbank" class="form-label">Bank Name</label>
                            <input type="text" class="form-control" id="cbank" name="cbank" required>
                        </div>
                        <div class="mb-3">
                            <label for="caccount_no" class="form-label">A/C No</label>
                            <input type="text" class="form-control" id="caccount_no" name="caccount_no" required>
                        </div>
                        <div class="mb-3">
                            <label for="cifsc" class="form-label">IFSC Code</label>
                            <input type="text" class="form-control" id="cifsc" name="cifsc" required>
                        </div>
                        <div class="mb-3">
                            <label for="cbank_branch" class="form-label">Branch</label>
                            <input type="text" class="form-control" id="cbank_branch" name="cbank_branch" required>
                        </div>

                    </div>

                    <div class="form-floating col-md-3 col-md-12">
                        <label for="caddress" class="form-label">Address(Vill/Town, P.O, P.S, Dist, State, Pin, Country,
                            Landmark etc.)</label>
                        <textarea class="form-control" id="caddress" name="caddress" style="height: 100px" required></textarea>

                    </div>

                </div>

                <div class="mb-3 form-check text-center mt-3">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="formCheck" required>
                    <label class="form-check-label" for="exampleCheck1">I have read all instructions and aggree all the
                        Terms, Conditions.</label>
                </div>


                <div class="submit_button text-center mt-3">
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>


            </form>
        </div>
    </section>







    <!-- footer section start here -->
    <?php include("include/footer.php");?>
    <!-- footer section start here -->

    <!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-swoosh-up"></i><span class="pluse_1"></span><span
            class="pluse_2"></span></a>
    <!-- scrollToTop ending here -->

    <?php include("include/script.php");?>

</body>

</html>