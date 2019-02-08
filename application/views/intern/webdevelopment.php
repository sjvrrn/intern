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
#footer{
	width:100%;
	left:0px;
	bottom:0px;
	position:fixed;
}
</style>
<!--body-->
<div class="row">
<div class="center-block">
<div class="col-md-12">
mobile Application
</div>
</div>
</div>
</div>
<?php 
require_once(APPPATH.'views\intern\footer.php');
?>