const music=new Audio('songs/1.mp3');
//music.play();

const songs=[
    {
        id:"1",
        songName:`On My Way<br>
        <div class="subtitle">Alan Walker</div>`,
        poster:"img/1.jpg"
    },
    {
        id:"2",
        songName:`Faded<br><div class="subtitle">Alan Walker</div>`,
        poster:"img/2.jpg"
    },
    {
        id:"3",
        songName:`Cartoon - On & On<br><div class="subtitle">Daniel Levi</div>`,
        poster:"img/3.jpg"
    },
    {
        id:"4",
        songName:`Warriyo - Mortals<br><div class="subtitle">Laura Brehm</div>`,
        poster:"img/4.jpg"
    },
    {
        id:"5",
        songName:`Ertugrul Gazi<br><div class="subtitle">Ertugrul</div>`,
        poster:"img/5.jpg"
    },
    {
        id:"6",
        songName:`Electronic Music<br><div class="subtitle">Electro</div>`,
        poster:"img/6.jpg"
    },
    {
        id:"7",
        songName:`Agar Tum Sath Ho<br><div class="subtitle">Tamasha</div>`,
        poster:"img/7.jpg"
    },    
    {
        id:"8",
        songName:`Suna Hai<br><div class="subtitle">Neha Kakkar</div>`,
        poster:"img/8.jpg"
    },
    {
        id:"9",
        songName:`Dilbar<br><div class="subtitle">Satyameva Jayte</div>`,
        poster:"img/9.jpg"
    },
    {
        id:"10",
        songName:`Duniya<br><div class="subtitle">Luka Chuppi</div>`,
        poster:"img/10.jpg"
    },
    {
        id:"11",
        songName:`Lagdi Lahore Di<br><div class="subtitle">Street Dancer 3</div>`,
        poster:"img/11.jpg"
    },
    {
        id:"12",
        songName:`Putt Jatt Da<br><div class="subtitle">Putt Jatt Da</div>`,
        poster:"img/12.jpg"
    },   
     {
        id:"13",
        songName:`Baarishein<br><div class="subtitle">Atif Aslam</div>`,
        poster:"img/13.jpg"
    },
    {
        id:"14",
        songName:`Vaaste<br><div class="subtitle">Dhvani Bhanushali</div>`,
        poster:"img/14.jpg"
    },
    {
        id:"15",
        songName:`Lut Gaye<br><div class="subtitle">Jubin Nautiyal</div>`,
        poster:"img/15.jpg"
    },
    {
        id:"16",
        songName:`Meri Zindagi Hai TU<br><div class="subtitle">Jubin Nautiyal</div>`,
        poster:"img/16.jpg"
    },
    {
        id:"17",
        songName:`Zarrori Tha<br><div class="subtitle">Rahat Ali Khan</div>`,
        poster:"img/17.jpg"
    },
    {
        id:"18",
        songName:`Pasoori<br><div class="subtitle">Ali Sethi</div>`,
        poster:"img/18.jpg"
    },
    {
        id:"19",
        songName:`Eh Munde Pagal Ne Saare<br><div class="subtitle">AP Dhillon</div>`,
        poster:"img/19.jpg"
    },
    {
        id:"20",
        songName:`Vande Mataram<br><div class="subtitle">Bankim Chandra</div>`,
        poster:"img/20.jpg"
    },
    {
        id:"21",
        songName:`Pehla Pehla Pyar<br><div class="subtitle">Pehla Pehla Pyar</div>`,
        poster:"img/21.jpg"
    },
    {
        id:"22",
        songName:`Tumsa Koi Pyaara
        <br><div class="subtitle">Kumar Sanu, Alka Yagnik</div>`,
        poster:"img/22.jpg"
    },
    {
        id:"23",
        songName:`Hai Rama<br><div class="subtitle">Rangeela</div>`,
        poster:"img/23.jpg"
    },
    {
        id:"24",
        songName:`O Jaane Jaana<br><div class="subtitle">Pyaar Kiya To Darna Kiya</div>`,
        poster:"img/24.jpg"
    },
    {
        id:"25",
        songName:` Wo Ladki Jo<br><div class="subtitle">
        Baadshah</div>`,
        poster:"img/25.jpg"
    },
    {
        id:"26",
        songName:`Yeh Dil Deewana<br><div class="subtitle">Sonu Nigam</div>`,
        poster:"img/26.jpg"
    },
    {
        id:"27",
        songName:`Yeh Haseen Vaadiyan<br><div class="subtitle">
        Roja</div>`,
        poster:"img/27.jpg"
    },
    {
        id:"28",
        songName:`Koi Mil Gaya<br><div class="subtitle">Kuch Kuch Hota Hai</div>`,
        poster:"img/28.jpg"
    },
    {
        id:"29",
        songName:`Jhanjharia<br><div class="subtitle">Alka Yagnik</div>`,
        poster:"img/29.jpg"
    },
    {
        id:"30",
        songName:`Ladki Badi Anjani<br><div class="subtitle">Kuch Kuch Hota Hai</div>`,
        poster:"img/30.jpg"
    },
    {
        id:"31",
        songName:`Dholi Taaro Dhol Baaje<br><div class="subtitle">Hum Dil De Chuke Sanam</div>`,
        poster:"img/31.jpg"
    },
    {
        id:"32",
        songName:`Zara Sa Jhoom Loon Main<br><div class="subtitle">Asha Bhosle</div>`,
        poster:"img/32.jpg"
    },
    {
        id:"33",
        songName:` Koi na koi<br><div class="subtitle">
        Deewana</div>`,
        poster:"img/33.jpg"
    },
    {
        id:"34",
        songName:`Churake Dil Mera<br><div class="subtitle">
        Main Khiladi Tu Anari
        </div>`,
        poster:"img/34.jpg"
    },
    {
        id:"35",
        songName:`Aankhon Ki Gustakhiyan<br><div class="subtitle">Hum Dil De Chuke Sanam</div>`,
        poster:"img/35.jpg"
    },

]

