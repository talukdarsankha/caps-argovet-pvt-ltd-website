<?php 
include '../classes/Crud.php';
$crud = new Crud();
if (isset($_GET['stud_id'])) {
$id=$_GET['stud_id'];
$registration = $crud->Read("stud_transaction","`stud_id`='$id'");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="different types of invoice/bill/tally designed with friendly and markup using modern technology, you can use it on any type of website invoice, fully responsive and w3 validated.">
    <meta name="keywords" content="bill , receipt, tally, invoice, cash memo, invoice html, invoice pdf, invoice print, invoice templates, multipurpose invoice, template, booking invoice, general invoice, clean invoice, catalog, estimate, proposal">
    <meta name="author" content="initTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SmartBTR Institute of Technology </title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="assets/images/icon/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- bootstrap -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap ends -->
    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="admission-receipt/assets/css/main-style.css">
</head>
<body class="section-bg-one">
    <main class="main-wrapper position-relative">
        <div class="modern-invoice" id="download-section">
            <!-- invoice Top -->
            <div class="invoice-top">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 text-center text-sm-start mb-3 mb-sm-1">
                        <img src="admission-receipt/assets/images/itlogo.jpg" style="max-width:120px" title="invoice" alt="invoice">
                    </div>
                    <div class="col-xl-6 col-lg-4 col-md-4 col-sm-4 text-center text-sm-start mb-3 mb-sm-1">
                       <h1 class="text-center"style="font-size: 20px !important;font-weight: 700;">Smart BTR Institute of Technology</h1>
                        <address class="mb-4 address">
                            <p class="text-center"><i class="fa fa-phone " style="color: red;"></i> +91 8134525898<br></p>
                           <p class="text-center"> <i class="fa fa-envelope" style="color: red"></i>  SmartBTR@gmail.com<br></p>
                           <p class="text-center"> <i class="fa fa-map-marker" style="color: red"></i> Gossaigaon,783360
                            near Padmabil Flyover Highway
                            Dist: Kokrajhar,BTR(Assam)</p>                        
                        </address>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-4 col-sm-4 text-center text-sm-end mb-3 mb-sm-1">
                        <img src="admission-receipt/assets/images/logo1.png" style="max-width:120px"title="invoice" alt="invoice">
                    </div>
                </div>
                <hr>
            </div>
            <hr>
            <?php 
                            if($registration){
                              $stud_id=$registration[0]['stud_id'];
                              $transaction_id=$registration[0]['transaction_id'];
                              $order_id=$registration[0]['order_id'];
                              $name=$registration[0]['name'];
                              $email =$registration[0]['email'];
                              $fee=$registration[0]['amount'];
                              $course=$registration[0]['course'];
                              $status=$registration[0]['status'];

                             ?>
            <!-- invoice Details -->
            <div class="invoice-details mt-20 pt-20">
                <h2 class="text-center" style="background: linear-gradient(135deg,#21db84,#5197d0);padding: 8px 8px;">Payment Receipt</h2>
                <div class="row" style="margin-top: 20px;">
                    
                    
                      
                    <div class="col-sm-12 text-center">
                        <address class="mb-4" style="margin-top: 25px;">
                            <strong>Application id:</strong> <?php echo $stud_id;?><br>
                            <strong>Full name:</strong> <?php echo $name;?><br>
                            <strong>Full name:</strong> <?php echo $email;?><br>

                        </address>
                    </div>
                        
                    <!-- <div class="col-sm-6 text-sm-end order-sm-1" >
                        <img class="text-end" style="width:100px;height:100px" alt="user" src="../<?php echo $profile;?>" style="max-width:120px">
                    </div> -->
                </div>
            </div>
            <!-- invoice descriptions -->
            <div class="card mb-3 border-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                    <table class="table mb-0">
                    <thead class="card-header bg-header">
                        <tr>
                            <td ><strong>Course:</strong></td>
                            <td ><strong>Fee:</strong></td>
                            <td class="col-1 text-center"><strong>Transction ID:</strong></td>
                            <td class="text-center"><strong>Status:</strong></td>
                            <!-- <td class=" text-center"><strong>Course</strong></td>
                            <td class="text-center"><strong>Qualification</strong></td>
                            <td class="col-3 text-end"><strong>Address</strong></td> -->
                        </tr>
                    </thead>
                    
                        <tbody>
                            <tr>
                                <td class="col-3"><?php echo $course;?></td>
                                <td class="col-3"><i class="fa fa-inr"></i><?php echo $fee;?></td>
                                <td class="col-1 text-center"><?php echo $transaction_id;?></td>
                                <td class="col-1 text-center"></span> 
                                <?php
                                        $status = "success"; // Assuming the status is 'success' for this example

                                        if ($status === "success") {
                                            echo '<span class="badge badge-success">Success</span>';
                                        } else {
                                            echo '<span class="badge badge-danger">Failure or Other Status</span>';
                                        }
                                    ?>
                                        
                                </td>
                                
                            </tr>
                            
                        </tbody>
                        <!-- <tfoot>
                            <tr  class="card-footer">
                                <td colspan="4" class="text-end"><strong>Sub Total:</strong></td>
                                <td class="text-end">$2150.00</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-end"><strong>Tax:</strong></td>
                                <td class="text-end">$215.00</td>
                            </tr>
                            <tr>
                                <td colspan="4" class="text-end border-bottom-0"><strong>Total:</strong></td>
                                <td class="text-end border-bottom-0">$2365.00</td>
                            </tr>
                        </tfoot> -->
                    </table>
                    </div>
                </div>
            </div>
            <?php }?>
            <!-- invoice address -->
            <!-- <div class="row">
                <div class="col-sm-12 mb-10">
                    <span class="status d-block mb-20"> <strong>Date :</strong> 01-12-2023</span>
                    <h5 class="mb-2 text-title font-700"> Important: </h5>
                    <p>This is an electronic generated invoice so doesn't require any signature. </p>
                    <p>Please read all terms and polices on www.yourdomaon.com for returns, replacement and other issues.</p>
                </div>
            </div> -->
            <div class="footer-shape">
                <svg viewBox="0 0 500 200">
                    <path d="M 0 50 C 150 50 300 0 500 80 L 500 0 L 0 0" fill="#54bdaa"></path>
                    <path d="M 0 50 C 150 50 330 -30 500 50 L 500 0 L 0 0" fill="#21db84" ></path>
                <path d="M 0 50 C 215 50 250 0 500 100 L 500 0 L 0 0" fill="#f73e4c" opacity="0.1"></path>
                </svg>
            </div>
        </div>
        <!-- invoice Bottom  -->
        <div class="text-center modern-bill-button">
            <div class="d-print-none d-flex flex-column justify-content-center flex-wrap gap-10 mt-5"> 
                <a href="javascript:window.print()" class="btn-primary-fill">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect><path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path><circle cx="392" cy="184" r="24" fill="currentColor"></circle></svg>
                </a> 
                <button id="bill-download" class="btn-primary-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32"></path></svg>
                </button> 
            </div>
        </div>
    </main>

    <!-- jquery-->
    <script src="assets/js/jquery-3.7.0.min.js"></script>
    <!-- Plugin -->
    <script src="assets/js/plugin.js"></script>
    <!-- Main js-->
    <script src="assets/js/mian.js"></script>
</body>

</html>