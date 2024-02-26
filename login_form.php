<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $pass = ($_POST['password']);
   

   $select = " SELECT * FROM user_form WHERE name = '$name' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
     
      
      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'artist'){

         $_SESSION['artist_name'] = $row['name'];
         header('location:artist_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:user_page.php');

      }
      elseif(($row['user_type'] == 'admin') ) {

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_panel/index.php');

      }
      
      
   }
  
   
   else{
      $error[] = 'Incorrect User Name or password!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
  

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Login Now</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="Enter User Name">
      <input type="password" name="password" required placeholder="Password">
       <a href="forgot.php"><b>Forgot Password?</b></a>
      
      <input type="submit" name="submit" value="login now" class="form-btn">
      <p>Don't have an Account? <a href="register_form.php">Register Now</a></p>
   </form>

</div>

</body>
</html>