<?php 
//require_once('header.php');
require_once(APPPATH.'views\intern\header.php');
?>
<style>
.container-fluid{
	margin-right: 10%;
    margin-left: 10%;
}
.intern .row .col-md-3{
	border: 1px solid #a8a5aa69;
    padding: 2%;
}
.intern_footer{
	background-color: #eceff2;
    font-family: initial;
    color: #647b8f;
    padding: 1% 1% 1% 1%;
}
.intern_footer .first{
	padding-top:2%;
}
.container-fluid h3{
	font-family: initial;
    color: #2196f3d4;
	text-align:center;
}
.inter .row .col-md-6 .innerdiv{
	border: 1px solid #cfc9c959;
    padding: 1%;
}
.inn{	
    border-top: 1px solid #cfc9c959;
	border-left: 1px solid #cfc9c959;
	border-right: 1px solid #cfc9c959;
    padding: 1% 1% 0% 1% ;
	font-family: serif;
}
.intern .btn-info{
	padding:1% 8% 1% 8%;
} 
.intern .row{
	margin-top:2%;
}
.blog{
	font-family: serif;
}
.blog .col-md-3{
	padding: 1% 1% 1% 1%;
}
.blog .col-md-9{
	padding: 1% 1% 1% 3%;
}
.blog h4{
	text-align: center;
    color: #6d8984;
}
/*listgroup tab*/
.nav-pills>li>a{
	background-color: #5899d0;
    color: #ffff;
}
#exTab1{
  margin-top:4% !important;
}


/*list tab group panel programs*/

.programs .col-md-9{
	padding: 2% 2% 2% 2%;
    font-family: serif;
    background-color: #d6dce2d1;
} */
.programs .col-md-8{
	font-family: serif;
	padding: 2% 2% 2% 2%;
    background-color: #d6dce2d1;
}
.col-md-8{
	font-family:serif;
	text-align: justify;
}
.nav>li{
	    padding-left: 8px !important;
}
.nav-pills>li+li{
	    margin-left: 2.4px;
}
@media screen and  (max-width: 480px){
  
	.nav>li{
		width:12%;
	}
	
}
</style>
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
  <!--<div id='search-box'>
<form action='/search' id='search-form' method='get' target='_top'>
<input id='search-text' name='q' placeholder='Search' type='text'/>
<button id='search-button' type='submit'>                     
<span>Search</span>
</button>
</form>
</div>-->
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
<!---index---->
	<div class="container-fluid">
		<h3>Our Services</h3>
		<div class="intern">
		<!--Training programs-->
<div id="exTab1" class="container programs" >	
<ul  class="nav nav-pills list-inline">
			<li class="active"><a  href="#designing" data-toggle="tab">Web Designing</a></li>
			<li><a href="#development" data-toggle="tab">Web Development</a></li>
			<li><a href="#digitalmarketing" data-toggle="tab">Digital marketing</a></li>
			<li><a href="#mobile" data-toggle="tab">Mobile Application Development</a></li>
			<li><a href="#recruiters" data-toggle="tab">IT Recruitment</a></li>
			<li><a href="#Training" data-toggle="tab">IT Training</a></li>
			<li><a href="#consulting" data-toggle="tab">Consulting</a></li>
		</ul>

			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="designing">
       <div class="row">
	   <div class="col-md-4"><img src="assets/img/designing.jpg"></div>
	   <div class="col-md-8">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged<a href="<?php echo site_url('webdesigningcompany');?>" target="_blank">ReamMore</a>.</div>
	   </div>
		  <!--tab1 -->
				</div>
				<div class="tab-pane" id="development">
            <div class="row">
	   <div class="col-md-4"><img src="assets/img/development.jpg"></div>
	   <div class="col-md-8">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged<a href="<?php echo site_url('webdevelopmentcompany');?>" target="_blank">ReamMore</a>.</div>
	   </div>
