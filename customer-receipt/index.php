<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description"
        content="different types of invoice/bill/tally designed with friendly and markup using modern technology, you can use it on any type of website invoice, fully responsive and w3 validated.">
    <meta name="keywords"
        content="bill , receipt, tally, invoice, cash memo, invoice html, invoice pdf, invoice print, invoice templates, multipurpose invoice, template, booking invoice, general invoice, clean invoice, catalog, estimate, proposal">
    <meta name="author" content="initTheme">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CUSTOMER CREATION/MODIFICATION FORM</title>
    <link rel="icon" type="image/x-icon" sizes="20x20" href="assets/images/icon/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/main-style.css">

    <style>
        .td-text {
            width: 180px;
        }
    </style>
</head>

<body class="section-bg-one">
    <main class="main-wrapper position-relative">
        <div class="modern-invoice" id="download-section">
            <!-- invoice Top -->
            <div class="invoice-top">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-2 text-center text-sm-start mb-3 mb-sm-1">
                        <img src="assets/images/poultry_logo.jpg" style="max-width:120px" title="invoice" alt="invoice">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-8 text-center text-sm-start mb-3 mb-sm-1">
                        <h1 class="text-center" style="font-size: 18px !important;font-weight: 700;">Poultry
                            Bird/Chicks/Feed/Egg Customer</h1>

                        <address class="mb-4 address">
                            <p class="text-center"><i class="fa fa-phone " style="color: red;"></i>+91863-812-9298<br>
                            </p>
                            <p class="text-center"> <i class="fa fa-envelope" style="color: red"></i>
                                contact@capspoultry.com<br></p>
                            <p class="text-center"> <i class="fa fa-map-marker" style="color: red"></i> Dingdinga, Ps.
                                Tamarhat,Dhubri, Assam-783333</p>
                        </address>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-2 text-center text-sm-end mb-3 mb-sm-1">
                        <img src="assets/images/01.png" style="max-width:120px" title="invoice" alt="invoice">
                    </div>
                </div>
                <hr>
            </div>
            <hr>

            <!-- invoice Details -->
            <div class="invoice-details pt-20" style="margin-top: -38px;">
                <h2 class="text-center "
                    style="background: linear-gradient(135deg,#21db84,#5197d0);padding: 8px 8px; width: fit-content; margin: auto;">
                    CUSTOMER CREATION/MODIFICATION FORM</h2>

                <div class="col-sm-6 order-sm-0">
                    <address class="mb-4" style="margin-top: 25px;">
                        <strong>To,</strong><br>
                        <strong>The Caps Agrovet Private Limited</strong><br>
                        <strong>Dingdinga, Ps. Tamarhat,Dhubri, Assam-783333</strong><br>

                    </address>
                </div>
            </div>


            <?php
              

               if(isset($_POST['submit'])){
                $cname= $_POST["cname"];
                $contact_person= $_POST["contact_person"]; 
                $cmobile=$_POST["cmobile"];
                $cwhatsapp = $_POST["cwhatsapp"];
                $cemmail = $_POST["cemmail"];
                $caddhar = $_POST["caddhar"];
                $cpan = $_POST["cpan"];
                $cbank = $_POST["cbank"];
                $caccount_no = $_POST["caccount_no"];
                $cifsc = $_POST["cifsc"];
                $cbank_branch = $_POST["cbank_branch"];
                $caddress= $_POST["caddress"];
               
               if(!empty("$cname")&& !empty("$contact_person")&& !empty("$cmobile")&& !empty("$cwhatsapp") &&!empty("$cemmail")&& !empty("$caddhar")&& !empty("$cpan")&& !empty("$cbank") && !empty("$caccount_no")&& !empty("$cifsc")&& !empty("$cbank_branch")&& !empty("$caddress")){
                                           
                   $to      = 'contact@capspoultry.com';
                   $subject = 'Mail From The Website.';
                   $message = 'Greetings CAPS Poultry';
                   $message.=" My Name is: ". $cname. "My Details are as follows: ". $cmobile.", ". $cemmail .", ". $cwhatsapp .", ". $caddhar.", ". $cpan .", ". $cbank .", " . $caccount_no . ", " . $cifsc.", ". $cbank_branch .", ". $caddress .  
                   "<br>Please Consider my Trader Registration.";
               $headers = 'From: '.$cemmail       . "\r\n" .
                            'Reply-To: '.$cemmail . "\r\n" .
                            'X-Mailer: PHP/' . phpversion();
               
                ini_set('max_execution_time', 600); ini_set('memory_limit','1024M');            
               if(mail($to, $subject, $message, $headers)){
                   echo "The mail has been sent";
                   // header("location: join-trader.php");
                 
               
               } else {
                   echo "The mail could not be sent";
                   // header("location: join-trader.php");
                   echo $cname, $contact_person,$cmobile,$cwhatsapp,$cemmail,$caddhar,$cpan,$cbank,$caccount_no,$cifsc,$cbank_branch ,$caddress;
               }
               }
               }
               
              
               


              
            ?>

            <!-- invoice descriptions -->
            <div class="card mb-3 border-0">
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table mb-0 table-bordered" style="margin-top: 20px;">

                            <tbody>
                                <tr>
                                    <td class="td-text">1. Customer Name : </td>
                                    <td>
                                        <?php echo $cname; ?>
                                    </td>
                                    <td class="td-text">8. Address :</td>
                                    <td>
                                        <?php echo $caddress; ?>
                                    </td>

                                </tr>
                                <tr>
                                    <td class="td-text">2 Contact Person :</td>
                                    <td>
                                        <?php echo $contact_person; ?>
                                    </td>
                                    <td class="td-text">9. Bank Name :</td>
                                    <td>
                                        <?php echo $cbank; ?>
                                    </td>

                                </tr>

                                <tr>
                                    <td class="td-text">3. Mobile No :</td>
                                    <td>
                                        <?php echo $cmobile; ?>
                                    </td>
                                    <td class="td-text">10. A/C No :</td>
                                    <td>
                                        <?php echo $caccount_no; ?>
                                    </td>

                                </tr>

                                <tr>
                                    <td class="td-text">4. Whatsapp No :</td>
                                    <td>
                                        <?php echo $cwhatsapp; ?>
                                    </td>
                                    <td class="td-text">11. IFSC Code :</td>
                                    <td>
                                        <?php echo $cifsc; ?>
                                    </td>

                                </tr>

                                <tr>
                                    <td class="td-text">5. Email :</td>
                                    <td>
                                        <?php echo $cemmail; ?>
                                    </td>
                                    <td class="td-text">11. Branch :</td>
                                    <td>
                                        <?php echo $cbank_branch; ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="td-text">6. Addhar No :</td>
                                    <td>
                                        <?php echo $caddhar; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="td-text">7. PAN No :</td>
                                    <td>
                                        <?php echo $cpan; ?>
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


            <div class="invoice-details pt-20" style="margin-top: -38px;">
                <div class="col-sm-12 order-sm-0" style="text-align: justify;">
                    <address class="mb-4" style="margin-top: 25px;">
                        <strong>
                            I/We hereby confirm and certify that the information and attachments given herein true and
                            accurate, any subsequent changes would be duly communicated to IB group by submission of a
                            fresh form along with relevant supporting.
                        </strong><br>
                    </address>
                </div>
            </div>

            <div class="invoice-details pt-20" style="margin-top: -38px;">
                <div class="col-sm-12 order-sm-0 p-4" style="text-align: justify;">
                    <address class="mb-4  "
                        style="margin-top: 25px; display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between;">
                        <div>
                            <strong>
                                1.Credit Limit………………….. <br>
                                2.SD Cheque No…………. <br>
                                3.Vehicle Details……………………….. <br> 4.Vehicle No…………………… <br>
                            </strong>
                        </div>

                        <div class="flex flex-column gap-5">
                            <strong>
                                <p class="text-center">....................................................</p>
                                <p class="text-center">Signature of the Customer</p>
                            </strong>

                        </div>

                    </address>
                </div>
            </div>

            <!-- <div class="invoice-details pt-20 " style="margin-top: -38px;">
                <div class="col-sm-12 order-sm-0" style="text-align: justify;">
                      <address class="mb-4" style="margin-top: 25px; margin-left: 60%;">
                          <strong>
                            <p class="text-center">........................................................................</p>
                            <p class="text-center">Signature of the Customer</p>
                          </strong><br>
                       </address>
                  </div>
              </div> -->



            <!-- invoice address -->
            <div class="row">
                <div class="col-sm-12 mb-10">
                    <span class="status d-block mb-10 mt-10"> <strong>Supporting Document </strong></span>
                    <div class="invoice-details pt-20" style="margin-top: -38px;">
                        <div class="col-sm-12 order-sm-0" style="text-align: justify;">
                            <address class="mb-4" style="margin-top: 25px;">
                                <strong>
                                    PAN <br>
                                    Addhar Card <br>
                                    Cheque 2 nos <br>
                                </strong><br>
                            </address>
                        </div>
                    </div>


                </div>
            </div>
            <div class="footer-shape">
                <svg viewBox="0 0 500 200">
                    <path d="M 0 50 C 150 50 300 0 500 80 L 500 0 L 0 0" fill="#54bdaa"></path>
                    <path d="M 0 50 C 150 50 330 -30 500 50 L 500 0 L 0 0" fill="#21db84"></path>
                    <path d="M 0 50 C 215 50 250 0 500 100 L 500 0 L 0 0" fill="#f73e4c" opacity="0.1"></path>
                </svg>
            </div>
        </div>
        <!-- invoice Bottom  -->
        <div class="text-center modern-bill-button">
            <div class="d-print-none d-flex flex-column justify-content-center flex-wrap gap-5 mt-1">
                <a href="javascript:window.print()" class="btn-primary-fill">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <path
                            d="M384 368h24a40.12 40.12 0 0040-40V168a40.12 40.12 0 00-40-40H104a40.12 40.12 0 00-40 40v160a40.12 40.12 0 0040 40h24"
                            fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path>
                        <rect x="128" y="240" width="256" height="208" rx="24.32" ry="24.32" fill="none"
                            stroke="currentColor" stroke-linejoin="round" stroke-width="32"></rect>
                        <path d="M384 128v-24a40.12 40.12 0 00-40-40H168a40.12 40.12 0 00-40 40v24" fill="none"
                            stroke="currentColor" stroke-linejoin="round" stroke-width="32"></path>
                        <circle cx="392" cy="184" r="24" fill="currentColor"></circle>
                    </svg>
                </a>
                <button id="bill-download" class="btn-primary-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512">
                        <path
                            d="M320 336h76c55 0 100-21.21 100-75.6s-53-73.47-96-75.6C391.11 99.74 329 48 256 48c-69 0-113.44 45.79-128 91.2-60 5.7-112 35.88-112 98.4S70 336 136 336h56M192 400.1l64 63.9 64-63.9M256 224v224.03"
                            fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="32"></path>
                    </svg>
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