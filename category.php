<?php include("include/header.php");?>

<?php @session_start();?>
<!-- Container -->
<div id="container">

	


	<div class="shell">
					
				<!-- Box -->
				<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2>Add Category</h2>
					</div>
					<!-- End Box Head -->
					
					<form action="category-process.php" method="post">
					
					<?php
							
							if(isset($_SESSION['done']))
							{
								echo '<div class="msg msg-ok">
										<p><strong>'.$_SESSION['done'].'</strong></p>
											</div>';
								unset($_SESSION['done']);
							}
							elseif(!empty($_SESSION['error']))
							{
								foreach($_SESSION['error'] as $er)
								{
									echo '<div class="msg msg-error">
											<p><strong>'.$er.'</strong></p>
										</div>';
								}
								unset($_SESSION['error']);
							}
						
					?>
					
					
					
						
					
	
						<!-- Form -->
						<div class="form">
								<p>
									<span class="req">max 100 symbols</span>
									<label>Category Name<span>(Required Field)</span></label>
									<input type="text" class="field size1" name="cat" />
								</p>	
								
								<input type="submit" value="Add Category" class="btn"/>
								
						</div>
						<!-- End Form -->
						
					</form>
				</div>
				<!-- End Box -->

	
		
			
			<!-- Content -->
		<div id="content">
			<div class="box">
					<!-- Box Head -->
					<div class="box-head">
						<h2 class="left">Category List</h2>
					</div>
					<!-- End Box Head -->	

					<!-- Table -->
					
					<?php
	include("../include/config.php");

	if(isset($_POST['save']))
	{
		$nm=$_POST['c'];
		$id=$_POST['id'];
		
		$q="update category
			set cat_name='$nm'
			where c_id=$id";
			
		mysqli_query($con,$q);
		
		
	}
	else if(isset($_POST['delete']))
	{
		$id=$_POST['id'];
		
		$q="delete from category
			where c_id=$id";
			
		mysqli_query($con,$q);	
		
			}
	
	
?>

					
		<div class="tables">
			<table border="1" width="100%" align="center" cellpadding="0" cellspacing="0" style="font-size:15px;">
			<th class="ac" width="10%">No</th>
			<th class="ac" width="50%">Name</th>
			<th class="ac" width="30%">Action</th>
			
			
			<?php
				
				
				$q="select * from category";
				
				$res=mysqli_query($con,$q);
				
				while($row=mysqli_fetch_assoc($res))
				{
					echo '<form action="category.php" method="post">';
					echo '<tr align="center" class="odd" class="tabmemo">';
						
					echo '<td>'.$row['c_id'].'</td>';
					
					if(isset($_POST['edit']) && $_POST['id']==$row['c_id'])
					{
						echo '<td><input type="text" name="nm" value="'.$row['c_name'].'" />';
					}
					else
					{
							echo '<td>'.$row['c_name'].'</td>';
					}
							
					echo '<input type="hidden" name="id" value="'.$row['c_id'].'" />';
					
					if(isset($_POST['edit']) && $_POST['id']==$row['c_id'])
					{
						echo '<td><input type="submit" value="Save" name="save" class="tabedits"/>';
					}
					else
					{
						echo '<td><input type="submit" value="Edit" name="edit" class="tabedit"/>';
					}
					
					echo '<input type="submit" value="Delete" name="delete" class="tabdel"/>';
					
					echo '</tr>';
					echo '</form>';
				}
			?>
				
		</table>


					</div>
				</div>
			</div>
		</div>
		
	</div>
						
			
						
						
			<div class="cl">&nbsp;</div>			
		</div>
		<!-- Main -->
	</div>
</div>
<!-- End Container -->



<?php include("include/footer.php");?>
	
</body>
</html>