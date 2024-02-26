<?php

@include 'config.php';
session_start();


if(isset($_POST['verifyEmail'])){
    $_SESSION['message'] = "";
    $OTPverify = mysqli_real_escape_string($conn, $_POST['OTPverify']);
    $verifyQuery = "SELECT * FROM user_form WHERE code = $OTPverify";
    $runVerifyQuery = mysqli_query($conn, $verifyQuery);
    if($runVerifyQuery){
        if(mysqli_num_rows($runVerifyQuery) > 0){
            $newQuery = "UPDATE user_form SET code = 0";
            $run = mysqli_query($conn,$newQuery);
            header("location: newPassword.php");
        }else{
            $error['verification_error'] = "Invalid Verification Code";
        }
        
    }else{
        $error[] = "Failed while checking Verification Code from database!";
    }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
     <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <div class="form-container">

    <form action="" method="post">
      <h3>Email</h3>
                  <?php
            if(isset($_SESSION['message'])){
                ?>
                <div id="alert"><?php echo $_SESSION['message']; ?></div>
                <?php
            }
            ?>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>

      <input type="number" name="OTPverify" required placeholder="Verification Code"><br>
      
      <input type="submit" name="verifyEmail" value="Verify" class="form-btn">
   </form>

        
    </div>
</body>

</html>