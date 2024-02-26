<?php
//require('../vendor/autoload.php');
require('config.php');
session_start();

//db connection
$conn = mysqli_connect($host, $username, $password, $dbname);

require('razorpay-php/Razorpay.php');

use Mpdf\Mpdf;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;

$success = true;

$error = "Payment Failed";

if (empty($_POST['razorpay_payment_id']) === false)
{
    $api = new Api($keyId, $keySecret);

    try
    {
        // Please note that the razorpay order ID must
        // come from a trusted source (session here, but
        // could be database or something else)
        $attributes = array(
            'razorpay_order_id' => $_SESSION['razorpay_order_id'],
            'razorpay_payment_id' => $_POST['razorpay_payment_id'],
            'razorpay_signature' => $_POST['razorpay_signature']
        );

        $api->utility->verifyPaymentSignature($attributes);
    }
    catch(SignatureVerificationError $e)
    {
        $success = false;
        $error = 'Razorpay Error : ' . $e->getMessage();
    }
}


$name =  $_SESSION['name'];
$phone = $_SESSION['phone'];
 $razorpay_order_id = $_SESSION['razorpay_order_id'];
 $razorpay_payment_id = $_POST['razorpay_payment_id'];
 $email = $_SESSION['email'];
 $price = $_SESSION['price'];
 $date = date('d/m/Y h:i:s', time());
 $html = " <h1>User Details:</h1>
 <h3>Name: {$_SESSION['name']}</h3>
 <h3>Email: {$_SESSION['email']}</h3>
 <h3>Date: {$date}</h3>
  <h1>Amount: ₹ {$_SESSION['price']}</h1>
   
   <h3>Your Payment ID: {$_POST['razorpay_payment_id']}</h3>
   <h3>Your Order ID: {$_SESSION['razorpay_order_id']}</h3>
   <h3>Your Transaction Status: Success</h3>
   <h2>Thanks!!!</h2>"; 


//echo $html;
//require_once __DIR__ . 'vendor/autoload.php';
require('../vendor/autoload.php');
$mpdf = new Mpdf();
$mpdf->WriteHTML($html);
$file=time().'.pdf';
$mpdf->output($file,'D'); 
?>
