<?php session_start();
	
	if(!empty($_POST))
	{
		extract($_POST);
		$_SESSION['error']=array();
		
		if(empty($imgnm))
		{
			$_SESSION['error'][]="please enter image name";
			header("location:addimages.php");
		}
		//image validation
		
		//var_dump();
		$ext=strtoupper(substr($_FILES['img']['name'][0],-4));
		
		if(empty($_FILES['img']['name'][0]))
		{
			$_SESSION['error'][]="please select image";
		}
		else if(!($ext==".JPG" || $ext==".PNG" || $ext==".GIF"|| $ext=="JPEG" || $ext==".BMP"))
		{
			$_SESSION['error'][]="wrong image file";
		}
		else if(file_exists("../wallpapers/".$_FILES['img']['name'][0]))
		{
			$_SESSION['error'][]="image already exists";
		}
		
		else
		{
			$file=time()."_".$_FILES['img']['name'][0];
			$date= date("d-M-y");
			
			move_uploaded_file($_FILES['img']['tmp_name'][0],"../wallpapers/".$file);
			
						include("../include/config.php");
						
						$q="insert into wallpaper(w_date,w_imgnm,w_cat,w_img,w_tag)
						values
						('$date','$imgnm','$cat','$file','$tags')";
						
						//echo $q;
						//exit;
						mysqli_query($con,$q);
						
						$_SESSION['done']="Add image sucessfully";
						
						header("location:addimages.php");
						
		}
	}
	else
	{
		header("location:addimages.php");
	}
?>