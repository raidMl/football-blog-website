<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="website for entent sportif de setif  ">
    <meta name="keywords" content="ess, blog entent sportif de setif">
    <meta name="author" content="Raid_dev">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESS</title>
<link rel="stylesheet" href="csss/bootstrap.min.css">
<link href="fontawesome-free-5.15.4-web/css/all.css" rel="stylesheet">
<script src="javascript/jquery-3.5.1.min.map.js"></script>
<link rel="stylesheet" href="csss/style.css">
<link rel="shortcut icon" href="img/esss.png">

<!-- <link rel="stylesheet" href="csss/templatemo-chain-app-dev.css"> -->
<style>
  /* .card{margin-left: 10px;} */
.card-text{overflow: hidden;height: 100px;}

</style>
</head>
<body id="bd">
   
<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
  <div class="preloader-inner">
    <span class="dot"></span>
    <div class="dots">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- contact use header-------------------------- -->



<!-- <div style="height: 30px; background-color: rgb(255, 255, 255);"></div> -->
<nav class="navbar  navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Entente Sportive Sétifienne</a>
   <div>
    <a class="iconssContact" href="https://offsideksa.com/categories/396134/ess" >store</a>

    <a class="iconssContact" href="https://www.youtube.com/Entente%20TV"><i class="fab fa-youtube"></i></a>
    <a class="iconssContact" href="https://www.facebook.com/officielESSETIF"><i class="fab fa-facebook"></i></a>
    <a class="iconssContact" href="https://www.instagram.com/essetifienne/"><i class="fab fa-instagram"></i></a>
    <a class="iconssContact" href="https://twitter.com/essetifienne"><i class="fab fa-twitter"></i></a>
    <a class="iconssContact"     href="mailto:raidreus.22@gmail.com"><i class="fas fa-envelope"></i></a>
    <a class="iconssContact"      onclick="document.getElementById('id01').style.display='block'"><i class="fas fa-user"></i></a>

   </div>

  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top"  style="z-index: 1;" >
  <div class="container-fluid" >
    <a class="navbar-brand" href="#"><img src="img/lententess.png" height="100px" width="100px" class="logoimg" style="position: absolute;top: 10px;left: 20px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-center">
        <li class="nav-item">
          <a class="nav-link 
          " aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#news">News</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Club categories
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item text-center" href="#">U20</a></li>
            <li><a class="dropdown-item text-center" href="#">U17</a></li>
            <li><a class="dropdown-item text-center" href="#">U16</a></li>


            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-center" href="#">Informations</a></li>
          </ul>
          <li class="nav-item">
            <a class="nav-link" href="#about">About club</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="#titles">Titles</a>
        </li>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="#stadium">Stadium</a>
      </li>
        <li class="nav-item">
          <a class="nav-link"  href="#partners">Partners</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"  href="#footer">Contact</a>
        </li>
      </ul>

    </div>
  </div>
</nav>





<!-- end -->


<!-- /* login */ -->

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      <i class="fas fa-user" style=" font-size:50px; border: 1px solid #0000004f ;border-radius:20%; padding:10px"></i>    </div>

    <div class="container">
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" maxlength="10" required>
        
      <button class="button1" type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container text-center" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-danger cancelbtn">Cancel</button>
     <a href="#" class="text-center" style="margin-left: 10px;"> Forgot password?</a>
    </div>
  </form>
