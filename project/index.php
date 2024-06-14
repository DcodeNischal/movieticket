<?php

    session_start();
    $error = "";

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if(!isset($_SESSION['uid'])){
        header("Location:/project/loginpage/loginpage.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Kuber</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    
</head>
<body>
 <!-- nav bar -->

    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#"><div class="image"><img src="images/logo-modified.png"></div>uber<span>cinemas.</span></a></div>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#premmium">Permium</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#education">Galery</a></li>
                <li><a href="#contact">Contact Us</a></li>
            </ul>
            <div class="signin"><a href="loginpage/loginpage.html">Login</a></div>
        </div>
    </nav>
<!-- image slider -->
<section id="slide">         

        <div id="myCarousel" class="carousel slide">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="images/pujar.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h4>

                            Now Showing</h4>
                        <p>Pujar Sarki</p>
                        
                    </div>
                    <a href="loginpage/loginpage.html" class="btn btn-primary login-button"><i class="fa fa-ticket" style="padding-right: 5px;"></i>Buy Now</a>
                </div>
                <div class="item">
                    <img src="images/onepiece.png" alt="Chania">
                    <div class="carousel-caption">
                        <h4>Now Showing</h4>
                        <p>Strong World</p>
                    </div>
                    <a href="loginpage/loginpage.html" class="btn btn-primary login-button"><i class="fa fa-ticket" style="padding-right: 5px;"></i>Buy Now</a>
                </div>
                <div class="item">
                    <img src="images/pushpa-2.jpg" alt="Flower">
                    <div class="carousel-caption">
                        <h4>Now Showing</h4>
                        <p>Pushpa 2</p>
                    </div>
                    <a href="loginpage/loginpage.html" class="btn btn-primary login-button"><i class="fa fa-ticket" style="padding-right: 5px;"></i>Buy Now</a>
                </div>
                <div class="item">
                    <img src="images/furiosa.jpg" alt="Chania">
                    <div class="carousel-caption">
                        <h4>Now Showing</h4>
                        <p>Furiosa</p>
                    </div>
                    <a href="loginpage/loginpage.html" class="btn btn-primary login-button"><i class="fa fa-ticket" style="padding-right: 5px;"></i>Buy Now</a>
                </div>
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <ol class="carousel-indicators">
                <li class="item1 active"></li>
                <li class="item2"></li>
                <li class="item3"></li>
                <li class="item4"></li>
            </ol>
        </div>
    </section>
<!-- movie section -->
<section id="movie">
        
<div class="moviemain">        
    <h2 class="title">Now Showing</h2>

    <div class="movie-cards-container">
        <div class="movie-card">
            <div class="card-image">
                <img src="images/movie/PujarSarki.png" alt="Movie 2">
                <div class="overlay">
                    <a href="youtubepopup/index.html?videoId=0JlBb1KuzNE" class="btn btn-primary">Trailer</a>
                        <a href="moviedetails/index.html" class="btn1 btn-primary">Buy Now</a>
                </div>
            </div>
            <h2>Movie 2 Title</h2>
            <p>Releasing on: July 15</p>
            <p>Runtime: 2 hours 30 mins</p>
        </div>
        <div class="movie-card">
            <div class="card-image">
                <img src="images/movie/mr_mrs.jpg" alt="Movie 2">
                <div class="overlay">
                    <a href="youtubepopup/index.html?videoId=TtMjcP9cHIA" class="btn btn-primary">Trailer</a>
                        <a href="moviedetails/index.html" class="btn1 btn-primary">Buy Now</a>
                </div>
            </div>
            <h2>Movie 2 Title</h2>
            <p>Releasing on: July 15</p>
            <p>Runtime: 2 hours 30 mins</p>
        </div>
        <div class="movie-card">
            <div class="card-image">
                <img src="images/movie/onepiece.png" alt="Movie 2">
                <div class="overlay">
                    <a href="youtubepopup/index.html?videoId=3n58UPvcD7I" class="btn btn-primary">Trailer</a>
                        <a href="moviedetails/index.html" class="btn1 btn-primary">Buy Now</a>
                </div>
            </div>
            <h2>Movie 2 Title</h2>
            <p>Releasing on: July 15</p>
            <p>Runtime: 2 hours 30 mins</p>
        </div>
        <div class="movie-card">
            <div class="card-image">
                <img src="images/movie/FURIOSA.jpg" alt="Movie 2">
                <div class="overlay">
                    <a href="youtubepopup/index.html?videoId=FVswuip0-co" class="btn btn-primary">Trailer</a>
                        <a href="moviedetails/index.html" class="btn1 btn-primary">Buy Now</a>
                </div>
            </div>
            <h2>Movie 2 Title</h2>
            <p>Releasing on: July 15</p>
            <p>Runtime: 2 hours 30 mins</p>
        </div>
        <div class="movie-card">
            <div class="card-image">
                <img src="images/movie/pushpa.jpg" alt="Movie 2">
                <div class="overlay">
                    <a href="youtubepopup/index.html?videoId=FVswuip0-co" class="btn btn-primary">Trailer</a>
                        <a href="moviedetails/index.html" class="btn1 btn-primary">Buy Now</a>
                </div>
            </div>
            <h2>Movie 2 Title</h2>
            <p>Releasing on: July 15</p>
            <p>Runtime: 2 hours 30 mins</p>
        </div>
        <div class="movie-card">
            <div class="card-image">
                <img src="images/movie/haikyu.jpeg" alt="Movie 2">
                <div class="overlay">
                    <a href="youtubepopup/index.html?videoId=pl4a2eQUgpc" class="btn btn-primary">Trailer</a>
                        <a href="moviedetails/index.html" class="btn1 btn-primary">Buy Now</a>
                </div>
            </div>
            <h2>Movie 2 Title</h2>
            <p>Releasing on: July 15</p>
            <p>Runtime: 2 hours 30 mins</p>
        </div>
        
    </div>
    </div>
</section>


<!-- next release -->

<section>
    <div class="container">
        <div class="tab-menu">
            <button class="tab-button active yes" onclick="openTab('next-release')">Next Release</button>
            <button class="tab-button not" onclick="openTab('coming-soon')">Coming Soon</button>
        </div>

        <div id="next-release" class="tab-content active">
            <div class="movie-card">
                <div class="card-image">
                    <img src="images/movie/PujarSarki.png" alt="CHHOTA BHEEM">
                    <div class="overlay">
                       <a href="youtubepopup/index.html?videoId=0JlBb1KuzNE" class="btn btn-primary">Trailer</a>
                        <a href="moviedetails/index.html" class="btn1 btn-primary">Buy Now</a>
                    </div>
                </div>
                <h2>CHHOTA BHEEM</h2>
                <p>Releasing on: June 01</p>
                <p>Runtime: 2 hours 25 mins</p>
            </div>
            <div class="movie-card">
                <div class="card-image">
                    <img src="images/movie/pushpa.jpg" alt="London To Paris">
                    <div class="overlay">
                       <a href="youtubepopup/index.html?videoId=FVswuip0-co" class="btn btn-primary">Trailer</a>
                        <a href="moviedetails/index.html" class="btn1 btn-primary">Buy Now</a>
                    </div>
                </div>
                <h2>London To Paris</h2>
                <p>Releasing on: June 07</p>
                <p>Runtime: 2 hours</p>
            </div>
            <div class="movie-card">
                <div class="card-image">
                    <img src="images/movie/FURIOSA.jpg" alt="Bad Boys: Ride or Die">
                    <div class="overlay">
                       <a href="youtubepopup/index.html?videoId=FVswuip0-co" class="btn btn btn-primary">Trailer</a>
                        <a href="moviedetails/index.html" class="btn1 btn btn-primary">Buy Now</a>
                    </div>
                </div>
                <h2>Bad Boys: Ride or Die</h2>
                <p>Releasing on: June 07</p>
                <p>Runtime: 1 hour 50 mins</p>
            </div>
            <div class="movie-card">
                <div class="card-image">
                    <img src="images/movie/haikyu.jpeg" alt="Haikyu!! The Dumpster Battle">
                    <div class="overlay">
                       <a href="youtubepopup/index.html?videoId=pl4a2eQUgpc" class="btn btn-primary">Trailer</a>
                        <a href="moviedetails/index.html" class="btn1 btn-primary">Buy Now</a>
                    </div>
                </div>
                <h2>Haikyu!! The Dumpster Battle</h2>
                <p>Releasing on: June 07</p>
                <p>Runtime: 1 hour 25 mins</p>
            </div>
        </div>

<!-- coming soon -->

        <div id="coming-soon" class="tab-content">
            <div class="movie-card">
                <div class="card-image">
                    <img src="images/movie/mr_mrs.jpg" alt="Movie 1">
                    <div class="overlay">
                       <a href="youtubepopup/index.html?videoId=TtMjcP9cHIA" id="openPopupBtn" class="btn btn-primary">Trailer</a>
                        
                    </div>
                </div>
                <h2>Movie 1 Title</h2>
                <p>Releasing on: July 01</p>
                <p>Runtime: 2 hours</p>
            </div>
            
            <div class="movie-card">
                <div class="card-image">
                    <img src="images/movie/onepiece.png" alt="Movie 2">
                    <div class="overlay">
                       <a href="youtubepopup/index.html?videoId=3n58UPvcD7I" class="btn btn-primary">Trailer</a>
                        
                    </div>
                </div>
                <h2>Movie 2 Title</h2>
                <p>Releasing on: July 15</p>
                <p>Runtime: 2 hours 30 mins</p>
            </div>
            <div class="movie-card">
                <div class="card-image">
                    <img src="images/movie/PujarSarki.png" alt="Movie 2">
                    <div class="overlay">
                       <a href="youtubepopup/index.html?videoId=0JlBb1KuzNE" class="btn btn-primary">Trailer</a>
                        
                    </div>
                </div>
                <h2>Movie 2 Title</h2>
                <p>Releasing on: July 15</p>
                <p>Runtime: 2 hours 30 mins</p>
            </div>
        </div>
    </div>
</section>



<!-- footer section -->

<footer class="footer">
    <div class="footer-content">
        <div class="footer-section">
            <h3>Booking via phone</h3>
            <p><a href="tel:+9779823192305">📞 +977-9823192305</a></p>
        </div>
        <div class="footer-section">
            <h3>Payment Partner</h3>
            <a class="khalti" href="#"><img src="images/movie/Khalti_Logo.png" alt="Khalti"></a>
        </div>
        <div class="footer-section">
            <h3>Organization</h3>
            <ul>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Condition</a></li>
            </ul>
        </div>
        
        <div class="footer-section">
            <h3>Follow Us</h3>
            <a href="#"><img src="images/social/facebook.png" alt="Facebook"></a>
            <a href="#"><img src="images/social/instagram-modified.png" alt="Instagram"></a>
            <a href="#"><img src="images/social/twitter.png" alt="Twitter"></a>
            <p>For Help & Support<br><a href="mailto:kubercinemas@gmail.com">Email: kubercinemas@gmail.com</a></p>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 KuBer Cinemas || All rights reserved.</p>
    </div>
</footer>

    <script src="Javascript/script.js"></script>
</body>
</html>
