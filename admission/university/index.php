<!DOCTYPE html>

<html>

<head>

<title>Scholarship Information</title>

<script src="jquery.min.js"></script>

<link rel="stylesheet" href="bootstrap.min.css" />

<script src="bootstrap.min.js"></script>

 

<link rel="stylesheet" href="jquery.dataTables.min.css"></style>

<script type="text/javascript" src="jquery.dataTables.min.js"></script>

<script type="text/javascript" src="bootstrap-filestyle.min.js"> </script>

<link href="fonts.css" rel="stylesheet">

<script>

$(document).ready(function(){

$('#schTable').dataTable();

$('.file-upload').file_upload();


$("a[class='paginate_button']").attr('href', "http://localhost/adm_admin/index.php");
    



});

</script>

<script type="text/javascript">
  function form_submit(n) {
	 
    if(n==1)
	{
		document.getElementById("uni_add_form").submit();
	}
	
   }    
  </script>

</head>

<body style="margin:20px auto">

<h2 class="title-1">Scholarship Information</h2>

<div class="container">

<br/><br/>

<div class="row header col-sm-12" style="text-align:center;color:green">

<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>

<div style="height:50px;"></div>
<div class="table-responsive table--no-card m-b-40">

<table  class="table table-borderless table-striped table-earning"  id="schTable"  >

<thead style="background-color: #4E42E8">
<tr>
<th><center>University</center></th>

<th><center>Establistment date</center></th>

<th><center>department</center></th>

<th><center>Type</center></th>

<th><center>Action</center></th>
</tr>

</thead>

<tbody>

<?php

include('../database.php');

//$result=$mysqli->query("select id,uni_name,establistment_date,total_depart,type from uni_basic");
$result=$db->query("select * from uni_basic");

while($crow=$result->fetch_assoc()){
	
?>

<tr>

<td><?php echo $crow['university_name']; ?></td>

<td><?php echo $crow['establishment_date']; ?></td>

<td><?php echo $crow['total_depart']; ?></td>
<td><?php echo $crow['type']; ?></td>



<td>
<a href="#detail<?php echo $crow['id']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-open"></span></a>&nbsp;

<a href="#edit<?php echo $crow['id']; ?>" data-toggle="modal" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;

<a href="#del<?php echo $crow['id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>


</td>


<?php include('show_detail_modal.php'); ?>
<?php include('show_edit_modal.php'); ?>
<?php include('show_delete_modal.php'); ?>

<?php } ?>


</td>

</tr>



</tbody>

</table>
</div>
</div>


</div>


<?php include('show_add_modal.php'); ?>

</body>

</html>

