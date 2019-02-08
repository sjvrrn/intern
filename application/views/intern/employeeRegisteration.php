
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
 <h4 class="text-center">Employee Registeration</h4>
 <div class="col-md-6">
  
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
 </div>
   <div class="col-md-6 col-sm-6 registeration">
 
   <div class="col-md-12 col-sm-12">
   <div class="col-md-4"><img src="assets/img/intern_employee.jpg" class="image image-responsive"/></div>
   <div class="col-md-8">
		  <form class="form-horizontal student_form"  method="post" action="<?php echo site_url('/Employee_register');?>">
		        <div class="form-group">
				  <label class="control-label col-md-6" for="first_name">First Name:</label>
				  <div class="col-sm-4 col-md-6">
					<input type="text" class="form-control" id="first_name" placeholder="Enter Fist Name" name="first_name" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-md-6" for="last_name">Last Name:</label>
				  <div class="col-sm-4 col-md-6">
					<input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-md-6" for="email">Email:</label>
				  <div class="col-sm-4 col-md-6">
					<input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-md-6" for="password">Password:</label>
				  <div class="col-sm-4 col-md-6">
					<input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-md-6" for="CompanyName">Company Name:</label>
				  <div class="col-sm-4 col-md-6">
					<input type="text" class="form-control" id="CompanyName" placeholder="Enter Company Name" name="company_name" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-md-6" for="CompanyAddress">Company Address:</label>
				  <div class="col-sm-4 col-md-6">
					<input type="text" class="form-control" id="CompanyAddress" placeholder="Enter Company Address" name="company_address" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-md-6" for="phone">Phone</label>
				  <div class="col-sm-4 col-md-6">          
					<input type="number" class="form-control" id="phone" placeholder="Enter Phone" name="phone" required>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-md-offset-6 col-sm-10">
					<div class="checkbox">
					  <label><input type="checkbox" name="remember"> Remember me</label>
					</div>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-6 col-sm-6 col-md-6">
					<button type="submit" class="btn btn-info">Register</button>
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