</div>
<!-- carousel +++++++++++++++++++++++++ -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active rnd" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2" class="rnd"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"class="rnd"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4" class="rnd"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5" class="rnd"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6" class="rnd"></button>

  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/wepik-2022221-174641.png" class="d-block w-100" style="height: 85vh;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4 class="onwan">ESS</h4>
        <p class="caroText "style="border-radius:10px">The Official Website of ESS</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/cover.jpg" class="d-block w-100" style="height: 85vh;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4 class="onwan">Players</h4>
        <p class="caroText">Players picutre in ain elfouara .</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/275437067_682276319877344_1041779767268438301_n.jpg" class="d-block w-100" style="height: 85vh;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h4 class="onwan">Training</h4><
        <p class="caroText">Training in 8 Mai 1945 stadium .</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/275739917_684345856337057_1114700571193033094_n.jpg" class="d-block w-100" style="height: 85vh;" alt="..." height="100%">
      <div class="carousel-caption d-none d-md-block">
        <h4 class="onwan">Caf Champions League</h4>
        <p class="caroText">Ess participate in the caf champions legue.</p>
      </div></div>
      <div class="carousel-item">
        <img src="img/a.jpg" class="d-block w-100" style="height: 85vh;" alt="..." height="100%">
        <div class="carousel-caption d-none d-md-block">
          <h4 class="onwan">Celbration</h4>
          <p class="caroText">celebration of qualification into next round</p>
        </div></div>
      
      <div class="carousel-item">
        <img src="img/275918345_688246312613678_6847805930860418597_n.jpg" class="d-block w-100" style="height: 85vh;" alt="..." height="100%">
        <div class="carousel-caption d-none d-md-block">
          <h4 class="onwan">Ess win </h4>
          <p class="caroText">ESS scoring in horoya conakry.</p>
        </div>
      </div>
    </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next " type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- /*blog -->
<div class="container mt-5 ">
<h3 class="mt-5 mb-5" id="news">News</h3>

  <div class="row  mt-3">



<?php
require_once "dbconect.php";
$data=$database->prepare("SELECT * FROM articles");
$data->execute();
// echo $data->rowCount();
$posts=$data->fetch(PDO::FETCH_ASSOC);

foreach($data as $pst){
//   echo $pst["title"]."<br>";

//  echo $pst["content"]."<br>";
//  echo'<img src="files/'.$pst['img'].'"  height="80px" width="80px" alt="">
// ';



echo'<div class=" col-md-3 col-sm-5  col-xs-8 align-self-center card" >
<img src="files/'.$pst['img'].'" class="card-img-top" style="height:220px;">
  <div class="card-body">
    <h5 class="card-title" style="color:#2d2b85;font-weight:bold;">'.$pst["title"].'</h5>
    <p class="card-text">'.$pst["content"].'.</p>
    <a href="post.php?id='.$pst['id'].'" class="btn btn-dark">Read more</a>
  </div>
</div>';



   }
?>
</div>
</div>
<!-- /blog -->
<!-- services -->
    <div id="services" class="services section text-center">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 offset-lg-2" >
              <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
                <h4> <em style="font-size: 33px; position: relative; ">Entente Sportive Sétifienne</em>  </h4>
                <img src="img/heading-line-dec.png" alt="">
                <p style="position: relative;       ;">the official website for this club </p>
              </div>
            </div>
          </div>
          <p class="mt-5 mb-5 aboutbox" id="about" >
            Entente Sportive Sétifienne (Arabic: الوفاق الرياضي السطايفي), known as Entente de Sétif, commonly referred to as ES Sétif or ESS for short, is an Algerian professional football club based in Sétif. The club was founded in 1958 and its colours are black and white. Their home stadium, the Stade 8 Mai 1945, has a capacity of 18,000 spectators. The club is currently playing in the Algerian Ligue Professionnelle 1.

            ESS is one of the most successful clubs in Algeria, having won the Algerian Ligue Professionnelle 1 eight times and the Algerian Cup a record of eight times. They are also one of only three Algerian clubs to have won the CAF Champions League, winning it twice in 1988 and 2014. They have also won the Arab Champions League twice, in 2007 and 2008, as well as three North African Cups in 2009 and 2010. In 2015, they became the first Algerian club to win the CAF Super Cup.
            
            ES Sétif became CAF Champions League champion by defeating DR Congo's AS Vita Club in the 2014 final; and the reigning CAF Super Cup champions, by beating Egypt's Al Ahly in the 2015 Super Cup[4] and the reigning Algerian Ligue Professionnelle 1 champions.</p>
       <br> <br> <br> <br>
          </div>
        <div class="container mt-5 mb-5">
          <div class="row mt-5 mb-5" id="titles"><h3 class="col">27 Titles</h3></div>
