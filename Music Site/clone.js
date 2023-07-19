const music = new Audio('audio1.mp3');
//music.play();

const songs = [
    {
        id: 1,
        songName: 'On My Way'<br>
        <div class="subtitle">Alan Walker</div>,
        poster: "img/1.jpg"
    },
    {
        id: 2,
        songName: 'arjit singh'<br>
        <div class="subtitle">arjit singh</div>,
        poster: "img/2.jpg"
    },
    {
        id: 3,
        songName: 'Cartoon - On & on'<br>
        <div class="subtitle">Daniel Levi</div>,
        poster: "img/3.jpg"
    },
    {
        id: 4,
        songName: 'Warriyo - Mortals'<br>
        <div class="subtitle">Mortal</div>,
        poster: "img/4.jpg"        
    },
    {
        id: 5,
        songName: 'Ertugrul Gazi'<br>
        <div class="subtitle">Ertugul</div>,
        poster: "img/5.jpg"        
    },        
    {
        id: 6,
        songName: 'Agar Tum Sath Ho'<br>
        <div class="subtitle">Tamashaa</div>,
        poster: "img/7.jpg"        
    },
    {
        id: 7,
        songName: 'Kala Jaadu'<br>
        <div class="subtitle">Freddy</div>,
        poster: "https://www.lyricsbull.com/wp-content/uploads/2020/08/iconic-king.jpg"        
    },
    {
        id: 8,
        songName: 'Headlights'<br>
        <div class="subtitle">DJ Alok X Alan Walker</div>,
        poster: "https://i1.sndcdn.com/artworks-o1ySVNteRW1IDshO-gPuSgw-t500x500.jpg"        
    },
    {
        id: 9,
        songName: 'Faded'<br>
        <div class="subtitle">Alan Walker</div>,
        poster: "https://m.media-amazon.com/images/M/MV5BZTUyYWI4Y2EtZGQ2MC00NDNiLTg3N2UtMWMwY2I1ZTViYzA4XkEyXkFqcGdeQXVyMTY5MDE5NA@@._V1_.jpg"        
    },
    {
        id: 10,
        songName: 'Space Melody'<br>
        <div class="subtitle">Waze X Alan Walker</div>,
        poster: "https://images.genius.com/f4e215c19e40716135e2aea7cdfaa970.1000x1000x1.jpg"        
    },
    {
        id: 11,
        songName: 'The  Drum'<br>
        <div class="subtitle">Alan Walker</div>,
        poster: "https://i.scdn.co/image/ab67616d0000b273bafcc8454289261db2fe7b03"        
    },
    {
        id: 12,
        songName: 'Alone Part 2'<br>
        <div class="subtitle">Alan Walker - Ava Max</div>,
        poster: "https://m.media-amazon.com/images/M/MV5BZTViMTM5ZjQtOTRkNC00YjM0LWI5ZGUtMjU1NmYwMmExODgwXkEyXkFqcGdeQXVyMjAzMjcxNTE@._V1_.jpg"        
    },
    {
        id: 13,
        songName: 'Excuses'<br>
        <div class="subtitle">AP Dhiion, Gurinder Gill ,Intense</div>,
        poster: "https://i.scdn.co/image/ab67616d0000b2735b74e703d6ffb2ea16860c86"        
    },
    {
        id: 14,
        songName: 'Insane'<br>
        <div class="subtitle">AP Dhillon X Gurrinder Gill</div>,
        poster: "https://i1.sndcdn.com/artworks-AOyU3tMtLzVcUjB4-sFzQyg-t500x500.jpg"        
    },
    {
        id: 15,
        songName: 'Toxic'<br>
        <div class="subtitle">A P Dhillon</div>,
        poster: "https://i1.sndcdn.com/artworks-xLgMAusAz6eVk3ry-71jTAw-t500x500.jpg"        
    },
    {
        id: 16,
        songName: 'Brown Munde'<br>
        <div class="subtitle">AP Dhilion, Shinta Kehlon, Gurinder Gill</div>,
        poster: "https://i.scdn.co/image/ab67616d0000b273ee22470d9fbb49cb3d4df38c"        
    },
    {
        id: 17,
        songName: 'Legend'<br>
        <div class="subtitle">Siddhu Moose Wala</div>,
        poster: "https://i.scdn.co/image/ab67616d0000b27392b6969f35a145500c59ed4e"        
    },
    {
        id: 18,
        songName: '295'<br>
        <div class="subtitle">Siddhu Moose Wala</div>,
        poster: "https://c.saavncdn.com/758/295-Sidhu-Moose-Wala--English-2021-20210922022502-500x500.jpg"        
    },
    {
        id: 19,
        songName: 'Calaboose'<br>
        <div class="subtitle">Siddhu Moose Wala</div>,
        poster: "https://i.ytimg.com/vi/Xf-N1joH6h4/maxresdefault.jpg"        
    },
    {
        id: 20,
        songName: 'Lut Gaye'<br>
        <div class="subtitle">Emraan Hashmi</div>,
        poster: "https://c.saavncdn.com/706/Lut-Gaye-Feat-Emraan-Hashmi--Hindi-2021-20210217051001-500x500.jpg"        
    }
]
Array.from(document.getElementsByClassName('Item')).forEach((e, i) =>{  
    e.getElementsByTagName('img')[0].src = songs[i].poster;
    e.getElementsByTagName('h5')[0].innerHTML = songs[i].songName; 
});

