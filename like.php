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
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/user.css">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
   

</head>
<body>


   <header>
     <div class="menu_side"> 
      <div class="user">
         <span></span><img src="img/logo.png" >
        </div>
      <div class="playlist">
         <h4 class="active"><span> </span> <i class="bi bi-music-note-beamed"></i>Playlist</h4>
         <h4><span></span>  <i class="bi bi-music-note-beamed"></i>Last Listening</h4>
         <h4> <span></span> <i class="bi bi-music-note-beamed"></i>Recommended</h4>

      </div>
      <div class="menu_song">
         <li class="songItem">
            <span>01</span>
            <img src="img/1.jpg" alt="">
            <h5>On My Way<br><div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="1"></i>

         </li>

         <li class="songItem">
            <span>02</span>
            <img src="img/2.jpg" alt="">
            <h5>On My Way<br><div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="2"></i>

         </li>

         <li class="songItem">
            <span>03</span>
            <img src="img/3.jpg" alt="">
            <h5>On My Way<br><div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="3"></i>

         </li>

         <li class="songItem">
            <span>04</span>
            <img src="img/4.jpg" alt="">
            <h5>On My Way<br><div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="4"></i>

         </li>

         <li class="songItem">
            <span>05</span>
            <img src="img/5.jpg" alt="">
            <h5>On My Way<br><div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="5"></i>

         </li>
         <li class="songItem">
            <span>06</span>
            <img src="img/6.jpg" alt="">
            <h5>On My Way<br><div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="6"></i>

         </li>
         <li class="songItem">
            <span>07</span>
            <img src="img/7.jpg" alt="">
            <h5>On My Way<br><div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="7"></i>

         </li>
         <li class="songItem">
            <span>08</span>
            <img src="img/8.jpg" alt="">
            <h5>On My Way<br><div class="subtitle">Alan Walker</div>
            </h5>
            <i class="bi playListPlay bi-play-circle-fill" id="8"></i>

         </li>
         
         
      </div> 


     </div>
     <div class="song_side">
      <nav>
       <div class="menu">
         <a href="user_page.php">Discover</a>
         <a href="#">MY LIBRARY</a>
         <a href="like.php">LIKED SONGS</a>
         <div class="active start-discover"></div>
         <div class="active start-discover"></div>
         <div class="active start-discover"></div>

       </div>  
              
      
         <div class="search">
            <i class="bi bi-search"></i>
            <input type="text" placeholder="Search Music....">
            <div class="search_results">
            <!--<a href="" class="card" id="1">
             <img src="img/1.jpg" alt="" >
             <div class="content">
               On My Way
               <div class="subtitle">Alan Walker</div>
             </div>
            </a> -->
                      

            </div> 
         </div>
         <div class="user">
         <h3>Hi, <span></span><span><?php echo $_SESSION['user_name'] ?></span>!</h3>
            <button style="color:#090f1f; width:100px; height:30px; border: 2px solid #36e2ec;border-radius: 20px;cursor: pointer;font-weight: 600;  background: #5adae0;"><a href="login_form.php" id="button">LOGOUT</a></button>
           
         </div>     
      </nav>
      
      <div class="content"></div>
      <div class="popular_song" >
         <div class="h4">
            <h4>Liked Songs</h4>
            <div class="btn_s">
               <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
               <i class="bi bi-arrow-right-short" id="pop_song_right"></i>
            </div>
         </div>
         <div class="pop_song">
           
          <li class="songItem">
               <div class="img_play">
               <img src="img/2.jpg" alt="">
               <i class="bi playListPlay bi-play-circle-fill" id="9"></i>
               </div>
               <h5>On My Way<br><div class="subtitle">Alan Walker</div>
               </h5>
           </li> 
          

         </div>
         


      </div>
      
      
       <!--<div class="popular_artist">
         <div class="h4">
         <h4>Popular Artists</h4>
         <div class="btn_s">
            <i class="bi bi-arrow-left-short" id="pop_art_left"></i>
            <i class="bi bi-arrow-right-short" id="pop_art_right"></i>
         </div>
         </div>
      
      <div class="item">
       <li>
         <a href="arjit.php"> 
            <img src="img/arjit.jpg" alt=""><div class="names">Arjit Singh</div></a> 
             
       </li>
       <li>
         <a href="honey.php"> <img src="img/honey.jpg" alt=""><div class="names">Honey Singh</div></a>
       </li>
       <li>
         <a href=""><img src="img/guru.jpg" alt=""><div class="names">Guru Randhawa</div></a>
       </li>
       <li>
         <a href=""><img src="img/dhvani.jpg" alt=""><div class="names">Dhvani</div></a>
       </li>
       <li>
         <a href=""> <img src="img/Diljit_Dosanjh.jpg" alt=""><div class="names">Diljit Dosanjh</div></a>
       </li>
       <li>
         <a href=""><img src="img/jubin Nautiyal.jpg" alt=""><div class="names">Jubin Nautiyal</div></a>
       </li>
       <li>
         <a href=""><img src="img/justin-bieber-lede.jpg" alt=""><div class="names">Justin Bieber</div></a>
       </li>
       <li>
         <a href=""><img src="img/atif.jpg" alt=""><div class="names">Atif Aslam</div></a>
       </li>
       <li>
         <a href=""> <img src="img/akhil.jpg" alt=""><div class="names">Akhil</div></a>
       </li>
       <li>
         <a href=""> <img src="img/alan.jpg" alt=""><div class="names">Alan Walker</div></a>
       </li>
       <li>
         <a href=""><img src="img/honey.jpg" alt=""><div class="names">Honey</div></a>
       </li>
       <li>
         <a href=""> <img src="img/neha.jpg" alt=""><div class="names">Neha Kakkar</div></a>
       </li>
       <li>
         <a href=""> <img src="img/arjit.jpg" alt=""><div class="names">Arjit Singh</div></a>
       </li>
       <li>
         <a href=""> <img src="img/guru.jpg" alt=""><div class="names">Guru </div></a>
       </li>
       <li>
         <a href=""> <img src="img/Diljit_Dosanjh.jpg" alt=""><div class="names">Diljit Dosanjh</div></a>
       </li>
      </div>
    </div> 
    -->  

     </div>
     <div class="master_play"> 
      <div class="wave" id="wave">
         <div class="wave1"></div>
         <div class="wave1"></div>
         <div class="wave1"></div>
      </div>
      <img src="img/20.jpg" alt="" id="poster_master_play">
      <h5 id="title">
         Vande Mataram
         <div class="subtitle">Bankim Chandra</div>
      </h5>
      <div class="icon">
         <i class="bi shuffle bi-music-note-beamed">next</i>
         <i class="bi bi-skip-start-fill" id="back"></i>
         <i class="bi bi-play-fill" id="masterPlay"></i>
         <i class="bi bi-skip-end-fill" id="next"></i>
        <a href="" download id="download_music" ><i class="bi bi-download" ></i></a> 
      </div>
      <span id="currentStart">0:00</span>
      <div class="bar">
         <input type="range" id="seek" min="0" max="100">
         <div class="bar2" id="bar2"></div>
         <div class="dot"></div>
      </div>
      <span id="currentEnd">0:30</span>
      <div class="like">
         <i class=" bi bi-suit-heart"></i> 
      </div>
         <script>
           let btn=document.querySelector(".like");
           let icon=btn.querySelector(".bi-suit-heart");

           btn.addEventListener("click",function(){
            if(icon.classList.contains("bi-suit-heart")){
               icon.classList.replace("bi-suit-heart","bi-suit-heart-fill");
               window.location.href = "like.html";
            }
            else{
               icon.classList.replace("bi-suit-heart-fill","bi-suit-heart");
            }
           })
           
         
         </script> 
       
      
     

      <div class="vol">
         <i class="bi bi-volume-up-fill" id="vol_icon"></i> 
         <input type="range"  min="0" max="100" id="vol">
         <div class="vol_bar"></div>
         <div class="dot" id="vol_dot"></div>
      </div>
     </div>
      
   </header>
   <script src="app.js"></script>
</body>
</html>