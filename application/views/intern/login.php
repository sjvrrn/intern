<?php 
require_once(APPPATH.'views\intern\header.php');
if(isset($message)){
	$msg = $message; 
}
?>
<style>
.message h5{
	font-family: serif;
    color: red;
	font-weight:700;
}
.message h4{
	font-family: serif;
    font-weight: 700;
}
</style>
<!--body-->
<div class="row">
<div class="center-block">
<div class="col-md-12">
<form action="<?php echo site_url('Login');?>" class="form-horizontal" method="post">
<div class="row message">
<h4 class="text-center">Login Form</h4>
<h5 class="text-center "><?php if(isset($message)){echo $msg;}?></h5>
			  <div class="form-group">
			 <label for="email" class="control-label col-md-4">Email:</label>
			  <div class="col-md-2">
				<input type="email" class="form-control" id="email" name="email">
				</div>
			  </div>
			<div class="form-group">
			  <label class="control-label col-md-4" for="email">First Name:</label>
			  <div class="col-sm-4 col-md-2">
				<input type="password" class="form-control" id="password" placeholder="Enter Password" name="password" required>
			  </div>
			</div>
		<div class="form-group">        
			  <div class="col-sm-offset-2 col-md-offset-4 col-sm-10">
				<div class="checkbox">
				  <label><input type="checkbox" name="remember"> Remember me</label>
				</div>
			  </div>
			</div>
			<div class="form-group">        
			  <div class="col-md-offset-4 col-sm-6 col-md-6">
				<button type="submit" class="btn btn-info">Register</button>
			  </div>
			</div>
</form>
</div>
</div>
</div>
</div>
<?php 
require_once(APPPATH.'views\intern\footer.php');
?>