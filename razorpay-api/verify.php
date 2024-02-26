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

if ($success === true)
{
   $name =  $_SESSION['name'];
   $phone = $_SESSION['phone'];
    $razorpay_order_id = $_SESSION['razorpay_order_id'];
    $razorpay_payment_id = $_POST['razorpay_payment_id'];
    $email = $_SESSION['email'];
    $price = $_SESSION['price'];
//$updateQuery = "UPDATE `user_form` SET `email`= $email, `phone`=$phone, `order_id`=$razorpay_order_id, `razorpay_payment_id`=$razorpay_payment_id, `status`=success, `price`=$price  WHERE `user_form`.`name`=$name ";
    $sql = "INSERT INTO user_form(name, phone, order_id, razorpay_payment_id, status, email, price) VALUES ('$name','$phone','$razorpay_order_id', '$razorpay_payment_id', 'success', '$email', '$price')";
    if(mysqli_query($conn, $sql)){
        echo "Payment Successfully!!!!";
    }
     
    $html = "<p></p>
            ";

    
}
else
{
    $html = "<p>Your payment failed</p>
             <p>{$error}</p>";
}

echo $html;

/*require('../vendor/autoload.php');
$mpdf = new Mpdf();
$mpdf->WriteHTML($html);
$file=time().'.pdf';
$mpdf->output($file,'D'); 
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
</head>
<body>
    <style>
         body{
            background:rgb(4, 6, 33);
            align-items: center;
            
        }
        html{
            color:#36e2ec;
            text-align: center;
            font-size: 20px;
            padding: 20px;
        }
        button{
            width:130px;
  height:30px;
  border: 2px solid #36e2ec;
  outline: none;
  border-radius: 20px;
  background: #5adae0;
  cursor: pointer;
  color:#090f1f;
  font-weight: 600;
  transition: .3s linear;
  font-size: 16px;
        }
        button a{
            text-decoration: none;
        }
        button:hover{
            background: none;
       color:#36e2ec;
        }
    </style>
    <button ><a href="../login_form.php">LOGIN</a></button>
    <button ><a href="invoice.php">INVOICE</a></button>
</body>
 
</html>