</div>
        <div class="container text-center">
          <div class="row">

            <div class="col-lg-3  ">
              <div class="service-item first-service click2">
                <div class="icon"><li class="fas fa-trophy fs-1"></li></div>
                <h4> Afro-Asian Club cup</h4>
                <p>1989</p>
               
              </div>
            </div>
            <div class="col-lg-3 ">
              <div class="service-item second-service click3">
                <div class="icon"><li class="fas fa-trophy fs-1"></li></div>
                <h4> Arab cup</h4>
                <p>2007 and 2008</p>
               
              </div>
            </div>
           
            <div class="col-lg-3 ">
                <div class="service-item fourth-service click1">
                  <div class="icon"><li class="fas fa-trophy fs-1"></li></div>
                  <h4>Super African cup </h4>
                  <p>2015</p>
                  
                </div>
              </div>
              <div class="col-lg-3 ">
                <div class="service-item fourth-service click1">  
                  <div class="icon"><li class="fas fa-trophy fs-1"></li>
                  </div>
                  <h4> Caf Champions league</h4>
                  <p>1989 and 2014 </p>
                  
                </div>
              </div>
          </div>
          <div class="row mt-5">
            <div class="col-lg-3  ">
              <div class="service-item first-service click2">
                <div class="icon"><li class="fas fa-trophy fs-1"></li></div>
                <h4> North African cup</h4>
                <p>unaf cup ,North African Cup Winners Cup,Super north African cup,North African Cup of Champions</p>
               
              </div>
            </div>
            <div class="col-lg-3 ">
              <div class="service-item second-service click3">
                <div class="icon"><li class="fas fa-trophy fs-1"></li></div>
                <h4> Super Algerian Cup</h4>
                <p>2015 and 2017
                </p>
               
              </div>
            </div>
           
            <div class="col-lg-3 ">
                <div class="service-item fourth-service click1">
                  <div class="icon"><li class="fas fa-trophy fs-1"></li></div>
                  <h4>Algerian Cup </h4>
                  <p>1963,1964,1967,1968,1980,<br>1990,2010,2012</p>
                  
                </div>
              </div>
              <div class="col-lg-3 ">
                <div class="service-item fourth-service click1">
                  <div class="icon"><li class="fas fa-trophy fs-1"></li></li></div>
                  <h4> Algerian league 1</h4>
                  <p>1968,1987,2007,2009,2012,<br>2013,2015,2017 </p>
                  
                </div>
              </div>
          </div>
        </div>
      </div>
      <br> <br> <br> <br>

      <h2 class="text-center mb-5 mt-5 text-secondary " id="stadium"  style="position: relative;">8 Mai 1945 Stadium</h2>

<div class="container mt-5 mb-5"><img src="img/Stade-du-8-Mai-1945.jpg" style="border-radius: 10px;box-shadow: 20px 15px 5px rgb(194, 193, 193); "alt="Stade-du-8-Mai-1945" width="100%"></div>
<div class="container mt-3 mb-5"><img src="img/R.jpg" style="border-radius: 10px;box-shadow: 20px 15px 5px rgb(212, 211, 211); "alt="Stade-du-8-Mai-1945" width="100%"></div>
<br> <br> <br> <br>

<section class="container mt-5 mb-5"  >
<h2 class="text-center mb-5 mt-5 text-secondary " id="partners"  style="position: relative;">Our Partners</h2>
<!-- <<h2 class="text-center mb-5 mt-5 text-secondary "  style="position: relative;">Taper votre notes</h2> -->
<div  class="container text-center">
<img src="img/sonalgaz.jpg"> &ensp;&ensp;
<img src="img/download.png" height="110px">
</div>




