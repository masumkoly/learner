<?php

include('../database.php');

$id=$_GET['id'];

$mysqli->query("delete from social_science_faculty where id=$id");

unlink("profile_images/".$id.".jpg");

header('location:http://localhost/admin/index.php?page=social_science_faculty');

?>