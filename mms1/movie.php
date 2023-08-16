<?php
session_start();
include_once('connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo-tab.png" type="image/x-icon">
    <title>GoFlix</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<header>
      <video src="video/obxx.mp4" autoplay muted repeat></video>  
     
    
    <nav>
        <div class="logo_ul">
           <a href="movie.php"><img src="img/logo-web.png" alt=""></a>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>
                    <a href="#section1">Series</a>
                </li>
                <li>
                    <a href="#section2">Movies</a>
                </li>
                
            </ul>
        </div>
    <div class="search_user">
        <input type="text" placeholder="Search..." id="search_input">
    <a href="index.php"><img src="img/user1.jpg" alt=""></a>
        <div class="search">
        </div>
    </div>
    </nav>
<div class="content">
    <h1 >Outerbanks</h1>
    <p>A teenager enlists his three best friends to hunt for a legendary treasure linked to his father's disappearance.</p>
    <div class="details">
        <h6>A Netflix Original Film</h6>
        <h7 id="title" style="display: none;"></h7>
        <h5 id="gen">Adventure</h5>
        <h4 id="date">2022</h4>
        <h3 id="rate"> <span>IMDB</span><i class="bi bi-star-fill"></i> 7.5</h3>
    </div>
   <div class="btns">
    <a href="https://www.imdb.com/title/tt1190634/" id="play">Watch <i class="bi bi-play-fill"></i></a>
    <a href="" id="download_main"><i class="bi bi-cloud-arrow-down-fill"></i></a>
</div>
</div>
<section>
    <h4>Popular</h4>
    <i class="bi bi-chevron-left"></i>
    <i class="bi bi-chevron-right"></i>
    <div class="cards">
        <!-- <a href="#" class="card">
        <img src="img/the boys.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/the boys1.jpg" alt="">
            <div class="cont">
                <h4>The Boys</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.6</i></h3>
                </div>
            </div>
        </div>
    </a> -->
</div>

</section>

    <section id="section1">
        <h4>Series</h4>
        <i class="bi bi-chevron-left"></i>
        <i class="bi bi-chevron-right"></i>
        <div class="cards">
        
          <!-- Money Heist -->
          <a href="#" class="card">
            <img src="img/money heist.jpg" alt="" class="poster">
            <div class="rest_card">
              <img src="img/money_heist1.jpg" alt="">
              <div class="cont">
                <h4>Money Heist</h4>
                <div class="sub">
                  <p>Action, 2022</p>
                  <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.9</i></h3>
                </div>
              </div>
            </div>
          </a>


    <!-- You -->

    <a href="#" class="card">
        <img src="img/You.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/You1.jpg" alt="">
            <div class="cont">
                <h4>You</h4>
                <div class="sub">
                    <p>Crime, 2018</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 7.7</i></h3>
                </div>
            </div>
        </div>
    </a>

    <!-- Ginny & Gerogia  -->

    <a href="#" class="card">
        <img src="img/Ginny.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/Ginny1.webp" alt="">
            <div class="cont">
                <h4>Ginny & Georgia</h4>
                <div class="sub">
                    <p>Comedy, 2021</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 7.5</i></h3>
                </div>
            </div>
        </div>
    </a>

  <!-- Night Agent  -->

    <a href="#" class="card">
        <img src="img/Nightag.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/nightag1.jpg" alt="">
            <div class="cont">
                <h4>The Night Agent</h4>
                <div class="sub">
                    <p>Action, 2023</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.9</i></h3>
                </div>
            </div>
        </div>
    </a>

 <!-- Moon Knight -->

    <a href="#" class="card">
        <img src="img/moon knight.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/moon knight1.webp" alt="">
            <div class="cont">
                <h4>Moon Knight</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 7.3</i></h3>
                </div>
            </div>
        </div>
    </a>

<!-- Outer Banks -->

    <a href="#" class="card">
        <img src="img/outerbanks.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/outerbanks1.jpg" alt="">
            <div class="cont">
                <h4>Outer Banks</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 7.5</i></h3>
                </div>
            </div>
        </div>
    </a>

<!-- Breaking Bad -->

    <a href="#" class="card">
        <img src="img/Breakingbad.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/Braking1.webp" alt="">
            <div class="cont">
                <h4>Breaking bad</h4>
                <div class="sub">
                    <p>Action, 2008</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.5</i></h3>
                </div>
            </div>
        </div>
    </a>

<!-- The Recruit -->

    <a href="#" class="card">
        <img src="img/recruit.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/recruit1.jpg" alt="">
            <div class="cont">
                <h4>The Recruit</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 7.4</i></h3>
                </div>
            </div>
        </div>
    </a>

  <!-- Stranger Things -->

    <a href="#" class="card">
        <img src="img/stranger1.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/stranger.jpg" alt="">
            <div class="cont">
                <h4>Stranger Things</h4>
                <div class="sub">
                    <p>Drama, 2016</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 8.7</i></h3>
                </div>
            </div>
        </div>
    </a>

<!-- Wednsday -->

    <a href="#" class="card">
        <img src="img/Wed.png" alt="" class="poster">
        <div class="rest_card">
            <img src="img/wed1.jpg" alt="">
            <div class="cont">
                <h4>Wednsday</h4>
                <div class="sub">
                    <p>Drama, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 8.1</i></h3>
                </div>
            </div>
        </div>
    </a>


    <a href="#" class="card">
        <img src="img/money heist.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/money_heist1.jpg" alt="">
            <div class="cont">
                <h4>Money Heist</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.9</i></h3>
                </div>
            </div>
        </div>
    </a>





</section>


<section id="section2">
    <h4>Movies</h4>
    <i class="bi bi-chevron-left"></i>
    <i class="bi bi-chevron-right"></i>
    <div class="cards">
        
        
        <a href="#" class="card">
        <img src="img/spiderman.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/spiderman1.jpg" alt="">
            <div class="cont">
                <h4>SpiderMen</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.6</i></h3>
                </div>
            </div>
        </div>
    </a>


    <a href="#" class="card">
        <img src="img/topgun.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/topgun1.jpg" alt="">
            <div class="cont">
                <h4>Top Gun</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.6</i></h3>
                </div>
            </div>
        </div>
    </a>


    <a href="#" class="card">
        <img src="img/uncharted.webp" alt="" class="poster">
        <div class="rest_card">
            <img src="img/uncharted1.jpg" alt="">
            <div class="cont">
                <h4>Uncharted</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.6</i></h3>
                </div>
            </div>
        </div>
    </a>


    <a href="#" class="card">
        <img src="img/Jhon Wick.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/jhon wick1.webp" alt="">
            <div class="cont">
                <h4>John Wick</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.6</i></h3>
                </div>
            </div>
        </div>
    </a>


    <a href="#" class="card">
        <img src="img/the boys.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/the boys1.jpg" alt="">
            <div class="cont">
                <h4>The Boys</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.6</i></h3>
                </div>
            </div>
        </div>
    </a>


    <a href="#" class="card">
        <img src="img/jurassic world.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/jurassic world1.jpg" alt="">
            <div class="cont">
                <h4>Jurassic World</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.6</i></h3>
                </div>
            </div>
        </div>
    </a>


    <a href="#" class="card">
        <img src="img/thor love of thunder.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/thor love of thunder1.avif" alt="">
            <div class="cont">
                <h4>Thor</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.6</i></h3>
                </div>
            </div>
        </div>
    </a>


    <a href="#" class="card">
        <img src="img/the boys.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/the boys1.jpg" alt="">
            <div class="cont">
                <h4>The Boys</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.6</i></h3>
                </div>
            </div>
        </div>
    </a>


    <a href="#" class="card">
        <img src="img/eternals.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/eternals1.webp" alt="">
            <div class="cont">
                <h4>Eternals</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.6</i></h3>
                </div>
            </div>
        </div>
    </a>


    <a href="#" class="card">
        <img src="img/ant man.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/ant man1.jpg" alt="">
            <div class="cont">
                <h4>Ant-Man</h4>
                <div class="sub">
                    <p>Action, 2022</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.6</i></h3>
                </div>
            </div>
        </div>
    </a>


    <a href="#" class="card">
        <img src="img/creed.jpg" alt="" class="poster">
        <div class="rest_card">
            <img src="img/creed1.jpg" alt="">
            <div class="cont">
                <h4>Creed 3</h4>
                <div class="sub">
                    <p>Action, 2023</p>
                    <h3><span>IMBD</span><i class="bi bi-play-fill"> 9.6</i></h3>
                </div>
            </div>
        </div>
    </a>














</div>


</section>








</header>

    <script src="app.js"></script>
</body>
</html>