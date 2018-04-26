<?php include("include/header.php");

include("include/config.php");

$id=$_GET['id'];

mysqli_query($con,"update wallpaper set w_view=w_view+1 where w_id=$id");


$q="select * from wallpaper,category where w_id=$id and w_cat=c_id";
$cat="";
$res=mysqli_query($con,$q);
	
	while($imgrow=mysqli_fetch_assoc($res))
	{
		//var_dump($imgrow);
		$cat=$imgrow['w_cat'];

				echo '<div id="content">
					<div class="listname">
						<img src="image/list.png" class="listimg"/>
							<h3>'. $imgrow['w_imgnm'].'</h3>
					</div>';
		
	
	
	
		

		echo '		<table  width="100%">
				<tr valign="top">
					<td width="340">
						<img src="wallpapers/'.$imgrow['w_img'].'" class="dimg"/>
						
						<td>
							<table class="widesc">
								<tr>
									<td><b>Wallpaper :</b></td>
									<td>'. $imgrow['w_imgnm'].'</td>
								</tr>
								
								<tr>
									<td><b>Categories :</b></td>
									<td>'.$imgrow['c_name'].'</td>
								</tr>
								<tr>
									<td><b>Downloads :</b></td>
									<td>'.$imgrow['w_download'].'</td>
								</tr>
								
								<tr>
									<td><b>Size :</b></td>
									<td>'.round((filesize("wallpapers/".$imgrow['w_img'])/1024),2).' KB</td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="dlink">
											<a href="download.php?id='.$imgrow['w_id'].'&img='.$imgrow['w_img'].'">Download</a>
										</div>
									</td>
								</tr>
								
							</table>
						</td>
					</td>
				</tr>
				
			</table>
	';
	
					/*echo '<div class="nplink">
						<img src="image/previous.png" class="imgprevious"/>
							<div class="wallview"><b>Views : '.$imgrow['w_view'].'</b></div>
						<img src="image/next.png" class="imgnext"/>
					</div>';*/
	$qs="select * from wallpaper where w_id>$id and w_cat=".$imgrow['w_cat']." order by w_id LIMIT 0,1";

	$nxtres=mysqli_query($con,$qs);
	$nxtrow=mysqli_fetch_assoc($nxtres);
					
	
	$qprevios="select * from wallpaper where w_id<$id and w_cat=".$imgrow['w_cat']." order by w_id desc LIMIT 0,1";

	$preres=mysqli_query($con,$qprevios);
	$prerow=mysqli_fetch_assoc($preres);
	
						echo '<div class="npwrap">';
		
			if(!empty($prerow['w_id']))
			{
						echo'<div class="previous">
							<a href="list.php?id='.$prerow['w_id'].'"><img src="image/previous.png" class="pimg"/></a>
						</div>';
					
			}	
						echo '<div class="centerwrite">
							<span>Views :'.$imgrow['w_view'].'</span>
						</div>';
						
			if(!empty($nxtrow['w_id']))
			{
					
						echo '<div class="next">
							<a href="list.php?id='.$nxtrow['w_id'].'"><img src="image/next.png" class="nimg"/></a>
						</div>';
			}
					echo '</div>';
											
					
					
					echo '<div class="resolutionwrap">
					<div class="tagwrap">
						<span class="lbls">
								Tags
								<span class="tagdots">:</span>
								
						</span>';
						
							$a[] = array();
							$a = explode(" ",$imgrow['w_tag']);
							
							
							foreach($a as $val)
							{
								echo '<span class="tagsshow">
										<ul>
											<li>'.$val.'</li>
										</ul>
								     </span>';
							}
								echo '<div style="clear:both;"></div>';
					echo '</div>
					<div style="clear:both;"></div>
					<div class="resolwrap">
					
						<span class="lbls">
							Resoulations
								<span class="dots">:</span>
						</span>
						<span class="distype">
							<ul>
								<li><a href="download.php?id='.$imgrow['w_id'].'&img='.$imgrow['w_img'].'&height=640&width=480">640 X 480</a></li>
								
								<li><a href="download.php?id='.$imgrow['w_id'].'&img='.$imgrow['w_img'].'&height=1350&width=480">1350 X 480</a></li>

								<li><a href="download.php?id='.$imgrow['w_id'].'&img='.$imgrow['w_img'].'&height=1300&width=480">1300 X 480</a></li>
								
								<li><a href="download.php?id='.$imgrow['w_id'].'&img='.$imgrow['w_img'].'&height=1200&width=480">1200 X 480</a></li>
								
								<li><a href="download.php?id='.$imgrow['w_id'].'&img='.$imgrow['w_img'].'&height=400&width=500">400 X 500</a></li>
								
								<li><a href="download.php?id='.$imgrow['w_id'].'&img='.$imgrow['w_img'].'&height=1000&width=480">1000 X 480</a></li>
								
								<li><a href="download.php?id='.$imgrow['w_id'].'&img='.$imgrow['w_img'].'&height=640&width=500">640 X 500</a></li>
								
								<li><a href="download.php?id='.$imgrow['w_id'].'&img='.$imgrow['w_img'].'&height=360&width=240">360 X 240</a></li>
							</ul>
						</span>
						<div style="clear:both;"></div>
					</div>
				</div>';
					
}
	?>				
					
				<div style="clear:both;"></div>
					
					<div class="relatedbox">
						<div class="listname">
							<img src="image/list.png" class="listimg"/>
							<h3>Related Wallpapers</h3>
					</div>
			
			
			
			<table border="0" width="100%">
			<?php

			/*$q="select * from wallpaper,category where c_id=$cat and rand('c_id=w_cat') order by w_view limit 0,4";*/
			
			$q="select * from wallpaper,category where c_id=$cat and w_cat=$cat  order by w_view limit 0,4";
			

			$res=mysqli_query($con,$q)or die(mysqli_error());
			
			
				$c=0;
				while($row=mysqli_fetch_assoc($res))
				{
					if($c%2==0)
					{
						echo '<tr>';
					}
					?>
							<td>
								<div class="imgbox">
									<a href="list.php?id=<?php echo $row['w_id']; ?>"><img src="wallpapers/<?php echo $row['w_img']; ?>" class="imgboximg"/></a>
									
										<span><?php echo $row['w_imgnm']; ?></span>
										
										<div class="imginfo">
										
											<div class="viewh">
												<a href="list.php?id=<?php echo $row['w_id']; ?>">view</a>
											</div>
												
											<div class="downloadh">
												<a href="download.php?id=<?php echo $row['w_id']."&img=".$row['w_img']; ?>">Download</a>
											</div>
										</div>								
									</div>
							</td>
					<?php
					$c++;
					if($c==2)
					{
							$c=0;
						echo '</tr>';
					}
				}
			?>
			</table>
			

			
			
					</div>
				
				</div>
<?php include("include/footer.php");?>