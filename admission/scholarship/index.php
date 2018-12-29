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
		document.getElementById("add_form").submit();
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
<th><center>Name</center></th>

<th><center>Type</center></th>

<th><center>Scholarship For</center></th>

<th><center>Start Date</center></th>

<th><center>End Date</center></th>
<th><center>Action</center></th>
</tr>
</thead>

<tbody>

<?php

include('../database.php');

$result=$db->query("select * from scholarship");

while($row=$result->fetch_assoc()){

//$img = "http://localhost/phpcrud/profile_images/".$row['id']. ".jpg";

?>

<tr>
<!--
<td> <img src='<?php //echo $img ?>' height="50px" width="70px" /></td>
-->
<td><?php echo $row['name']; ?></td>

<td><?php echo $row['type']; ?></td>

<td><?php echo $row['scholarship_for']; ?></td>
<td><?php echo $row['start_date']; ?></td>
<td><?php echo $row['last_date']; ?></td>
<!--
<td><?php // echo '<a href="'.$row['link'].'">Click Here</a>'; ?></td>
-->
<td>

<a href="#detail<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-success btn-sm"><span class="glyphicon glyphicon-floppy-open"></span></a>&nbsp;

<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning btn-sm"><span class="glyphicon glyphicon-edit"></span></a>&nbsp;

<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></a>

<!– include edit modal –>

<?php include('show_detail_modal.php'); ?>

<!– End –>



<!– include edit modal –>

<?php include('show_edit_modal.php'); ?>

<!– End –>

<!– include delete modal –>

<?php include('show_delete_modal.php'); ?>

<!– End –>

</td>

</tr>

<?php } ?>

</tbody>

</table>
</div>
</div>

<!– include insert modal –>

<?php include('show_add_modal.php'); ?>

<!– End –>

</div>




</body>

</html>

