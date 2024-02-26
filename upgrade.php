<?php

@include 'config.php';
session_start();
if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>upgrade</title>
   <link rel="stylesheet" href="css/upgrade.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
  <header>
   <div class="menu">
    <nav>
    <div class="user">
        <span></span><img src="img/logo.png">

        
    </div> 
    <div class="name">
        <h3>Hi, <span></span><span><?php echo $_SESSION['user_name'] ?></span>!</h3>
           <button ><a href="user_page.php" class="button">Listen Music</a></button>
           <button ><a href="index.html" >LOGOUT</a></button>
   </div>            
  </nav>
   </div>
   <div class="card">
  <h1>The &ensp; Power &ensp; Of &ensp;  Premium &ensp;</h1>
  <div class="icons">
    <span></span><i class="bi bi-music-player"></i><span></span>
    <i class="bi bi-music-note-beamed">&emsp; </i><span></span>
    <i class="bi bi-play-circle-fill"></i><span></span>
    <i class="bi bi-wallet2"></i>
  </div>
  <h3 id="title">
    <span></span> Ad-free Music Listening<span></span>
    Offline  &ensp;Playback <span></span> 
    Play  &ensp;Everywhere<span></span>
    Pay Your Way<span></span>
  </h3>

   </div>
   
   <div class="content">
    <div class="title">
        <h1>Pick &ensp; Your &ensp; Premium </h1>
    </div>
    
     <div class="frame">
       <h1>1 MONTH</h1>
       <h3>₹ 199/month offer period</h3>
       <div class="line">
        <ul>
            <li>AD-free music listening</li>
            <li>Download 1k songs</li>
            <li>Enjoy uninterrupted music</li>
           </ul>
           <button ><a href="razorpay-api/payment-form.php">BUY NOW</a></button>
          
       </div>
       
     </div>
     <div class="frame1">
        <h1>2 MONTH</h1>
        <h3>₹ 379/month offer period</h3>
        <div class="line">
         <ul>
             <li>AD-free music listening</li>
             <li>Download 10k songs</li>
             <li>Enjoy uninterrupted music</li>
            </ul>
            <button ><a href="razorpay-api/payment-form2.php">BUY NOW</a></button>
           
        </div>
     </div>
     <div class="frame2">
        <h1>1 YEAR</h1>
        <h3>₹ 1000/month offer period</h3>
        <div class="line">
         <ul>
             <li>AD-free music listening</li>
             <li>Download 20k songs</li>
             <li>Enjoy uninterrupted music</li>
            </ul>
            <button ><a href="razorpay-api/payment-form3.php">BUY NOW</a></button>
           
        </div>
     </div>
   </div>

  </header>


</body>
</html>