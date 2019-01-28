<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="assets/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/creative.min.css" rel="stylesheet">
	<!--custom css-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--custom css end-->
	
<style>
#mainNav{
	position:fixed-top !important;
	background-color:#405465;
	margin-bottom:0px;
    } 
#mainNav .navbar-nav>li.nav-item>a.nav-link, #mainNav .navbar-nav>li.nav-item>a.nav-link:focus{
	color:white !important;
    }
.navbar-toggler{
	background-color:#ffff;
}	
.header_1{
	margin-top:1%;
}
.header_1 ul li{
	font-family: inherit;
    font-size: inherit;
    background-color: #5899d0;
    padding: 1% 2% 1% 2%;
    border-radius: 6%;
    color: #fff;
}
.navbar-nav>li {
    float: right;
    background-color: #545e74;
    padding: 1% 3% 1% 3%;
    margin-right: 1%;
    border-radius: 5px;
}
.navbar-nav>li:hover {
    background-color:#f9f1f157;
}
.search{
    margin-top: 1%;
    margin-left: 1%;	
	text-align:center;
}
.glyphicon{
 font-size:113%;	
}
} 
 @media screen and(max-width:1000px){
.navbar-nav{
	float:right !important;
}
 }
#lg{
	height:36px !important;
	    margin-left: 13%;
}
/* #navbarResponsive ul li {
	font-size: inherit;
    font-family: initial;
    background-color: #788693;
} 
#mainNav .navbar-nav>li.nav-item>a.nav-link, #mainNav .navbar-nav>li.nav-item>a.nav-link:focus{
	color:white !important;
    }

#mainNav{
	position:relative !important;
	background-color:black;
    } 
.header1 ul li{
	margin-top: 2%;
    font-family: inherit;
    background-color: #b6cdd1;
    padding: 1% 2% 1% 2%;
    border-radius: 6px;
	color:#ffff;
	} */
/* .search{
	margin-top:2%;	
	} */
/* @media (min-width: 992px)
header.masthead {
    min-height: 300px !important;
    }	
header .masthead{
	background-size: 100% 300px;
    background-repeat: no-repeat;
    } */	
</style>
<!--slider-->
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.slideshow-container{
	height:250px;
}
.mySlides img{
	height:250px;
}
</style>
<!--slider end-->
  </head>
 <body id="page-top">
<div class="content">
 <div class="row">
	<div class="col-md-6 text-center"><img src="assets/img/logo.jpg"/></div>
	<div class="col-md-6  header_1">
		<ul class="list-inline">
		<li class="list-inline-item"data-target="#registeration">Registeration</li>
		<li class="list-inline-item">Login</li>
		<li class="list-inline-item">Training</li>
		</ul>
	</div>
</div>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
       <a class="navbar-brand js-scroll-trigger" href="#page-top"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<!--slider start-->
		<div class="slideshow-container">
			<div class="mySlides fade">
			  <!--<div class="numbertext">1 / 3</div>-->
			  <img src="assets/img/portfolio/fullsize/1.jpg" style="width:100%">
			  <!--<div class="text">Caption Text</div>-->
			</div>
			<div class="mySlides fade">
			  <img src="assets/img/portfolio/fullsize/2.jpg" style="width:100%">
			</div>
			<div class="mySlides fade">
			  <img src="assets/img/portfolio/fullsize/3.jpg" style="width:100%">
			</div>
		</div>
		<br>
		<div style="text-align:center">
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		  <span class="dot"></span> 
		</div> 
	<!--slider end-->
<!--search box-->
<div class="row search">
		<div class="col-md-12">
		  <form class="form-horizontal">
		    <div class="col-md-9">
			
					<div class="form-group form-group-lg">
						<input class="form-control" type="text" id="lg" placeholder="Search">
					</div>
			
		    </div>
			<div class="col-md-3">
			<button type="button" class="btn btn-info">
			  <span class="glyphicon glyphicon-search"></span></button>
			</div>
		 </form>
	   </div>
</div>
<!--search box end-->
    <!--<header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Your Favorite Source of Free Bootstrap Themes</strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
          </div>
        </div>
      </div>
    </header>-->
 
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
	  <div class="row">
	  <div class="col-md-6">
	  <div class="col-md-3"><img src="https://s3-ap-southeast-1.amazonaws.com/letsintern.com/images-employer/81913.jpg"></div>
	  <div class="col-md-9">
	    <div class="col-md-12">Climate Counsellor</div>
	    <div class="col-md-12">International Centre for Culture and Education</div>
		<div class="col-md-12">Anywhere in India</div>
	  </div>
	  <div class="col-md-12">
	  <div class="col-md-6">Apply by 16th Feb `19</div>
	  <div class="col-md-6"><button>Apply Now</button></div>
	  </div>
	  </div>
	  
	   <div class="col-md-6">
	  <div class="col-md-3"><img src="https://s3-ap-southeast-1.amazonaws.com/letsintern.com/images-employer/81913.jpg"></div>
	  <div class="col-md-9"></div>
	  </div>
	  </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <img src="https://s3-ap-southeast-1.amazonaws.com/letsintern.com/images-employer/81913.jpg">
              <h3 class="mb-3">Sturdy Templates</h3>
              <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
            </div>
          </div>
		 
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-paper-plane text-primary mb-3 sr-icon-2"></i>
              <h3 class="mb-3">Ready to Ship</h3>
              <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-code text-primary mb-3 sr-icon-3"></i>
              <h3 class="mb-3">Up to Date</h3>
              <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fas fa-4x fa-heart text-primary mb-3 sr-icon-4"></i>
              <h3 class="mb-3">Made with Love</h3>
              <p class="text-muted mb-0">You have to make your websites with love these days!</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="p-0" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters popup-gallery">
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/1.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/1.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/2.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/2.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/3.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/3.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/4.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/4.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/5.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/5.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
          <div class="col-lg-4 col-sm-6">
            <a class="portfolio-box" href="img/portfolio/fullsize/6.jpg">
              <img class="img-fluid" src="img/portfolio/thumbnails/6.jpg" alt="">
              <div class="portfolio-box-caption">
                <div class="portfolio-box-caption-content">
                  <div class="project-category text-faded">
                    Category
                  </div>
                  <div class="project-name">
                    Project Name
                  </div>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <section class="bg-dark text-white">
      <div class="container text-center">
        <h2 class="mb-4">Free Download at Start Bootstrap!</h2>
        <a class="btn btn-light btn-xl sr-button" href="http://startbootstrap.com/template-overviews/creative/">Download Now!</a>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@startbootstrap.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>

</div>
    <!-- Bootstrap core JavaScript -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/creative.min.js"></script>
  </body>

</html>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides,2000); // Change image every 2 seconds
}
</script>