let masterPlay = document.getElementById('masterPlay');

masterPlay.addEventListener('click', ()=>{
    if (music.paused || music.currentTime <= 0) {
        music.play();
        wave.classList.add('active1');
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');
    } else {
        music.pause();
        wave.classList.remove('active1');
        masterPlay.classList.add('bi-play-fill');
        masterPlay.classList.remove('bi-pause-fill');
        
    }
});

const makeAllplays = () =>{
    Array.from(document.getElementsByClassName('playListPlay')).forEach((el)=>{
        el.classList.remove('bi-play-fill');
        el.classList.add('bi-pause-fill');
    })
}

let index = 0;

Array.from(document.getElementsByClassName('playListPlay')).forEach((e)=>{
    e.addEventListener('click', ()=>{
        index = el.target.id;
        // console.log(index);
        music.src = `audio/${index}.mp3`;
        poster_master_play.src = `img/${index}.jpg`;
        music.play();
        masterPlay.classList.remove('bi-play-fill');
        masterPlay.classList.add('bi-pause-fill');

        let songTitles = songs.filter((els) => {
            return els.id == index;
        });

        songTitles.forEach(elss =>{
            let { songName } = elss;
            title.innerHTML = songName;
            title.innerHTML = songName;
            poster_master_play.src = poster;      
        });

        makeAllBackground();
        Array.from(document.getElementsByClassName('songItem'))[index - 1].style.background ="rgb(105, 105, 105, .1)";
        makeAllplays;
        el.target.classList.add('bi-pause-fill');
        el.target.classList.remove('bi-play-fill');
        wave.classList.add('active1'); 
    });
})

let currentStart = document.getElementById('currentStart');
let currentEnd = document.getElementById('currentEnd');
let seek = document.getElementById('seek');
let bar2 = document.getElementById('bar2');
let dot = document.getElementsByClassName('dot')[0];

music.addEventListener('timeupdate', ()=> {
    let music_curr = music.currentTime;
    let music_dur = music.duration;

    let min1 = Math.floor(music_dur / 60);
    let sec1 = Math.floor(music_dur % 60);

    //console.log(min1);
    if (sec1 < 10) {
        sec1 = `0${sec1}`;
    }
    currentEnd.innerText =  `${min1}:${sec1}`;

    let min2 = Math.floor(music_curr / 60);
    let sec2 = Math.floor(music_curr % 60);
    if (sec2 < 10) {
        sec2 = `0${sec2}`;
    }

    currentStart.innerText = `${min2}:${sec2}`;

    let progressBar = parseInt((music_curr / music_dur) * 100);
    seek.value = progressBar;
    //console.log(seek.value);
    let seekbar = seek.value;
    bar2.style.width = `${seekbar}%`;
    dot.style.left = `${seekbar}%`;
});