Array.from(document.getElementsByClassName('songItem')).forEach((e,i)=>{
    e.getElementsByTagName('img')[0].src= songs[i].poster;
    e.getElementsByTagName('h5')[0].innerHTML=songs[i].songName;
});

//search data start


let search_results=document.getElementsByClassName('search_results')[0];
songs.forEach(element => {
    
    
    const{id, songName, poster}=element;
    //console.log(id);
    let card= document.createElement('a');
    card.classList.add('card');
    card.href="#"+id;
    card.innerHTML=`
    
    <img src="${poster}" alt="" >
             <div class="content">
               ${songName}
               
             </div>
    `;
   
    search_results.appendChild(card);
   
});
let input=document.getElementsByTagName('input')[0];
input.addEventListener('keyup',()=>{
    let input_value=input.value.toUpperCase();
    let items = search_results.getElementsByTagName('a');

    for(let index=0; index<items.length; index++){
       let as=items[index].getElementsByClassName('content')[0];
       let text_value= as.textContent|| as.innerHTML;
       if (text_value.toUpperCase().indexOf(input_value)> -1) {
         items[index].style.display="flex";
         items[index].addEventListener('click',()=>{
            index++;
            music.src=`songs/${index}.mp3`;
            poster_master_play.src=`img/${index}.jpg`;
            
            music.play();
            masterPlay.classList.remove('bi-play-fill');
            masterPlay.classList.add('bi-pause-fill');
            download_music.href=`songs/${index}.mp3`;
        wave.classList.add('active1');
        let songTitles= songs.filter((els)=>{
            return els.id==index;
        });

        songTitles.forEach(elss=>{
            let{songName}=elss;
            title.innerHTML=songName;
        }); 
         })
       } else {
        items[index].style.display="none";
       }
       if (input.value==0) {
        search_results.style.display="none";
       } else {
        search_results.style.display="";
       }
    } 
    
    
})

          /* let card=search_results.querySelector(".card")[0]; 
         
          search_results.addEventListener('click',()=>{
          index;
            music.src=`songs/${index}.mp3`;
       
        music.play();
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
        download_music.href=`songs/${index}.mp3`;
        wave.classList.add('active1');
      
       

        let songTitles= songs.filter((els)=>{
            return els.id==index;
        });

        songTitles.forEach(elss=>{
            let{songName}=elss;
            title.innerHTML=songName;
        }); 
    
    }); 
    */
   

//search data end


let masterPlay=document.getElementById('masterPlay');
let wave = document.getElementById('wave');

masterPlay.addEventListener('click',()=>{
    if(music.paused || music.currentTime <= 0){
          music.play();
          wave.classList.add('active1');
          masterPlay.classList.remove('bi-play-fill');
          masterPlay.classList.add('bi-pause-fill');
    }
    else{
        music.pause();
        wave.classList.remove('active1');
        masterPlay.classList.add('bi-play-fill');
        masterPlay.classList.remove('bi-pause-fill');
    }
});
const makeAllPlays=()=>{
    Array.from(document.getElementsByClassName('playListPlay')).forEach((el)=>{
        el.classList.add('bi-play-circle-fill');
        el.classList.remove('bi-pause-circle-fill');
    })
}
const makeAllBackground=()=>{
    Array.from(document.getElementsByClassName('songItem')).forEach((el)=>{
        el.style.background='rgb(105, 105, 105, .0)';
    })
}

let index=0;
let poster_master_play=document.getElementById('poster_master_play');
let download_music =document.getElementById('download_music');

let title=document.getElementById('title');

