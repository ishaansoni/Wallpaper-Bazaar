<html>
	<head>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/responsive.css" />
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		
		<link rel="stylesheet" href="css/animate.min.css">
		<script src="css/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		
		<?php
			$title="Wallpapers Bazaar";
		?>
		
		<title><?php echo $title; ?></title>
	</head>
	
	<body>
		<div id="wrapper">
		
			<div id="header">
				<h2 class="wow fadeInLeft">Wallpapers Bazaar</h2>
				
				<div id="headt">
				</div>
					
				<div class="searchwrap">
					<div class="searchbox">
						<form action="search_process.php" method="post">
							<input type="text" name="search" placeholder="Search for Wallpapers" class="txtsearch"/>
							<input type="submit" name="btn" value="Go" class="btnsearch"/>
						</form>
					</div>
					<div class="tagline">
						<span>Discover and Download High Definition Wallpapers</span>
					</div>
					
				</div>
			</div>
			<?php 	$page=basename($_SERVER['SCRIPT_FILENAME']); ?>
			
			<div id="menu">
				<ul class="menu">
					<li><a href="index">Home</a></li>
					<li><a href="Latest-Wallpapers">Latest Wallpapers</a></li>
					<li><a href="Top-download">Top Downloads</a></li>
					
					<li><a href="contactus">Contact us</a></li>
				</ul>
			</div>
			
			<!--<div class="addgo">
			</div>-->

			<div id="contentwrap">
				<div id="leftsidebar">
					<div class="sideback">
						<img src="image/star1.png" class="sidecat"/><h2>Category</h2>
					</div>
				
					<ul>
					<?php
							
									include("include/config.php");
									
									$q="select * from category order by c_name";
									
									$res=mysqli_query($con,$q);
									
									while($cat_row=mysqli_fetch_assoc($res))
									{
										echo '	<li><a title="Download '.$cat_row['c_name'].' Wallpapers" href="Wallpaperview?id='.$cat_row['c_id'].'&cat='.$cat_row['c_name'].'">'.$cat_row['c_name'].'</a></li>';
										
									}
							
							?>
							</ul>
				</div>
				