<?php 
	$id=$_REQUEST['id'];
	
	include("../include/config.php");
			
	
	$q="delete from category
		where c_id=$id";
		
	mysqli_query($con,$q);
	
	header("location:category.php");
?>