Array.from(document.getElementsByClassName('playListPlay')).forEach((e)=>{
    e.addEventListener('click',(el)=>{
        index=el.target.id;
        //console.log(index);
        music.src=`songs/${index}.mp3`;
        poster_master_play.src=`img/${index}.jpg`;
        music.play();
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
        download_music.href=`songs/${index}.mp3`;
        wave.classList.add('active1');
        
        let songTitles= songs.filter((els)=>{
            return els.id==index;
        });

        songTitles.forEach(elss=>{
            let{songName}=elss;
            title.innerHTML=songName;
            download_music.setAttribute('download',songName);
        });

        makeAllBackground();
        Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105, 105, 105, .1)";
         makeAllPlays();
         el.target.classList.add('bi-pause-circle-fill');
         el.target.classList.remove('bi-play-circle-fill');
         
    });
})

let currentStart=document.getElementById('currentStart');
let currentEnd=document.getElementById('currentEnd');
let seek=document.getElementById('seek');
let bar2=document.getElementById('bar2');
let dot=document.getElementsByClassName('dot')[0];


music.addEventListener('timeupdate',()=>{
    let music_curr =music.currentTime;
    let music_dur =music.duration;

    let min1=Math.floor(music_dur/60);
    let sec1=Math.floor(music_dur%60);
    //console.log(music_dur);
    if(sec1<10){
          sec1 =`0${sec1}`
    }
    currentEnd.innerText=`${min1}:${sec1}`;

    let min2= Math.floor(music_curr/60);
    let sec2= Math.floor(music_curr%60);
    if(sec2<10){
        sec2 =`0${sec2}`
    }
    currentStart.innerText=`${min2}:${sec2}`;
    
    let progressBar =parseInt((music_curr / music_dur)*100);
    seek.value = progressBar;
    //console.log(seek.value);

    let seekbar=seek.value;
    bar2.style.width=`${seekbar}%`;
    dot.style.left=`${seekbar}%`;
   
});

seek.addEventListener('change',()=>{
     music.currentTime=seek.value*music.duration /100;
});


let vol_icon =document.getElementById('vol_icon');
let vol =document.getElementById('vol');
let vol_bar =document.getElementsByClassName('vol_bar');
let vol_dot =document.getElementById('vol_dot');

vol.addEventListener('change',()=>{
  if(vol.value == 0){
    vol_icon.classList.remove('bi-volume-up-fill');
    vol_icon.classList.remove('bi-volume-down-fill');
    vol_icon.classList.add('bi-volume-off-fill');
  }

  if(vol.value > 0){
    vol_icon.classList.remove('bi-volume-up-fill');
    vol_icon.classList.add('bi-volume-down-fill');
    vol_icon.classList.remove('bi-volume-off-fill');
  }
  if(vol.vlaue > 50){
    vol_icon.classList.add('bi-volume-up-fill');
    vol_icon.classList.remove('bi-volume-down-fill');
    vol_icon.classList.remove('bi-volume-off-fill');
  }
  let vol_a = vol.value;
  vol_bar.style.width = `${vol_a}%`;
  vol_dot.style.left = `${vol_a}%`;
  music.volume = vol_a/100;
});

let back = document.getElementById('back');
let next = document.getElementById('next');

back.addEventListener('click',()=>{
    index -= 1;
    if(index < 1){
        index = Array.from(document.getElementsByClassName('songItem')).length;
        
    }
    music.src=`songs/${index}.mp3`;
        poster_master_play.src=`img/${index}.jpg`;
        music.play();
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
        wave.classList.add('active1');
        
        let songTitles= songs.filter((els)=>{
            return els.id==index;
        });

        songTitles.forEach(elss=>{
            let{songName}=elss;
            title.innerHTML=songName;
        });

        makeAllBackground();
        Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105, 105, 105, .1)";
         makeAllPlays();
         el.target.classList.add('bi-pause-circle-fill');
         el.target.classList.remove('bi-play-circle-fill');
         
});

next.addEventListener('click',()=>{
    index ++ ;
    if(index > Array.from(document.getElementsByClassName('songItem')).length){
        index = 1;
        
    }
    music.src=`songs/${index}.mp3`;
        poster_master_play.src=`img/${index}.jpg`;
        music.play();
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
        wave.classList.add('active1');
        
        let songTitles= songs.filter((els)=>{
            return els.id==index;
        });

        songTitles.forEach(elss=>{
            let{songName}=elss;
            title.innerHTML=songName;
        });

        makeAllBackground();
        Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105, 105, 105, .1)";
         makeAllPlays();
         el.target.classList.add('bi-pause-circle-fill');
         el.target.classList.remove('bi-play-circle-fill');
         
});








let pop_song_left=document.getElementById('pop_song_left');
let pop_song_right=document.getElementById('pop_song_right');
let pop_song=document.getElementsByClassName('pop_song')[0];


