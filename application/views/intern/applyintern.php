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
	 <div class="row">	  
	  <h4 class='text-center'>Apply To IntermShip</h4>
	 <div class="col-md-12">
<div class="display">
<table class="table">
    <thead>
      <tr>
        <th>S.NO</th>
		<th>Employee Name</th>
		<th>Email</th>
        <th>Company Name</th>
        <th>Duration</th>
		<th>Intermship StartDate</th>
		<th>Apply</th>
      </tr>
    </thead>
    <tbody>
<?php 
$user_id  = $intermships['user_id'];
$i=1; 
foreach($intermships as $intermship){  //$i?>
      <tr>
        <td><?php echo $intermship->postid ; ?></td>
        <td><?php echo $intermship->first_name.':'.$intermship->last_name; ?></td>
        <td><?php echo $intermship->email; ?></td>
		 <td><?php echo $intermship->company_name; ?></td>
		  <td><?php echo $intermship->duration; ?></td>
		    <td><?php echo $intermship->start_date; ?></td>
			<td><a href='#' data-userid = "<?php echo $user_id;?>" data-postid="<?php echo $intermship->id;?>" title='Apply' id='apply'id="apply_<?php echo $intermship->id;?>" class="btn btn-info">Apply</a></td>
      </tr>
   
<?php $i++;} ?>

    </tbody>
  </table>
</div>
</div>
	     </div>
	  </div>
	</div>
<?php 
require_once(APPPATH.'views\intern\footer.php');
?>