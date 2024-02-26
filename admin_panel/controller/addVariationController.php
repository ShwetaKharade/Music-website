<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
      
        $name= $_POST['a_name'];
      

         $insert = mysqli_query($conn,"INSERT INTO artist
         (artist_name) VALUES ('$name')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ../index.php?variation=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ../index.php?variation=success");
         }
     
    }
        
?>