<!--extab2-->
				</div>
        <div class="tab-pane" id="digitalmarketing">
            <div class="row">
	   <div class="col-md-4"><img src="assets/img/digitalmarketing.jpg"></div>
	   <div class="col-md-8">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged<a href="<?php echo site_url('Digitalmarketingcompany');?>" target="_blank">ReamMore</a>.</div>
	   </div>
<!--extab3-->
				</div>
		 <div class="tab-pane" id="consulting">
            <div class="row">
	   <div class="col-md-4"><img src="assets/img/business_analyst.jpg"></div>
	   <div class="col-md-8">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged<a href="<?php echo site_url('ConsultingCompany');?>" target="_blank" >ReamMore</a>.</div>
	   </div>
<!--extab4-->
		</div>
		<div class="tab-pane" id="recruiters">
            <div class="row">
	   <div class="col-md-4"><img src="assets/img/intern_recruiters.jpg" class="image"></div>
	   <div class="col-md-8">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged<a href="<?php echo site_url('ITRecruitmentcompany');?>" target="_blank">ReamMore</a>.</div>
	   </div>
<!--extab5-->
</div>
<div class="tab-pane" id="mobile">
            <div class="row">
	   <div class="col-md-4"><img src="assets/img/intern_android.jpg"></div>
	   <div class="col-md-8">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged<a href="<?php echo site_url('MobileApplicationcompany');?>" target="_blank" >ReamMore</a>.</div>
	   </div>
<!--extab6-->
</div>
<div class="tab-pane" id="Training">
            <div class="row">
	   <div class="col-md-4"><img src="assets/img/intern_training.jpg" width="100%"></div>
	   <div class="col-md-8">simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.s simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged<a href="<?php echo site_url('ITTrainingcompany');?>" target="_blank" >ReamMore</a>.</div>
	   </div>
<!--extab7-->
				</div>	
        
			</div>
  </div>
		<!--programblock-->
			 <div class="row">
				<div class="col-md-6">
					<div class="col-md-12 inn">
						<div class="col-md-3">
							<img src="assets/img/intern.jpg" class="image"/>
						</div>
						<div class="col-md-9">
							<p><h4>Campus Ambassador</h4></p>
							<p>E-Summit IIT Roorkee</p>
							<p>Anywhere in India</p>
						</div>
					</div>
					<div class="col-md-12 intern_footer">
						<div class="col-md-6 center-block first">Apply by 20th Jan `19</div> 
						<div class="col-md-6"><button class="btn btn-info center-block">Apply Now</button></div>
						</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-12 inn">
						<div class="col-md-3">
							<img src="assets/img/intern.jpg" class="image"/>
						</div>
						<div class="col-md-9">
							<p><h4>Campus Ambassador</h4></p>
							<p>E-Summit IIT Roorkee</p>
							<p>Anywhere in India</p>
						</div>
						<div class="col-md-12 intern_footer">
						<div class="col-md-6 center-block">Apply by 20th Jan `19</div> 
						<div class="col-md-6"><button class="btn btn-info center-block">Apply Now</button></div>
						</div>
					</div>
				</div>
             </div>
			 <!--row2-->
			  <div class="row">
				<div class="col-md-6">
					<div class="col-md-12 inn">
						<div class="col-md-3">
							<img src="assets/img/intern.jpg" class="image"/>
						</div>
						<div class="col-md-9">
							<p><h4>Campus Ambassador</h4></p>
							<p>E-Summit IIT Roorkee</p>
							<p>Anywhere in India</p>
						</div>
					</div>
					<div class="col-md-12 intern_footer">
						<div class="col-md-6 center-block first">Apply by 20th Jan `19</div> 
						<div class="col-md-6"><button class="btn btn-info center-block">Apply Now</button></div>
						</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-12 inn">
						<div class="col-md-3">
							<img src="assets/img/intern.jpg" class="image"/>
						</div>
						<div class="col-md-9">
							<p><h4>Campus Ambassador</h4></p>
							<p>E-Summit IIT Roorkee</p>
							<p>Anywhere in India</p>
						</div>
						<div class="col-md-12 intern_footer">
						<div class="col-md-6 center-block">Apply by 20th Jan `19</div> 
						<div class="col-md-6"><button class="btn btn-info center-block">Apply Now</button></div>
						</div>
					</div>
				</div>
             </div>
			 
			</div>
