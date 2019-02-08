
<?php 
require_once(APPPATH.'views\intern\header.php');
?>
<style>
.registeration{
	font-family: serif;
}
.student_form{
	border: 1px solid #5899d0;
   padding: 6% 17% 1% 1%;
    background: #809ab080;
    border-radius: 2%;
	
}
.registeration .col-md-4 img{
	width:200px;
}
.student{
	font-family:serief;
}
.student h4{
	color: #9a7f7f;
	font-weight: 700;
}
.student .col-md-3 img{
	width:80px;
}
.student .col-md-9{
	padding-top:3%;
}
.student h6{
	color: #115189;
    font-size: large;
    font-weight: 900;
}
.features .row{
	       padding: 1% 1% 1% 1%;
}
.student h5{
	font-weight:900;
}

</style>
<div class="container student">
 <div class="row">
 <h4 class="text-center">PostIntership</h4>
 <!--<div class="col-md-6">
  
	 <div class="col-md-9 col-sm-12  pull-right features">
	 <p><h6 class="text-center">Why Join Us</h6></p>
		 <div class="row">
			 <div class="col-md-3"><img src="assets/img/intern_register.png" class="rounded-circle" /></div>
			 <div class="col-md-9"><h5>Register.</h5></div>
		 </div>
		  <div class="row">
			 <div class="col-md-3"><img src="assets/img/intern_email.jpg" class="rounded-circle" /></div>
			 <div class="col-md-9"><h5>Recieve Applications.</h5></div>
		 </div>
		  <div class="row">
			 <div class="col-md-3"><img src="assets/img/intern_shortlist.png" class="rounded-circle" /></div>
			 <div class="col-md-9"><h5>Search , Shortlist & Select Applicants.</h5></div>
		 </div>
	 </div>
 </div>-->
  <?php require_once(APPPATH.'views\intern\sidebar.php');?>
   <div class="col-md-6 col-sm-6 registeration">
 
   <div class="col-md-12 col-sm-12 center-block">
  <div class="col-md-12">
		  <form class="form-horizontal student_form"  method="post" action="<?php echo site_url('/Postinternship');?>">
				<div class="form-group">
				  <label class="control-label col-md-6" for="companyname">Comapany Name:</label>
				  <div class="col-sm-4 col-md-6">
					<input type="text" class="form-control" id="company name" placeholder="Enter Company Name" name="company_name" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-md-6" for="email">Start Date:</label>
				  <div class="col-sm-4 col-md-6">
					<input type="date" class="form-control" id="startdate" placeholder="Enter start date" name="start_date" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-md-6" for="email">Duration:</label>
				  <div class="col-sm-4 col-md-6">
					<input type="number" class="form-control" id="duration" placeholder="Enter durtion" name="duration" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-md-6" for="pwd">Phone</label>
				  <div class="col-sm-4 col-md-6">          
					<input type="number" class="form-control" id="phone" placeholder="Enter Phone" name="phone" required>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-6 col-sm-6 col-md-6">
					<button type="submit" class="btn btn-info">POST</button>
				  </div>
				</div>
		  </form>
		 </div>
		</div>
	</div>	  
  </div>
</div>
<?php 
require_once(APPPATH.'views\intern\footer.php');
?>
