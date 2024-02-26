<?php

@include 'config.php';
session_start();

if(isset($_POST['changePassword'])){
    $password = ($_POST['password']);
    $confirmPassword = ($_POST['confirmPassword']);
    
    if (strlen($_POST['password']) < 6) {
        $error['password_error'] = 'Use 6 or more characters with a mix of letters, numbers & symbols';
    } else {
        // if password not matched so
        if ($_POST['password'] != $_POST['confirmPassword']) {
            $error['password_error'] = 'Password not matched';
        } else {
            $email = $_SESSION['email'];
            $updatePassword = "UPDATE user_form SET password = '$password' WHERE email = '$email'";
            $updatePass = mysqli_query($conn, $updatePassword) or die("Query Failed");
            session_unset();
            session_destroy();
            header('location: login_form.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset New Password  </title>
     <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="form-container">

    <form action="" method="post">
      <h3>Reset Password</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="password" name="password" required placeholder="Enter Password">
      <input type="password" name="confirmPassword" required placeholder="Confirm Password">

      <input type="submit" name="changePassword" value="Save" class="form-btn">
   </form>

        
    </div>
</body>

</html>