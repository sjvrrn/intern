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
</style>
	<div class="container-fluid">
		<h3>Interns</h3>
		<div class="intern">
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

//require_once('footer.php');

?>







