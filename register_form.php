<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $phone = $_POST['phone'];
   

   $select = " SELECT * FROM user_form WHERE (name = '$name' or email ='$email') ";

   $result = mysqli_query( $conn,$select );

   if(mysqli_num_rows($result) > 0){

      $error[] = 'User Already Exist!';

   } else {
         if(preg_match("/^[0-9]/",$name)){
           $error[] = "Enter Valid UserName";
          }   

         elseif(!preg_match("/^[a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3}$/",$email)){
            $error[] = "Invalid Email";
         }
         elseif (strlen($_POST['phone']) < 10) {
            $error[]= "Mobile Number should be of 10 digits";
         } 
         elseif (!preg_match("/^[7-9]\d{9}$/", $phone)) {
            $error[] = "Invalid Mobile Number";
         }
         elseif(strlen($_POST['password']) < 6){
            $error['password_error'] = 'Use 6 or more characters with a mix of letters, numbers & symbols';
         }
         elseif ($_POST['password'] != $_POST['cpassword']) {
            // if password not matched so
               $error[] = 'Password not matched! Try Again!';
            } 

         else {

            $insert = "INSERT INTO user_form(name, email, password, user_type, phone) VALUES('$name','$email','$pass','$user_type','$phone')";
            mysqli_query($conn, $insert);
            header('location:login_form.php');
         }
      }

   };
   



?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="form-container">

   <form action="" method="post">
      <h3>Register Now</h3>

      <div class="button-box">
         <button style="background-color:rgb(86, 65, 250); border-radius: 5px; margin:3px 70px;   font-size:14px;"  value="user"><h2><a href="register_form.php">  For User </a> </h2></button>
         <button style="background-color:rgb(86, 65, 250); border-radius: 5px; margin:3px 65px; font-size:14px;"  value="artist"><h2><a href="artist_register.php"> For Artist </a></h2></button>

      </div>
      <select  style= "background-color:rgb(86, 65, 250); font-size:14px;" name="user_type">
         <option value="user">User</option>
         <option value="artist">Artist</option>
         <option value="admin">Admin</option>

      </select>

      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
     
    
      <input type="text" name="name" required placeholder="Enter User Name">
      <input type="email" name="email" title="Enter email in abc@gmail.com pattern" required placeholder="Enter Your Email">
      <input type="text" maxlength="10" name="phone" title="Please enter 10 digit phone number" required placeholder="Enter Contact" />
     
      <input type="password" name="password" required placeholder="Enter Your Password">
      <input type="password" name="cpassword" required placeholder="Confirm Your Password">

      <input type="submit" name="submit" value="Register Now" class="form-btn">
      <p>Already have an Account? <a href="login_form.php">Login Now</a></p>
   </form>

</div>

</body>
</html>