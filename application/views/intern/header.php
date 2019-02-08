<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>W3C Group Of Solutions</title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<style type="text/css">
.container{
	width:100% !important;
	padding-right:0px !important;
	padding-left:0px !important;
}

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
.navbar{
	margin-bottom:0px !important;
}
/*custom styles*/

/* .header{
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

.navbar-nav>li {
    float: left;
    margin-left: 1px;
    border-radius: 5%;
}
.navbar-nav>li a{
	color: #fff;
} */
.navbar-nav>li:hover {
    background-color:#f9f1f157;
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
}
.carousel .item{
    min-height: 280px; /* Prevent carousel from being distorted if for some reason image doesn't load */
}
.carousel .item img{
    margin: 0 auto; /* Align slide image horizontally center */
}
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

</style>
<script>
$(document).ready(function(){
	
$(document).on("click","#activate",function(){
var id = $(this).data("id");
	$.ajax({
		url:'http://localhost/intern/active',
		type:'POST',
		data:"id="+id,
		success:function(data){ 
		 document.getElementById("active_"+id).src = "assets/img/interm_wrong.png";
		}
		
	});
});
//deactive
$(document).on("click","#deactivate",function(){
var id = $(this).data("id");
	$.ajax({
		url:'http://localhost/intern/deactive',
		type:'POST',
		data:"id="+id,
		success:function(data){  
		 document.getElementById("deactive_"+id).src = "assets/img/interm_right.png";
		}
		
	});
});
//apply
$(document).on("click","#apply",function(){
var post_id = $(this).data("postid");
var user_id = $(this).data("userid");
	$.ajax({
		url:'http://localhost/intern/apply',
		type:'POST',
		data:"userid="+user_id+"&postid="+post_id,
		success:function(data){
if(data==="success.")
$("#apply_"+post_id).attr("disabled","disabled");
else	
	alert("Application Failed");
		}
		
	});
});
});
</script>
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
		<li class="list-inline-item"><a href="<?php echo site_url('login'); ?>">Login</a></li>
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
        <!--  <a href="#" class="navbar-brand"><img src="assets/img/logo.jpg"/></a>-->
        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo site_url('/');?>">Home</a></li>
                <li><a href="<?php echo site_url('/');?>">Intership</a></li>
                <li><a href="<?php echo site_url('/training');?>">Training</a></li>
				<li><a href="<?php echo site_url('/aboutus');?>">AboutUs</a></li>
				<li><a href="<?php echo site_url('/contactus');?>">ContactUs</a></li>
				 <?php if($this->session->userdata('logged_in')) { ?>
	<li><a href="<?php echo  site_url("/logout");?>">LogOut</a></li>
		<?php }?>
            </ul>
        </div>
    </nav>
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
			  <p><a href="<?php echo site_url('/employee')?>" class="btn btn-info btn-xs">Register</a></p>
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
              