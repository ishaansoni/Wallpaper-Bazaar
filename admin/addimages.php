<?php include("include/header.php");?>

<div id="container">

	<div class="shell">
					
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Add Wallpaper</h2>
					</div>
					<!-- End Box Head -->
					
					<form action="addiamges_process.php" method="post" enctype="multipart/form-data">
					
					<?php
				
						if(isset($_SESSION['done']))
						{
							echo '<font color="green">'.$_SESSION['done'].'</font>';
							unset($_SESSION['done']);
						}
						elseif(!empty($_SESSION['error']))
						{
							foreach($_SESSION['error'] as $er)
							{
								echo '<font color="red">'.$er.'</font>';
								
							}
							unset($_SESSION['error']);
						}
					?>
						<!-- Form -->
						<div class="form">
							<label>Image Name<span>(Required Field)</span></label>
									
							<input type="text" name="imgnm" class="field size1"/><br/>
							
							<label>Image Tags<span>(Required Field)</span></label>
									
							<input type="text" name="tags" class="field size1"/><br/>
							
							<label style="margin-top:10px;">Select Category<span>(Required Field)</span></label>
							
							<select class="field" name="cat">
							
							<?php
								include("../include/config.php");
								
								$q="select * from category";
								
								$res=mysqli_query($con,$q);
								
								while($row=mysqli_fetch_assoc($res))
								{
									echo '<option value="'.$row['c_id'].'">'.$row['c_name'].'</option>';
								}
							
							
							
							?>
								
							</select>
							
							<br/>
							<label style="margin-top:10px;">Add Image<span>(Required Field)</span></label>
							
							<input type="file" name="img[]" multiple="multiple"/>
							
							<br/><br/><br/>
							
							
							
							<input type="submit" value="Add image" class="tabedit" style="width:100px;"/>
						</div>
						<!-- End Form -->
						
					</form>
				</div>
				<!-- End Box -->
		</div>
	</div>

<?php include("include/footer.php");?>

