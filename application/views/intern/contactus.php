<?php 
require_once(APPPATH.'views\intern\header.php');
?>
<style>
.address{
        font-family: serif;
    font-weight: 900;
    color: #4f6273;
    padding: 1% 1% 1% 7%;
    border-left: 1px solid #bccfd3;
}
.address h4{
	font-size: large;
    font-weight: 800;
}
.contact{
		    padding: 1% 1% 1% 1%;
}
.contactus{
	     font-family: serif;
	     padding: 2% 1% 1% 1%;
}
.contactus h4{
    font-weight: 900;
    padding: 1% 1% 1% 1%;
}
#contact_3{
	border-right: 1px solid #bccfd3;
    font-family: serif;
    padding: 1% 1% 1% 1%;
}
#contact_3 h5{
	font-size: large;
    font-weight: 700;
    text-align: center;
    color: #1e2222;
}
#search-box{
	display:none;
}

</style>
<script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap" async defer></script>
<script>
var map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: initLat, lng: initLon},
    zoom: 6
  });
</script>
<div class="container-fluid">
 <div class="aboutus">
	  <div class="row contactus">
		<h4 class="text-center">ContactUs</h4>
		<div class="col-md-4" id="contact_3">
		<h5>W3C Group Of Soulutions</h5>
		<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged	 </p>
		</div>
		<div class="col-md-4 contact">
         <!-- Default form register -->
           <form class="form-horizontal student_form"  method="post" action="<?php echo site_url('/contactm');?>">
				<div class="form-group">
				  <label class="control-label col-md-2" for="email">Name:</label>
				  <div class="col-sm-4 col-md-10">
					<input type="text" class="form-control" id="name" placeholder="Enter Name" name="name" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-md-2" for="email">Email:</label>
				  <div class="col-sm-4 col-md-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
				  </div>
				</div>
				<div class="form-group">
				  <label class="control-label col-md-2" for="pwd">Message</label>
				  <div class="col-sm-4 col-md-10">          
					<textarea class="form-control" id="message" placeholder="Enter Message" name="message" required></textarea>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-md-offset-2 col-sm-10">
					<div class="checkbox">
					  <label><input type="checkbox" name="remember"> Remember me</label>
					</div>
				  </div>
				</div>
				<div class="form-group">        
				  <div class="col-sm-offset-2 col-sm-6 col-md-6">
					<button type="submit" class="btn btn-info">Submit</button>
				  </div>
				</div>
		  </form>
		</div>
		<div class="col-md-4 address">
	         <h4 >Our Office</h4>
			 <p>Plot No 35, Navodaya Colony,</P>
			 <p>Road No 2, Banjara Hills,</P>
			 <p >Hyderabad - 500 034 </P>
			 <p>Telangana - India.</P>
			 <p>Plot No 35, Navodaya Colony,</P>
			 <p>Phone</P>
			 <p>+91-40-49492040</P>
			  <p>+91-40-49492000</P>
		</div>
	  </div>
	</div>
	<!--map script-->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script type="text/javascript">
if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function (p) {
        var LatLng = new google.maps.LatLng(17.498407,78.414822);
        var mapOptions = {
            center: LatLng,
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("dvMap"), mapOptions);
        var marker = new google.maps.Marker({
            position: LatLng,
            map: map,
            title: "<div style = 'height:60px;width:200px'><b>Your location:</b><br />Latitude: " + p.coords.latitude + "<br />Longitude: " + p.coords.longitude
        });
        google.maps.event.addListener(marker, "click", function (e) {
            var infoWindow = new google.maps.InfoWindow();
            infoWindow.setContent(marker.title);
            infoWindow.open(map, marker);
        });
    });
} else {
    alert('Geo Location feature is not supported in this browser.');
}
</script>
	<!--map script -->
	<div class="center-block" id="dvMap" style="width: 80%; height: 350px">

</div>
<?php 
require_once(APPPATH.'views\intern\footer.php');
?>