pop_song_right.addEventListener('click',()=>{
    pop_song.scrollLeft  += 330;
});
pop_song_left.addEventListener('click',()=>{
    pop_song.scrollLeft -= 330;
});

let pop_old_left=document.getElementById('pop_old_left');
let pop_old_right=document.getElementById('pop_old_right');
let old=document.getElementsByClassName('old')[0];


pop_old_right.addEventListener('click',()=>{
    old.scrollLeft  += 330;
});
pop_old_left.addEventListener('click',()=>{
    old.scrollLeft -= 330;
});




let pop_art_left=document.getElementById('pop_art_left');
let pop_art_right=document.getElementById('pop_art_right');
let item=document.getElementsByClassName('item')[0];


pop_art_right.addEventListener('click',()=>{
    item.scrollLeft  += 330;
});
pop_art_left.addEventListener('click',()=>{
    item.scrollLeft -= 330;
});







let shuffle = document.getElementsByClassName('shuffle')[0];
shuffle.addEventListener('click',()=>{
    let a= shuffle.innerHTML;
    switch(a){
        case "next":
         shuffle.classList.add('bi-repeat');
         shuffle.classList.remove('bi-music-note-beamed');
         shuffle.classList.remove('bi-shuffle');
         shuffle.innerHTML = 'repeat';
          break;

        case "repeat":
            shuffle.classList.remove('bi-repeat');
            shuffle.classList.remove('bi-music-note-beamed');
            shuffle.classList.add('bi-shuffle');
            shuffle.innerHTML = 'random';
         break; 
        case "random":
            shuffle.classList.remove('bi-repeat');
            shuffle.classList.add('bi-music-note-beamed');
            shuffle.classList.remove('bi-shuffle');
            shuffle.innerHTML = 'next';
         break;
        
    }
});



const next_music =()=>{
    if(index == songs.length){
        index = 1
      }else{
       index++;
      }
       music.src=`songs/${index}.mp3`;
       poster_master_play.src=`img/${index}.jpg`;
       music.play();
       masterPlay.classList.remove('bi-play-fill');
       masterPlay.classList.add('bi-pause-fill');
       download_music.href=`songs/${index}.mp3`;
       wave.classList.add('active1');
       
       let songTitles= songs.filter((els)=>{
           return els.id==index;
       });

       songTitles.forEach(elss=>{
           let{songName}=elss;
           title.innerHTML=songName;
           download_music.setAttribute('download',songName);
       });

       makeAllBackground();
       Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105, 105, 105, .1)";
        makeAllPlays();
        el.target.classList.add('bi-pause-circle-fill');
        el.target.classList.remove('bi-play-circle-fill');   
}

const repeat_music =()=>{
       index;
       music.src=`songs/${index}.mp3`;
       poster_master_play.src=`img/${index}.jpg`;
       music.play();
       masterPlay.classList.remove('bi-play-fill');
       masterPlay.classList.add('bi-pause-fill');
       download_music.href=`songs/${index}.mp3`;
       wave.classList.add('active1');
       
       let songTitles= songs.filter((els)=>{
           return els.id==index;
       });

       songTitles.forEach(elss=>{
           let{songName}=elss;
           title.innerHTML=songName;
           download_music.setAttribute('download',songName);
       });

       makeAllBackground();
       Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105, 105, 105, .1)";
        makeAllPlays();
        el.target.classList.add('bi-pause-circle-fill');
        el.target.classList.remove('bi-play-circle-fill');   
}

const random_music =()=>{
    if(index == songs.length){
      index = 1
    }else{
      index = Math.floor((Math.random() * songs.length) + 1);
    }
    music.src=`songs/${index}.mp3`;
    poster_master_play.src=`img/${index}.jpg`;
    music.play();
    masterPlay.classList.remove('bi-play-fill');
    masterPlay.classList.add('bi-pause-fill');
    download_music.href=`songs/${index}.mp3`;
    wave.classList.add('active1');
    
    let songTitles= songs.filter((els)=>{
        return els.id==index;
    });

    songTitles.forEach(elss=>{
        let{songName}=elss;
        title.innerHTML=songName;
        download_music.setAttribute('download',songName);
    });

    makeAllBackground();
    Array.from(document.getElementsByClassName('songItem'))[index-1].style.background="rgb(105, 105, 105, .1)";
     makeAllPlays();
     el.target.classList.add('bi-pause-circle-fill');
     el.target.classList.remove('bi-play-circle-fill');   
}
music.addEventListener('ended',()=>{
    let b = shuffle.innerHTML;
    switch(b){
       case 'repeat':
         repeat_music();
       case 'next':
            next_music();  
        case 'random':
            random_music();     
         break; 
    }    

});



