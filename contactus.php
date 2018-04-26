<?php 
$title = "Wallpapers Bazaar Contact us";
?>
	<title><?php echo $title; ?></title>
<?php
include("include/header.php");?>
	<div id="content">
					<div class="listname">
						<img src="image/list.png" class="listimg"/>
							<h3><?php echo substr($page,0,strrpos($page,".")); ?></h3>
					</div>
					
				<div class="formwrap">
					<div style="clear:both;"></div>
						<form action="#" method="post">
							Name : <br/>
							<input type="text" name="unm" class="conunm"/><br/>
							
							Email : <br/>
							<input type="text" name="unm" class="conunm"/><br/>
							
							Subject : <br/>
							<input type="text" name="unm" class="conunm"/><br/>
							
							Message : <br/>
							<textarea class="conunmmsg" name="cmsg"></textarea><br/>
							
							<input type="submit" value="send" class="cmsgsend"/>
						</form>
					</div>
		</div>
<?php include("include/footer.php");?>

