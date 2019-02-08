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
/* #footer{
	width:100%;
	left:0px;
	bottom:0px;
	position:fixed;
} */
.display{
	margin-right:20%;
	margin-left:20%;
	padding:1% 1% 1% 
}
</style>
<!--body-->
<div class="row">
<div class="center-block">
<?php require_once(APPPATH.'views\intern\sidebar.php'); ?>
<div class="col-md-10">
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
		<th>Status</th>
		<th>CreatedAt</th>
      </tr>
    </thead>
    <tbody>
<?php 
foreach($intermships as $intermship){ ?>
      <tr>
        <td><?php echo $intermship->id; ?></td>
        <td><?php echo $intermship->first_name.':'.$intermship->last_name; ?></td>
        <td><?php echo $intermship->email; ?></td>
		 <td><?php echo $intermship->company_name; ?></td>
		  <td><?php echo $intermship->duration; ?></td>
		    <td><?php echo $intermship->start_date; ?></td>
			<td><?php if($intermship->status==1){  echo"<a href='#'data-id=".$intermship->id." title='deactivate' id='deactivate'><img  id='deactive_".$intermship->id."' src='assets/img/interm_wrong.png' class='image image-responsive' width='30px'></a>"; }else{ echo"<a href='#' data-id=".$intermship->id." id='activate' title='activate'><img  id='active_".$intermship->id."' src='assets/img/interm_right.png' class='image image-responsive' width='30px'></a>";}?></td>
			<td><?php echo $intermship->createdAt;?></td>
      </tr>
   
<?php } ?>

    </tbody>
  </table>
</div>
</div>
</div>
</div>
<?php 
require_once(APPPATH.'views\intern\footer.php');
?>