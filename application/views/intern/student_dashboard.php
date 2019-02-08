<?php 
require_once(APPPATH.'views\intern\header.php');
?>
<!--body-->
<style>
.profile img{
	    width: 131%;
}
.profile{
	font-family:serief;
}
.pro{	
    padding: 1% 4% 1% 4%;
    font-weight: 800;
    color: #334351;
}
</style>
<div class="row">
 <?php 
require_once(APPPATH.'views\intern\student_sidebar.php');
?>
 <div class="col-md-10">
	<div class="main profile">
	 <div class="row">	
	  <div class="col-md-6">
	  
	  <h4 class='text-center'>Profile</h4>
	 <div class="col-md-3"><img src="assets/img/intern_profile.jpg"/></div>
	 <div class="col-md-9">
	 <div class="col-md-12 pro">
	 <p>Name:<?php echo $first_name.':'.$last_name; ?></p>
	 <p>Email:<?php echo $email;?></p>
	 <p>Phone:<?php echo $phone;?></p>
	   </div>
	     </div>
	  </div>
	   <div class="col-md-6"></div>
	 </div>
	</div>
 </div>
</div>
<?php 
require_once(APPPATH.'views\intern\footer.php');
?>