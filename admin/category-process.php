<?php session_start();

	if(!empty($_POST))
	{
		
		extract($_POST);
		$msg=array();
		
		if(empty($cat))
		{
			$msg[]="please enter category name";
		}
		if(!empty($msg))
		{
			$_SESSION['error']=$msg;
			header("location:category.php");
		}
		else
		{
			include("../include/config.php");
			
			$q="insert into category (c_name)values('$cat')";
			mysqli_query($con,$q);
			
			$_SESSION['done']="done! Successfully Category Add.";
			header("location:category.php");
		}
		
	}
	else
	{
		header("location:category.php");
	}

?>