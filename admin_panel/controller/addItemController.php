<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $ProductName = $_POST['p_name'];
        $desc= $_POST['p_desc'];
        $songs = $_POST['songfile'];
        $category = $_POST['category'];
       
            
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
      
        $location="./uploads/";
        $image=$location.$name;
       
        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;
      


        $song_name = $_FILES['songfile']['name'];
      $tmp_name = $_FILES['songfile']['tmp_name'];
      $error = $_FILES['songfile']['error'];
      //$songs=$location.$song_name;
      if ($error === 0) {
    	$audio_ex = pathinfo($song_name, PATHINFO_EXTENSION);

    	$audio_ex_lc = strtolower($audio_ex);

    	$allowed_exs = array('3gp', 'mp3', 'm4a', 'm3u');

    	if (in_array($audio_ex_lc, $allowed_exs)) {
    		
    		$songs = rand(1000,1000000). '.'.$audio_ex_lc;
    		$audio_upload_path = '../songs/'.$songs;
    		move_uploaded_file($tmp_name, $audio_upload_path);

    		// Now let's Insert the video path into database
            $sql = "INSERT INTO product
                   VALUES('$songs')";
            mysqli_query($conn, $sql);
            
    	}else {
    		$em = "You can't upload files of this type";
    		header("error=$em");
    	}
    }

   


        move_uploaded_file($temp,$finalImage);
       

         $insert = mysqli_query($conn,"INSERT INTO product
         (product_name,product_image,songs,product_desc,category_id) 
         VALUES ('$ProductName','$image',$songs,'$desc','$category')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>