<?php

    include_once "../config/dbconnect.php";
    
    $u_id=$_POST['record'];
    $query="DELETE FROM user_form where id='$u_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"User Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>