 <style>
 .services{
	background-color: #5bc0de;
    font-family: serif;
    padding: 3% 30% 3% 30%;
    font-weight: 900;
    margin-bottom: 1px;
    margin-top: 1px;
}
 </style>
 <div class="col-md-2">
	<div class="col-md-12 services"><a href="<?php echo site_url("/profile");?>">Profile</a></div>
	<div class="col-md-12 services"><a href="<?php echo site_url('PostInterShip');?>">InterShip</a></div>
	<div class="col-md-12 services"><a href="<?php echo site_url('Interships');?>">View InterShip</a></div>
	 <?php if($this->session->userdata('logged_in')) { ?>
	<div class="col-md-12 services"><a href="<?php echo site_url("/logout");?>">LogOut</a></div>
		<?php }else{
		echo'';
		//
		}?>
	
</div>