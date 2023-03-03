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
                        <h2>Selamat Datang Di Aplikasi N-NYUK...</h2>
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
    <header class="container bg-primary text-white">
        <div class="row">
            <div class="col-12 py-4 text-center">
            <form action="search.php" method="get">
                <div class="row mb-3">
                    <div class="col-sm-12"><h4></h4></div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <input class="form-control" type="text" name="search" placeholder="Type Title Here" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <select class="form-control" name="channel" required>
                                    <option value="movie" selected="selected">Movie
                                    </option>
                                    <option value="tv">TV Show
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4" >
                            <button class="btn btn-light" type="submit">CARI</button>
                        </div>
                    </div>          
                </div>
            </form>
            </div>
        </div>
    </header>

    <main class="container  p-md-2 p-2">
    <center><h1>~ Top Rated Movies ~</h1></center>
        <div class="row g-2 g-md-3">
            <?php
             include "conf/info.php";
                include_once "api/api_toprated.php";
                foreach($toprated->results as $p){
                    echo '<div class="col-6 col-md-3"><li><a href="detail_movie.php?id=' . $p->id . '"><img src="http://image.tmdb.org/t/p/w500'. $p->poster_path . '"><h1>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Release : " . $p->release_date . "</em></h5></a></li></div>";
                }
            ?>
            
        </div>
    </main>
    <br><br>

    <main class="container  p-md-2 p-2">
    <center><h1>~ Top Rated Serial TV ~</h1></center>
        <div class="row g-2 g-md-3">
            <?php
             include "conf/info.php";
                include_once "api/api_tv.php";
                foreach($tv_top->results as $tt){
                    $de = date('d F Y', strtotime($tt->first_air_date));
                    echo '<li class="col-6 col-md-3"><a href="detail_tv.php?id=' . $tt->id . '"><img src="http://image.tmdb.org/t/p/w300'.$tt->backdrop_path.'"><h4>' . $tt->original_name . "</h4><h5><em>Release : ".$tt->first_air_date."</em></h5></a></li>";
                }
            ?>
            
        </div>
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