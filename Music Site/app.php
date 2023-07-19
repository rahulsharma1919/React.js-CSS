<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
    <title>Music</title>
</head>

<body>
    <header>
        <div class="menu_side">
            <h6 id="menu_list_active_button"><i class="bi bi-list"></i></h6>
            <h1>Playlist</h1>
            <div class="playlist">
                <h4 class="active"><span></span><i class="bi bi-music-note-list"></i>Playlist</h4>
                <h4 class="active"><span></span><i class="bi bi-music-note-beamed"></i>Recent</h4>
                <h4 class="active"><span></span><i class="bi bi-music-player"></i></i>Recommended</h4>
            </div>
            <div class="menu_song">
                <li class="item">
                    <span>01</span>
                    <img src="https://i1.sndcdn.com/artworks-o1ySVNteRW1IDshO-gPuSgw-t500x500.jpg"
                        alt="Headlights Song">
                    <h5>
                        Headlights
                        <div class="subtitle">DJ Alok X Alan Walker</div>
                    </h5>
                    <i class="bi bi-play-circle-fill" id="1"></i>
                </li>
                <li class="item">
                    <span>02</span>
                    <img src="https://i1.sndcdn.com/artworks-000580919054-haidkz-t500x500.jpg" alt="On My Way">
                    <h5>
                        On My Way
                        <div class="subtitle">Alan Walker - Sabrina Carpenter</div>
                    </h5>
                    <i class="bi bi-play-circle-fill" id="2"></i>
                </li>
                <li class="item">
                    <span>03</span>
                    <img src="https://i1.sndcdn.com/artworks-ev0a8a8enTB0JNz4-Dlryzg-t500x500.jpg"
                        alt="Faded">
                    <h5>
                        Faded
                        <div class="subtitle">Alan Walker</div>
                    </h5>
                    <i class="bi bi-play-circle-fill" id="3"></i>
                </li>
                <li class="item">
                    <span>04</span>
                    <img src="https://www.lyricsgoal.com/wp-content/uploads/2020/08/iconic-king.jpg"
                        alt="ICONIC">
                    <h5>
                        ICONIC
                        <div class="subtitle">KING</div>
                    </h5>
                    <i class="bi bi-play-circle-fill" id="4"></i>
                </li>
                <li class="item">
                    <span>05</span>
                    <img src="https://i.scdn.co/image/ab67616d0000b27337f65266754703fd20d29854"
                        alt="Champagne Talk Song">
                    <h5>
                        Champagne Talk
                        <div class="subtitle">KING</div>
                    </h5>
                    <i class="bi bi-play-circle-fill" id="5"></i>
                </li>
                <li class="item">
                    <span>06</span>
                    <img src="https://i.scdn.co/image/ab67616d0000b273111723ccb67c6283e5795658"
                        alt="SinnerSong">
                    <h5>
                        Sinner
                        <div class="subtitle">KING</div>
                    </h5>
                    <i class="bi bi-play-circle-fill" id="6"></i>
                </li>
                <li class="item">
                    <span>07</span>
                    <img src="https://covers.djpunjab.pro/image/498660/Champagne-1.jpg"
                        alt="Champagne Song">
                    <h5>
                        Champagne
                        <div class="subtitle">Diljit Dosanjh</div>
                    </h5>
                    <i class="bi bi-play-circle-fill" id="7"></i>
                </li>
                <li class="item">
                    <span>08</span>
                    <img src="http://timesofindia.indiatimes.com/photo/61238352.cms"
                        alt="Headlights Song">
                    <h5>
                        Uska Hi Bana
                        <div class="subtitle">Arijit Singh</div>
                    </h5>
                    <i class="bi bi-play-circle-fill" id="8"></i>
                </li>
            </div>
        </div>


        <div class="song_side">
            <nav>
                <ul>
                    <li>Discover <span></span></li>
                    <li>My Library</li>
                    <li>Radio</li>
                </ul>
                <div class="search">
                    <form action="https://soundcloud.com/search" method="get">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="Search Music..." name="q">
                    </form>
                </div>
                <div class="user">
                    <img src="LOGO-psd.png" alt="logo">
                </div>
            </nav>
            <div class="content">
                <h1>Alan Walker-Faded</h1>
                <p>You were the shadow to my light did you feel us Another Start you Fade <br>Away afraid our aim is out
                    of sight wanna see us Alive</p>
                <div class="buttons">
                    <button>PLAY</button>
                    <button>FOLLOW</button>
                </div>
            </div>

            <div class="popular_song">
                <div class="h4">
                    <h4>Popular Hits</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_song_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_song_right"></i>
                    </div>
                </div>
                <div class="pop_song">
                    <li class="item">
                        <div class="img_play">
                            <img src="https://m.media-amazon.com/images/M/MV5BZTUyYWI4Y2EtZGQ2MC00NDNiLTg3N2UtMWMwY2I1ZTViYzA4XkEyXkFqcGdeQXVyMTY5MDE5NA@@._V1_.jpg"
                                alt="Faded Song">
                            <i class="bi bi-play-circle-fill" id="9"></i>
                        </div>
                        <h5>
                            Faded
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="item">
                        <div class="img_play">
                            <img src="https://images.genius.com/f4e215c19e40716135e2aea7cdfaa970.1000x1000x1.jpg"
                                alt="Space Melody">
                            <i class="bi bi-play-circle-fill" id="10"></i>
                        </div>
                        <h5>
                            Space Melody
                            <div class="subtitle">VIZE X Alan Walker</div>
                        </h5>
                    </li>
                    <li class="item">
                        <div class="img_play">
                            <img src="https://i.scdn.co/image/ab67616d0000b273bafcc8454289261db2fe7b03" alt="The Drum">
                            <i class="bi bi-play-circle-fill" id="11"></i>
                        </div>
                        <h5>
                            The Drum
                            <div class="subtitle">Alan Walker</div>
                        </h5>
                    </li>
                    <li class="item">
                        <div class="img_play">
                            <img src="https://m.media-amazon.com/images/M/MV5BZTViMTM5ZjQtOTRkNC00YjM0LWI5ZGUtMjU1NmYwMmExODgwXkEyXkFqcGdeQXVyMjAzMjcxNTE@._V1_.jpg"
                                alt="Alone Pt.2">
                            <i class="bi bi-play-circle-fill" id="12"></i>
                        </div>
                        <h5>
                            Alone Pt.2
                            <div class="subtitle">Alan Walker - Ava Max</div>
                        </h5>
                    </li>
                    <li class="item">
                        <div class="img_play">
                            <img src="https://i.scdn.co/image/ab67616d0000b2735b74e703d6ffb2ea16860c86" alt="Excuses">
                            <i class="bi bi-play-circle-fill" id="13"></i>
                        </div>
                        <h5>
                            Excuses
                            <div class="subtitle">AP Dhiion, Gurinder Gill ,Intense</div>
                        </h5>
                    </li>
                    <li class="item">
                        <div class="img_play">
                            <img src="https://i1.sndcdn.com/artworks-AOyU3tMtLzVcUjB4-sFzQyg-t500x500.jpg" alt="Insane">
                            <i class="bi bi-play-circle-fill" id="14"></i>
                        </div>
                        <h5>
                            Insane
                            <div class="subtitle">AP Dhilion x Gurinder Gill</div>
                        </h5>
                    </li>
                    <li class="item">
                        <div class="img_play">
                            <img src="https://i1.sndcdn.com/artworks-xLgMAusAz6eVk3ry-71jTAw-t500x500.jpg" alt="Toxic">
                            <i class="bi bi-play-circle-fill" id="15"></i>
                        </div>
                        <h5>
                            Toxic
                            <div class="subtitle">AP Dhilion</div>
                        </h5>
                    </li>
                    <li class="item">
                        <div class="img_play">
                            <img src="https://i.scdn.co/image/ab67616d0000b273ee22470d9fbb49cb3d4df38c"
                                alt="Brown Munde">
                            <i class="bi bi-play-circle-fill" id="16"></i>
                        </div>
                        <h5>
                            Brown Munde
                            <div class="subtitle">AP Dhilion, Shinta Kehlon, Gurinder Gill</div>
                        </h5>
                    </li>
                    <li class="item">
                        <div class="img_play">
                            <img src="https://i.scdn.co/image/ab67616d0000b27392b6969f35a145500c59ed4e" alt="Legend">
                            <i class="bi bi-play-circle-fill" id="17"></i>
                        </div>
                        <h5>
                            Legend
                            <div class="subtitle">Sidhu Moose Wala</div>
                        </h5>
                    </li>
                    <li class="item">
                        <div class="img_play">
                            <img src="https://c.saavncdn.com/758/295-Sidhu-Moose-Wala--English-2021-20210922022502-500x500.jpg"
                                alt="295">
                            <i class="bi bi-play-circle-fill" id="18"></i>
                        </div>
                        <h5>
                            295
                            <div class="subtitle">Sidhu Moose Wala</div>
                        </h5>
                    </li>
                    <li class="item">
                        <div class="img_play">
                            <img src="https://i.ytimg.com/vi/Xf-N1joH6h4/maxresdefault.jpg" alt="Calaboose">
                            <i class="bi bi-play-circle-fill" id="19"></i>
                        </div>
                        <h5>
                            Calaboose
                            <div class="subtitle">Sidhu Moose Wala</div>
                        </h5>
                    </li>
                    <li class="item">
                        <div class="img_play">
                            <img src="https://c.saavncdn.com/706/Lut-Gaye-Feat-Emraan-Hashmi--Hindi-2021-20210217051001-500x500.jpg"
                                alt="Lut Gaye">
                            <i class="bi bi-play-circle-fill" id="20"></i>
                        </div>
                        <h5>
                            Lut Gaye
                            <div class="subtitle">Jubin Nautiyal ft. Emran Hashmi</div>
                        </h5>
                    </li>
                    <li class="item">
                        <div class="img_play">
                            <img src="https://i.ytimg.com/vi/0iOvl273V5U/maxresdefault.jpg" alt="Akhiyan">
                            <i class="bi bi-play-circle-fill" id="20"></i>
                        </div>
                        <h5>
                            Akhiyan
                            <div class="subtitle">Mitraz</div>
                        </h5>
                    </li>
                </div>
            </div>
            <div class="popular_artist">
                <div class="h4">
                    <h4>Popular Artists</h4>
                    <div class="btn_s">
                        <i class="bi bi-arrow-left-short" id="pop_art_left"></i>
                        <i class="bi bi-arrow-right-short" id="pop_art_right"></i>
                    </div>
                </div>
                <div class="item Artists_bx">
                    <li>
                        <img src="https://paglawebmusic.com/wp-content/uploads/2022/06/Jabo-Na-Fire-Ar-Ghore-Arijit-Singh-Mp3-Song-Download.jpg"
                            alt="Arijit Singh">
                    </li>
                    <li>
                        <img src="https://yt3.googleusercontent.com/ytc/AL5GRJW6aLCxgmx6-4H-e_wphXF-geY3lvsLbuJLPYriwcE=s900-c-k-c0x00ffffff-no-rj"
                            alt="KING">
                    </li>
                    <li>
                        <img src="https://play-lh.googleusercontent.com/I3sLvlBxW-Zc2Ym85D2sJwvDeckbuqHxPfZ7nPLUtq0PVDX8tmxbgZMuGQCoBDJyJg=w240-h480-rw"
                            alt="AP Dhilion">
                    </li>
                    <li>
                        <img src="https://i.scdn.co/image/ab6761610000e5eb92103a69abd9fbf76d866374"
                            alt="Diljit Dosanjh">
                    </li>
                    <li>
                        <img src="https://wallpaperaccess.com/full/4854987.jpg"
                            alt="DJ Alok">
                    </li>
                    <li>
                        <img src="https://i.scdn.co/image/ab6761610000e5eb65d54c88ab4c1abf204b360f"
                            alt="Sidhu Moose Wala">
                    </li>
                    <li>
                        <img src="https://i.scdn.co/image/ab6761610000e5eb73175ec6399f8fd91ce94de0"
                            alt="Rav Aulakh">
                    </li>
                    <li>
                        <img src="https://i.scdn.co/image/ab6761610000e5ebe7d9c55ce4f6a1dbbea460a1"
                            alt="Hardy Sandhu">
                    </li>
                    <li>
                        <img src="https://i.scdn.co/image/ab6761610000e5ebd005ab4b5b3eb67b48ed82a6"
                            alt="Badshah">
                    </li>
                    <li>
                        <img src="https://i1.sndcdn.com/avatars-GBhEb4pyHIRKyPfO-9aDwAw-t500x500.jpg"
                            alt="Shubh">
                    </li>
                    <li>
                        <img src="https://i.scdn.co/image/ab6761610000e5eb37fd1d32320eefccb2bc6fa4"
                            alt="Khasa Aala Chahar">
                    </li>
                    <li>
                        <img src="https://i.scdn.co/image/ab6761610000e5ebb3fe1b3ee6caedd21d2a6b85"
                            alt="Shreya Ghoshal">
                    </li>
                    <li>
                        <img src="https://i.scdn.co/image/ab6761610000e5ebb8162865f9d33a22dfac8791"
                            alt="Sachet Tandon">
                    </li>
                    <li>
                        <img src="https://i.scdn.co/image/ab6761610000e5eb80ed3cceb3b0e74ed928d3ec"
                            alt="Zack Knight">
                    </li>
                    <li>
                        <img src="https://allaboutmusic.in/wp-content/uploads/2022/09/Imran-Khan.jpg"
                            alt="Imran Khan">
                    </li>
                </div>
            </div>
        </div>

        <div class="master_play">
            <div class="wave" id="wave">
                <div class="wave1"></div>
                <div class="wave1"></div>
                <div class="wave1"></div>
            </div>
            <img src="https://m.media-amazon.com/images/M/MV5BNzk2MDM1MjctODFlZi00YTEyLWEwODItYTY3YmY3M2MzZGI4XkEyXkFqcGdeQXVyMjI4MjA3NDY@._V1_.jpg"
                alt="Sweet Dreams" id="post_master_play">
            <h5 id="title">
                Sweet Dreams <br>
                <div class="subtitle">Alan Walker - Imanbek</div>
            </h5>
            <div class="icon">
                <i class="bi shuffle bi-music-note-beamed">Next</i>
                <i class="bi bi-skip-start-fill"></i>
                <i class="bi bi-play-fill" id="masterPlay"></i>
                <i class="bi bi-skip-end-fill"></i>
                <a href="" download="" id="download"></a><i class="bi bi-cloud-arrow-down-fill"></i></a>
            </div>
            <span id="currentStart">0:00</span>
            <div class="bar">
                <input type="range" id="seek" min="0" max="100">
                <div class="bar2" id="bar2"></div>
                <div class="dot"></div>
            </div>
            <span id="currentEnd">0:30</span>
            <div class="vol">
                <i class="bi bi-volume-up-fill" id="vol_icon"></i>
                <input type="range" min="0" max="100" id="vol">
                <div class="vol_bar"></div>
                <div class="dot" id="vol_dot"></div>
            </div>
        </div>
    </header>
    <script src="clone.js"></script>
    <script src="script.js"></script>
    <script>
        let menu_list_active_button = document.getElementById('menu_list_active_button');
        let menu_side = document.getElementsByClassName('menu_side')[0];

        menu_list_active_button.addEventListener('click', () => {
            menu_side.style.transform = 'unset';
            menu_list_active_button.style.opacity = 0;
        })

        let song_side = document.getElementsByClassName('song_side')[0];
        
        song_side.addEventListener('click', () => {
            menu_side.style.transform = 'translateX(-100%)';
            menu_list_active_button.style.opacity = 1;
        })
    </script>
</body>

</html>







<!--remaining - playlist-->