<!--List Group-->
<div id="exTab1" class="container">	
<ul  class="nav nav-pills list-inline">
			<li class="active">
        <a  href="#latestInterships" data-toggle="tab">Latest InterShips</a>
			</li>
			<li><a href="#featuredships" data-toggle="tab">Featured InterShips</a>
			</li>
			<li><a href="#trendingevents" data-toggle="tab">Trending  Events</a>
			</li>
		</ul>

			<div class="tab-content clearfix">
			  <div class="tab-pane active" id="latestInterships">
        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Posted</th>
      <th scope="col">Internship Title</th>
      <th scope="col">Apply Now</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Jul 27, 2019</th>
      <td>	Android Developer</td>
      <td><button class="btn btn-info">Apply Now</button></td>
    </tr>
    <tr>
      <th scope="row">Jul 26, 2019</th>
      <td>Technical Content Writer</td>
	  <td><button class="btn btn-info">Apply Now</button></td>
    </tr>
    <tr>
      <th scope="row">Jul 04, 2019</th>
      <td>Business Development Internship</td>
	  <td><button class="btn btn-info">Apply Now</button></td>
    </tr>
  </tbody>
</table>
		  <!--tab1 -->
				</div>
				<div class="tab-pane" id="featuredships">
            <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Posted</th>
      <th scope="col">Internship Title</th>
      <th scope="col">Apply Now</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Jul 04, 2019</th>
      <td>Technical Content Writer</td>
      <td><button class="btn btn-info">Apply Now</button></td>
    </tr>
    <tr>
      <th scope="row">Jul 26, 2019</th>
      <td>	Android Developer</td>
	  <td><button class="btn btn-info">Apply Now</button></td>
    </tr>
    <tr>
      <th scope="row">Jul 27, 2019</th>
      <td>Business Development Internship</td>
	  <td><button class="btn btn-info">Apply Now</button></td>
    </tr>
  </tbody>
</table><!--extab2-->
				</div>
        <div class="tab-pane" id="trendingevents">
           <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Internship Title</th>
      <th scope="col">Apply Now</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Jul 26, 2019</th>
      <td>Business Development Internship</td>
      <td><button class="btn btn-info">Apply Now</button></td>
    </tr>
    <tr>
      <th scope="row">Jul 27, 2019</th>
      <td>Technical Content Writer</td>
	  <td><button class="btn btn-info">Apply Now</button></td>
    </tr>
    <tr>
      <th scope="row">Jul 04, 2019</th>
      <td>Android Developer</td>
	  <td><button class="btn btn-info">Apply Now</button></td>
    </tr>
  </tbody>
</table><!--extab3-->
				</div>
        
			</div>
  </div>
  </div>
<!--blog-->
<section>
<div class="container blog">
<h4>From The Blog</h4>
<div class="row">
	<div class="col-md-6">
	 <div class="col-md-12">
		  <div class="col-md-3"><img src="assets/img/blog_1.jpeg" class="image"></div>
		  <div class="col-md-9">
			um is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
		  </div>
	  </div>
	</div>
	<div class="col-md-6">
	  <div class="col-md-12">
		  <div class="col-md-3"><img src="assets/img/blog_2.jpg" class="image"></div>
		  <div class="col-md-9">
			um is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
		  </div>
	  </div>
	</div>
</div>	
<div class="row">
	<div class="col-md-6">
	 <div class="col-md-12">
		  <div class="col-md-3"><img src="assets/img/blog_3.jpg" class="image"></div>
		  <div class="col-md-9">
			um is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
		  </div>
	  </div>
	</div>
	<div class="col-md-6">
	  <div class="col-md-12">
		  <div class="col-md-3"><img src="assets/img/blog_1.jpeg" class="image"></div>
		  <div class="col-md-9">
			um is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more 
		  </div>
	  </div>
	</div>
</div>	
</section>	
		
</div>

<?php 

require_once('footer.php');

?>







