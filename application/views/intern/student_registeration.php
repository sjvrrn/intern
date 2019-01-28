
<?php 
require_once(APPPATH.'views\intern\header.php');
?>
<div class="container">
 <div class="row">
   <div class="col-md-8 registeration">
          <h6 class="text-center"><p>Student Registeration</p></h6>
		  <form class="form-horizontal"  method="post" action="<?php echo site_url('/Regstudent');?>">
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">First Name:</label>
				  <div class="col-sm-6 col-md-6">
					<input type="text" class="form-control" id="first_name" placeholder="Enter First Name" name="first_name" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Last Name:</label>
				  <div class="col-sm-6 col-md-6">
					<input type="text" class="form-control" id="last_name" placeholder="Enter Last Name" name="last_name" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="email">Email:</label>
				  <div class="col-sm-6 col-md-6">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-sm-2" for="pwd">Phone</label>
				  <div class="col-sm-6 col-md-6">          
					<input type="number" class="form-control" id="phone" placeholder="Enter Phone" name="phone" required>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
					  <label><input type="checkbox" name="remember"> Remember me</label>
					</div>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Submit</button>
				  </div>
				</div>
		  </form>
	</div>	  
  </div>
</div>
<?php 
require_once(APPPATH.'views\intern\footer.php');
?>
