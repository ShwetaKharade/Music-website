<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $name = $_POST['u_name'];
        $email=$_POST['u_email'];
        $phone=$_POST['u_phone'];
         $insert = mysqli_query($conn,"INSERT INTO user_form
         (name, email, phone) 
         VALUES ('$name','$email','$phone')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?user_form=error");
         }
         else
         {
             echo "User added successfully.";
             header("Location: ../index.php?user_form=success");
         }
     
    }
        
?>