<?php
extract($_POST);
$to      = 'contact@capspoultry.com';
$subject = 'Mail From The Website.';
$message = 'Greetings CAPS Poultry';
$message.=" My Name is: ". $name. "My Contact Details are as follows: ". $mobile." ". $email." and my message is :".$msg. "<br>Please Consider me as a trader";
    $headers = 'From: '.$email       . "\r\n" .
                 'Reply-To: '.$email . "\r\n" .
                 'X-Mailer: PHP/' . phpversion();

     ini_set('max_execution_time', 600); ini_set('memory_limit','1024M');            
    if(mail($to, $subject, $message, $headers)){
        echo "The mail has been sent";
        header("location: join-trader.php");

    } else {
        echo "The mail could not be sent";
        // header("location: join-trader.php");
    }

?>
