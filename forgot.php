<?php

@include 'config.php';
session_start();


if (isset($_POST['forgot_password'])) {
   $email = $_POST['email'];
   $_SESSION['email'] = $email;

   $emailCheckQuery = "SELECT * FROM user_form WHERE email = '$email'";
   $emailCheckResult = mysqli_query($conn, $emailCheckQuery);
  // if query run
  if ($emailCheckResult) {
   // if email matched
   if (mysqli_num_rows($emailCheckResult) > 0) {
       $code = rand(999999, 111111);
       $updateQuery = "UPDATE user_form SET code = $code WHERE email = '$email'";
       $updateResult = mysqli_query($conn, $updateQuery);
       if ($updateResult) {
           $subject = 'Email Verification Code';
           $message = "Your verification code is $code. Use this code and reset your password.";
           $sender = 'From: shwetakharade******@gmail.com';

           if (mail($email, $subject, $message, $sender)) {
               $message = "We've sent a verification code to your Email <br> $email";

               $_SESSION['message'] = $message;
               header('location: verifyEmail.php');
           } else {
               $error[] = 'Failed while sending code!';
           }
       } else {
           $error[] = "Failed while inserting data into database!";
       }
   }else{
       $error[] = "Invalid Email Address";
   }
}else {
   $error[] = "Failed while checking email from database!";
}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Your Password </title>
     <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="form-container">

    <form action="forgot.php" method="post">
      <h3>Email Check</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Enter valid Email">
      
      <input type="submit" name="forgot_password" value="Check" class="form-btn">
   </form>

        
    </div>
</body>

</html>