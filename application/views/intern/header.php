<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>W3C Group Of Solutions</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
.container{
	width:100% !important;
	padding-right:0px !important;
	padding-left:0px !important;
}
.navbar{
	margin-bottom:0px !important;
}
/*custom styles*/

.header{
	margin-top:1%;
}
.header ul li{
	font-family: inherit;
    font-size: inherit;
    background-color: #5899d0;
    padding: 1% 2% 1% 2%;
    border-radius: 6%;
    color: #fff;
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

#lg{
	height:36px !important;
	    margin-left: 13%;
}
/*slider styles*/
.carousel{
    background: #2f4357;
   // margin-top: 20px;
}
.carousel .item{
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
}
/* .bs-example{
	margin: 20px;
} */
.carousel .item img{
	    width: 100% !important;
    height: 400px !important;
}
.navbar-brand>img {
   max-height: 100%;
   height: 100%;
   width: auto;
   margin: 0 auto;


   /* probably not needed anymore, but doesn't hurt */
   -o-object-fit: contain;
   object-fit: contain; 

}
.img-responsive{
	width:65px ;
	margin:0 auto;
}
/*searchbox*/
#search-box {
position: relative;
width: 100%;
margin-top:1%;
}

#search-form 
{
height: 40px;
border: 1px solid #3cc6c6eb;
-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
background-color: #fff;
overflow: hidden;
}

#search-text 
{
font-family: serif;
font-size: 14px;
color: #ddd;
border-width: 0;
background: transparent;
}

#search-box input[type="text"]
{
width: 90%;
padding: 11px 0 12px 1em;
color: #333;
outline: none;
}

#search-button {
position: absolute;
top: 0;
right: 0;
height: 42px;
width: 80px;
font-size: 14px;
color: #fff;
background-color:#5899d0;
text-align: center;
line-height: 42px;
border-width: 0;
background-color:#ColourCode;
-webkit-border-radius: 0px 5px 5px 0px;
-moz-border-radius: 0px 5px 5px 0px;
border-radius: 0px 5px 5px 0px;
cursor: pointer;
}
</style>
</head> 
<body>
<div class="container">
<!--header content-->
<div class="row">
	<div class="col-md-6 text-center"><img src="assets/img/logo.jpg" class="img-responsive logo-navbar" alt="Responsive image"></div>
	<div class="col-md-6  header">
		<ul class="list-inline">
		<li class="list-inline-item" >
		<a href="#" data-toggle="modal" data-target="#myModalHorizontal">
    Registeration
</a>
		</li>
		<li class="list-inline-item">Login</li>
		<li class="list-inline-item">Training</li>
		</ul>
	</div>
</div>

<!--navbar-->
    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><img src="assets/img/logo.jpg"/></a>
        </div>
        <!-- toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#">Intership</a></li>
                <!--<li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">Messages <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Inbox</a></li>
                        <li><a href="#">Drafts</a></li>
                        <li><a href="#">Sent Items</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Trash</a></li>
                    </ul>
                </li>-->
				<li><a href="#">Software</a></li>
				<li><a href="#">AboutUs</a></li>
				<li><a href="#">ContactUs</a></li>
            </ul>
            <!--<form class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search">
                    <span class="input-group-btn">
                        <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </span>
                </div>
            </form>-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"></a></li>
				<li><a href="#"></a></li>
            </ul>
        </div>
    </nav>
	<!--slider -->
<div class="bs-example">
    <div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
    	<!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>   
        <!-- Wrapper for carousel items -->
        <div class="carousel-inner">
            <div class="active item">
                <img src="assets/img/portfolio/fullsize/1.jpg" alt="First Slide">
         		<div class="carousel-caption">
                  <h3>W3c Group of solutions </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="item">
                <img src="assets/img/portfolio/fullsize/2.jpg" alt="Second Slide">
                <div class="carousel-caption">
                  <h3>W3c Group of solutions </h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="item">
                <img src="assets/img/portfolio/fullsize/3.jpg" alt="Third Slide">
                <div class="carousel-caption">
                  <h3>W3c Group of solutions </h3>
                  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <!-- Carousel controls -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!--search--->
  <div id='search-box'>
<form action='/search' id='search-form' method='get' target='_top'>
<input id='search-text' name='q' placeholder='Search' type='text'/>
<button id='search-button' type='submit'>                     
<span>Search</span>
</button>
</form>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  console.log(dots);
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
</body>
</html>              

<!-- Modal -->
<div class="modal fade" id="myModalHorizontal" tabindex="-1" role="dialog" 
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" 
                   data-dismiss="modal">
                       <span aria-hidden="true">&times;</span>
                       <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">
                   Registeration
                </h4>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <div class="modal-body" id="registeration">
               <div class="row">
			   <div class="col-md-6">
			   <div class="col-md-12">
			  <div class="col-md-3"><img src="assets/img/intern_student.jpg" class="image image-responsive" width="50px" height="100px"/></div>
			  <div class="col-md-9">
			  <p>I Am Student</p>
			  <p>Looking For InterShip</p>
			  <p><a href="<?php  echo site_url("/registerations");?>" class="btn btn-info btn-xs">Register</a></p>
			  </div>
			   </div>
			   </div>
			   <div class="col-md-6">
			   <div class="col-md-12">
			  <div class="col-md-3"><img src="assets/img/intern_employee.jpg" class="image image-responsive" width="50px" height="100px"/></div>
			  <div class="col-md-9">
			  <p>I Am Company</p>
			  <p>Looking For Global Talent</p>
			  <p><a href="/employee_registeration" class="btn btn-info btn-xs">Register</a></p>
			  </div>
			   </div>
			   </div>
			   </div> 
            </div>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default"
                        data-dismiss="modal">
                            Close
                </button>
               <!-- <button type="button" class="btn btn-primary">
                    Save changes
                </button>-->
            </div>
        </div>
    </div>
</div>
              