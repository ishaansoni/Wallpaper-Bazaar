<?php session_start();

	if(! empty($_POST))
	{
		extract($_POST);
		$_SESSION['error']=array();
		
		if(empty($unm) || empty($pwd))
		{
			$_SESSION['error'][]="please enter username or password";
			
			header("location:login.php");
		}
		else
		{
			include("../include/config.php");
			
			 $q="select * from admin where a_unm='$unm' and a_pwd='$pwd'";
			$res=mysqli_query($con,$q);
			
			$row=mysqli_fetch_assoc($res);
		
			if(!empty($row))
			{
				$_SESSION['admin']['unm']=$row['a_unm'];
				$_SESSION['admin']['uid']=$row['a_uid'];
				$_SESSION['admin']['status']=true;
				
				header("location:index.php");
			}
			else
			{
				$_SESSION['error'][]="wrong username or password";
				
				header("location:login.php");
			}
		}
	}
	else
	{
		header("location:login.php");
	}
?>