<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>N-Nyuk | Home</title>

    <!-- Core Stylesheet -->
    <link href="mosh/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="mosh/css/responsive.css" rel="stylesheet">

</head>



<body>
    <!-- ***** Breadcumb Area Start ***** -->
    <div class="mosh-breadcumb-area" style="background-image: url(mosh/img/core-img/breadcumb.png);">

    
    <ul class="navbar-nav animated" id="nav">
        <h1 class="text-white"><marquee>Jangan Lupa Nonton sambil Ngopi Guys!!!</marquee></h1>
    </ul>
    <br><br><br>
    <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                     <div class="bradcumbContent">
                        <h2>Detail Movie...</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Movie</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br>
        
    </div>
<main class="container  p-md-2 p-2">
    <?php
  include "conf/info.php";
  
  $id_movie = $_GET['id'];
    include_once "api/api_movie_id.php";
    include_once "api/api_movie_video_id.php";
    include_once "api/api_movie_similar.php";
    //$title = "Detail Movie (".$movie_id->original_title.")";
    //include_once "header.php";
  
?>

    <?php 
    if(isset($_GET['id'])){
    $id_movie = $_GET['id']; 
    ?>
    <center><h1><?php echo $movie_id->original_title ?></h1></center>
    <?php
      echo "<center><h5>~ ".$movie_id->tagline." ~</h5></center>";
    ?>

    

    <hr>
        <img src="<?php echo $imgurl_2 ?><?php echo $movie_id->poster_path ?>">
          <h5>Judul : <?php echo $movie_id->original_title ?></h5>
          <h5>Genre : 
              <?php
                foreach($movie_id->genres as $g){
                  echo '<span>' . $g->name . '</span> ';
                }
              ?>
          </h5>
          <h5>Ringkasan: <?php echo $movie_id->overview ?></h5>
          <h5>Tanggal Rilis : <?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?></h5>
          <h5>Rating : <?php echo $movie_id->vote_average ?></h5>
    <hr>
    <?php
    }
    ?>


</main>
    


    
    
    
    <!-- ***** Breadcumb Area End ***** -->
   
    <!-- ***** Blog Area Start ***** -->
 
   
    <!-- ***** Blog Area End ***** -->


    <!-- ***** Footer Area Start ***** -->
    <footer class="footer-area clearfix">
        
        <!-- Fotter Bottom Area -->
        <div class="footer-bottom-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="footer-bottom-content h-100 d-md-flex justify-content-between align-items-center">
                            <div class="copyright-text">
                                <p>
                                    Copyright &copy;2023  by <a href="#" target="_blank">Ridyama</a>
                                    </p>
                            </div>
                            <div class="footer-social-info">
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="mosh/js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="mosh/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="mosh/js/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="mosh/js/plugins.js"></script>
    <!-- Active js -->
    <script src="mosh/js/active.js"></script>
   
</body>

</html>