</section>
<br> <br> <br> <br>


<!--footer section-$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$-->
<section id="footer" >
  <!-- <img src="img/logo.png"height> -->
  <div class="container">
      <div class="row">
          <!-- <div class="col-md-4 footer-box">
              <img src="img/lententess.png"><b class="fs-4">ESS</b>
              <p>
             football club</p>

          </div> -->
          <div class="col-md-4 footer-box  " dir="ltr">
            <p class="text-center"><b>social-media</b></p>
           <a href="https://www.facebook.com/officielESSETIF"><p>  <i class="fab fa-facebook "></i> facebook
            </p></a>

            
            <a href="https://www.instagram.com/essetifienne/?fbclid=IwAR2jwZIW-vIoLix-OEyeyilo_5wBG9VisW79ODKUEFKfxlKbsSBW0ko8WBg"><p  ><i class="fab fa-instagram "></i> instagram
            </p></a>
           
           <a href="https://twitter.com/essetifienne?fbclid=IwAR3r75x5TT7ayvSj9usQTW0bUNIxUenrqq-f99Xf332etZdzP9Ob5Cvuy6k"> <p  ><i class="fab fa-twitter "></i> twitter
            </p></a>

        </div>

          <div class="col-md-4 footer-box  " dir="ltr">
              <p class="text-center"><b>contacts</b></p>
              <p  ><i class="fas fa-phone-alt"></i> +213 36 82 66 23
              </p>

              
              <p><i class="fas fa-envelope "></i> entente.setif58@gmail.com
              </p>
              <p ><i class="fas fa-map-marker mb-2 "></i> <span style="text-align: center;">Cite Beaumarché , Avenue Djaref
              Mohamed 19000 Sétif, Algeria     </span>
              </p>

          </div>
          <div class="col-md-4 footer-box" align=center>
            <div class="mt-2 alert alert-danger alert-dismissible fade show" id="alertt" style="display: none;" role="alert">
              <!-- <strong>

          حدث خطأ:</strong> -->
                          <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>

          you must fill the input
              <button type="button" class="btn-close" onclick="closeAlert()"></button>
            </div>

 <div class="mt-2 alert alert-danger alert-dismissible fade show" id="alertmail" style="display: none;" role="alert">
              <!-- <strong>

          حدث خطأ:</strong> -->
                          <svg class="bi flex-shrink-0 me-2" width="20" height="20" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>

                        error in email            <button type="button" class="btn-close" onclick="closeAlert()"></button>
            </div>

            <div class="mt-2 alert alert-success alert-dismissible fade show" id="alertt2" style="display: none;" role="alert">
              <!-- <strong>

          حدث خطأ:</strong> -->
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>

          send with success               <button type="button" class="btn-close" onclick="closeAlert()"></button>
            </div>

              <p><b>send msg</b></p>
<form name="form1" action="#">
              <input type="email" name="text1"  class="form-control Forms" placeholder=" email ">
              <textarea name="message"  class="form-control Forms" placeholder="message "></textarea>

              <input type="button" name="btn" class="btn btn-primary mt-3" value="send" id="btn-primary" onclick="ValidateEmail(document.form1.text1);">
                
              </form>


            </div>
      </div>
      <hr>
      <p class="copyright"><a  id="login" class="fas fa-user" ></a> copyright reserved: © this website created by <b><a href="https://www.instagram.com/raid_dev/">raid_dev </a></b> 2022</p>
  </div>
  
</section>

   
</body>

<script src="javascript/jquery-3.5.1.min.map.js"></script>
<script src="javascript/bootstrap.bundle.min.js"></script>
<script src="javascript/popper.min.js"></script>
<script src="javascript/style.js"></script>

<script src="javascript/owl-carousel.js"></script>
<script src="javascript/animation.js"></script>

<script src="javascript/popup.js"></script>

<script src="javascript/custom.js"></script>


</html>