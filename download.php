<?php  include("include/config.php"); 
	
	if(isset($_GET['id']) && !empty($_GET['id']))
	{
		$ref=intval($_GET['id']);
		mysqli_query($con,"update wallpaper set w_download=w_download+1 where w_id=$ref");
	}
	
	$getfile="wallpapers/".$_GET['img'];
	$fname=$_GET['img'];
	
	$fl="";
	
		if(isset($_GET['height']))
		{
			
			$h=$_GET['height'];
			$w=$_GET['width'];
			
			$im="wallpapers/".$_GET['img'];
			
			$img=imagecreatefromjpeg($im);
				
			$s=imagecreatetruecolor($w,$h);
			
			$x=imagesx($img);
			$y=imagesy($img);
			imagecopyresampled($s,$img,0,0,0,0,$w,$h,$x,$y);
			$file=time()."_".$_GET['img'];
			
			imagejpeg($s,"tmp/".$file);
			
			$getfile="tmp/".$file;
			
			$fl=$getfile;

		}	
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename='.$fname);
	header('Content-Transfer-Encoding: binary');
	
	readfile($getfile);

	@ unlink($fl);
?>