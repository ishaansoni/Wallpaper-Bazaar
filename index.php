<?php include("include/header.php");

$site_url='http://localhost/Amazingwall';

include("include/config.php");

$page_q="select count(*) \"total\"  from wallpaper order by w_id desc";

$page_res=mysqli_query($con,$page_q);

$page_row=mysqli_fetch_assoc($page_res);

$total_item= $page_row['total'];
$item=12;
$total_page=ceil($total_item/$item);

$cur_page=(isset($_GET['page']))? $_GET['page']:1;

$k=($cur_page-1)*$item;


$q="select * from wallpaper order by w_id desc LIMIT $k,$item";

$res=mysqli_query($con,$q);

$q="select * from wallpaper";
$cat="";
$r_res=mysqli_query($con,$q);
	
	while($imgrow=mysqli_fetch_assoc($r_res))
	
	{
		$cat=$imgrow['w_cat'];
		$id=$imgrow['w_id'];
		$img=$imgrow['w_img'];
		
	}



?>
				<div id="content">
					<div class="listname">
						<img src="image/list.png" class="listimg"/>
							<h3><!--<?php echo substr($page,0,strrpos($page,".")); ?>-->Home</h3>
					</div>
			<table border="0" width="100%">
					
			<?php
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
							
			<div style="clear:both;"></div>
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
			
			
				<center>
		<div class="paginationwrap">
			<?php
	
				if($cur_page>1)
					echo '<div class="previouspage"><a href="index.php?page='.($cur_page-1).'">Previous</a></div>';
				
				if($cur_page>3)
				{
					//$a="...";
					$s=$cur_page-2;
				}
				else
					$s=1;
					
				if($cur_page<$total_page-2)
				{
					$e=$cur_page+2;
					
				}
				else
					$e=$total_page;
				
				//echo $a;
				echo '<div class="pagenumber">';
				for($i=$s;$i<=$e;$i++)
				{
					echo '<a style="text-decoration:none; word-spacing:5px;" href="index.php?page='.$i.'">'." ".$i." ".'</a>';
				}
				
				echo '</div>';
				
				if($cur_page<$total_page)
					echo '<div class="nextpage"><a href="index.php?page='.($cur_page+1).'">Next</a></div>';
				
				/*echo '<form action="index.php">';
				
					echo '<select name="page">';
						
						for($i=1;$i<=$total_page;$i++)
						{
							echo '<option>'.$i.'</option>';
						}
					echo '</select>';

					echo '<input type="submit" value="GO"/>';
				
				echo '</form>'*/
			?>
			<div style="clear:both;"></div>
			</div>
		</center>
	
			
			
				</div>
<?php include("include/footer.php");?>
