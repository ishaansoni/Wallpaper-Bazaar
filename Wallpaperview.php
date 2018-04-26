<?php include("include/header.php");

include("include/config.php");

$id=$_GET['id'];

$page_q="select count(*) \"total\" from wallpaper where w_cat=$id";

$page_res=mysqli_query($con,$page_q);

$page_row=mysqli_fetch_assoc($page_res);

$total_item= $page_row['total'];
$item=12;
$total_page=ceil($total_item/$item);
$cur_page=(isset($_GET['page']))? $_GET['page']:1;

$k=($cur_page-1)*$item;


$q="select * from wallpaper where w_cat=$id LIMIT $k,$item";

$res=mysqli_query($con,$q);

						

?>
				<div id="content">
					<div class="listname">
						<img src="image/list.png" class="listimg"/>
							<h3><?php echo $_GET['cat']?></h3>
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
<?php include("include/footer.php");?>