seek.addEventListener(`change`, ()=>{
    music_currentTime = seek.value * music.duration / 100;
});

let vol_icon = document.getElementById('vol_icon');
let vol = document.getElementsByClassName('vol')[0];
let vol_dot = document.getElementsById('vol_dot');

vol.addEventListener(`change`, ()=>{
    if (vol.value == 0) {
        vol_icon.classList.remove('bi-volume-up-fill');
        vol_icon.classList.remove('bi-volume-up-fill');
        vol_icon.classList.add('bi-volume-up-fill');
    }
    if (vol.value > 0) {
        vol_icon.classList.remove('bi-volume-up-fill');
        vol_icon.classList.add('bi-volume-up-fill');
        vol_icon.classList.remove('bi-volume-up-fill');
    }
    if (vol.value > 50) {
        vol_icon.classList.add('bi-volume-up-fill');
        vol_icon.classList.remove('bi-volume-up-fill');
        vol_icon.classList.remove('bi-volume-up-fill');
    }
    let vol_a = vol.value;
    vol_bar.style.width = `${vol_a}%`;
    vol_dot.style.left = `${vol_a}%`;
    music.volume = vol_a / 100;
})


let back = document.getElementsById('back');
let next = document.getElementsById('next');


back.addEventListener('click', ()=>{
    index -= 1;
    if (index < 1) {
        index = Array.from(document.getElementsByClassName('songItem')).length;
    }
    music.src = `audio/${index}.mp3`;
    poster_master_play.src = `img/${index}.jpg`;
    music.play();
    masterPlay.classList.remove('bi-play-fill');
    masterPlay.classList.add('bi-pause-fill');

    let songTitles = songs.filter((els) => {
        return els.id == index;
    });

    songTitles.forEach(elss =>{
        let { songName } = elss;
        title.innerHTML = songName;
        title.innerHTML = songName;
        poster_master_play.src = poster;      
    });

    makeAllBackground();
    Array.from(document.getElementsByClassName('songItem'))[index - 1].style.background ="rgb(105, 105, 105, .1)";
    makeAllplays;
    el.target.classList.add('bi-pause-fill');
    el.target.classList.remove('bi-play-fill');
    wave.classList.add('active1');
})

next.addEventListener('click', ()=> {
    index ++;
    if (index < 1) {
        index > Array.from(document.getElementsByClassName('songItem')).length;
        index = 1;
    }
    music.src = `audio/${index}.mp3`;
    poster_master_play.src = `img/${index}.jpg`;
    music.play();
    masterPlay.classList.remove('bi-play-fill');
    masterPlay.classList.add('bi-pause-fill');

    let songTitles = songs.filter((els) => {
        return els.id == index;
    });

    songTitles.forEach(elss =>{
        let { songName } = elss;
        title.innerHTML = songName;
        title.innerHTML = songName;
        poster_master_play.src = poster;      
    });

    makeAllBackground();
    Array.from(document.getElementsByClassName('songItem'))[index - 1].style.background ="rgb(105, 105, 105, .1)";
    makeAllplays;
    el.target.classList.add('bi-pause-fill');
    el.target.classList.remove('bi-play-fill');
    wave.classList.add('active1');
    });

    



let pop_song_left = document.getElementById('pop_song_left');
let pop_song_right = document.getElementById('pop_song_right');
let pop_song = document.getElementsByClassName('pop_song')[0];


pop_song_right.addEventListener('click', () => {
    pop_song.scrollLeft += 330;
})
pop_song_left.addEventListener('click', () => {
    pop_song.scrollLeft +=330;
})



Array.from(document.getElementsByClassName('songItem')).forEach((e, i) =>{
    e.getElementsByTagName('')
})

let pop_art_left = document.getElementById('pop_art_left');
let pop_art_right = document.getelementsById('pop_art_right');
let Artists_bx = document.getElementsByClassName('Artists_bx')[0];

pop_song_right.addEventListener('click', () => {
    pop_song.scrollLeft += 330;
})
