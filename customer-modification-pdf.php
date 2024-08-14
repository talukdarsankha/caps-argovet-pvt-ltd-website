<?php



   if(isset($_POST["submit"])){
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

        // echo $cname.$contact_person.$cmobile;

        
    if(!empty($cname) && !empty($contact_person) && !empty($cmobile) && !empty($cwhatsapp) && !empty($cemmail) &&  !empty($caddhar) && !empty($cpan) && !empty($cbank) && !empty($caccount_no) && !empty($cifsc) && !empty($cbank_branch) && !empty($caddress) ){

        ob_start();
        require('fpdf/fpdf.php'); 

            // New object created and constructor invoked 
            $pdf = new FPDF(); 
            
            // Add new pages. By default no pages available. 
            $pdf->AddPage(); 
            
            // Set font format and font-size 
            $pdf->SetFont('Times', 'B', 20); 
            
            // Framed rectangular area 
            $pdf->Cell(0, 5, 'Poultry Bird/Chicks/Feed/Egg Customer', 0, 0, 'C'); 
            
            // Set it new line 
            $pdf->Ln(); 
            
            // Set font format and font-size 
            $pdf->SetFont('Times', 'B', 12); 
            
            // Framed rectangular area 
            $pdf->Cell(176, 10, 'CUSTOMER CREATION/MODIFICATION FORM', 0, 0, 'C');
            
            $pdf->Ln(); 
            $pdf->Ln(); 
        

            $pdf->Cell(0, 5, 'To,', 0, 0, ''); 

            $pdf->Ln(); 

            $pdf->Cell(0, 5, 'The Caps Agrovet Private Limited,', 0, 0, ''); 

            $pdf->Ln(); 

            $pdf->Cell(0, 20, 'Address :Dingdinga, Ps. Tamarhat,Dhubri, Assam-783333,', 0, 0, 'C'); 

            $pdf->SetFont('Times', 'B', 12); 
            $pdf->Ln(); 
            $pdf->Ln(); 
        

            $pdf->Cell(70, 12, '1. Customer Name : '. $cname , 0, 0, 'C'); 
            $pdf->Ln(); 

            $pdf->Cell(70, 12, '2. Contact Person : '. $contact_person , 0, 0, 'C'); 
            $pdf->Ln(); 

            $pdf->Cell(70, 12, '3. Mobile No :'. $cmobile , 0, 0, 'C'); 
            $pdf->Ln(); 

            $pdf->Cell(70, 12, '4. Whatsapp No : '. $cwhatsapp , 0, 0, 'C'); 
            $pdf->Ln(); 

            $pdf->Cell(70, 12, '5. Email ID : '. $cemmail , 0, 0, 'C'); 
            $pdf->Ln(); 

            $pdf->Cell(70, 12, '6 Address : '. $caddress , 0, 0, 'C'); 
            $pdf->Ln(); 

            $pdf->Cell(70, 12, '7. Addhar No : '. $caddhar , 0, 0, 'C'); 
            $pdf->Ln(); 

            $pdf->Cell(70, 12, '8. PAN : '. $cpan , 0, 0, 'C'); 
            $pdf->Ln(); 

            $pdf->Cell(70, 12, '9. Bank Name : '. $cbank , 0, 0, 'C'); 
            
            
            // Close document and sent to the browser 
            $pdf->Output(); 
    
    ob_end_flush();

   }else{
    header("location: customer-modification-form.php");
}
}
?>

<!-- 
1. Customer Name : M/s………………………….
2 Contact Person : Sri……………………………
3. Mobile No : ……………………………
4. Whatsapp No : ……………………
5. Email ID : ………..
6 Address : Vill/Town :……………………….. Po……………………………. Ps………………..    Dist……….. State………….Pin………………….Country……………………………..
Landmark………………………………
7. Adhar No………………..
8. PAN…………………….
9. Bank Name : ………………………. A/C No…………………… IFC Code…………………Branch…………. -->
