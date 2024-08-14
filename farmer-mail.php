
<?php

if(isset($_POST['submit'])){
$name=$_POST['name'];
$mobile_no=$_POST['mobile'];
$email=$_POST['email'];
$msg=$_POST['message'];

if(!empty("$name")&& !empty("$mobile_no")&& !empty("$email")&& !empty("$msg")){
                            
    $to      = 'contact@capspoultry.com';
    $subject = 'Mail From The Website.';
    $message = 'Greetings CAPS Poultry';
    $message.=" My Name is: ". $name. "My Contact Details are as follows: ". $mobile_no." ". $email." and my message is :".$msg. "<br>Please see out my message.";
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

