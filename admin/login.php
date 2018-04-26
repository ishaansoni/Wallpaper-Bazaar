<?php session_start();?>
<html>
	<head>
		<style type="text/css">
			body{
				background:#F9EBAE;
			}
			#login{
				width:350px;
				border:2px solid #c2c2c2;
				box-shadow:0 0 20px #887e42;
				margin:0px auto;
				height:0px auto;
				margin-top:150px;
				text-align:center;
				font-family:calibri;
				background:#f1f1f1;
				 
				-webkit-animation: mymove 3s; 
				-moz-animation: abc 3s; 
			}
			
			@-webkit-keyframes mymove {
					0% {
					-webkit-transform: rotate(360deg) ;
					}
			}
			@-moz-keyframes abc {
					0% {
					-moz-transform: scale(0) rotateX(360deg) rotate(300deg) ;
					}
			}
			
				
			#login h2{
				background:#AD462E;
				color:white;
				margin:0;
				padding:6px 10px;
				font-size:22px;
				margin-bottom:20px;
				margin-top:0px;
				-webkit-animation: mymove 2s; 
			}
			@-webkit-keyframes mymove {
0% {

-webkit-transform: scale(0);
}
			}		
			
			.lunm{
					padding:5px;
					height:40px;
					width:250px;
					font-size:22px;
					border-radius:5px;
					margin-bottom:10px;
					margin-top:10px;
			}
			.lbtn{
					padding:4px;
					width:100px;
					border-radius:5px;
					border:1px solid black;
					margin-top:10px;
					margin-bottom:10px;
					font-size:20px;
			}
			form{
					margin:0 auto;
				
			}
			.user{
				background:url(img/user.png) no-repeat;
				background-size:30px;
				padding-left:35px;
			
			}
			.users{
				background:url(img/lock.png) no-repeat;
				background-size:25px;
				padding-left:35px;
				
			}
			
			.lbtn:hover{
				background:-webkit-linear-gradient(#7be675,#10820a);
				background:-moz-linear-gradient(#7be675,#10820a);
				background:-o-linear-gradient(#7be675,#10820a);
				color:white;
				border:1px solid white;
			}
		</style>
	</head>
	
	<body>
		<div id="login">
				<form action="login_process.php" method="post">
					<h2>Log In</h2>
					
					<?php
						if(!empty($_SESSION['error']))
						{
							foreach($_SESSION['error'] as $er)
							{
								echo '<font color="red">'.$er.'<font><br/>';
							}
							unset($_SESSION['error']);
						}
											
					?>
					<input type="text" name="unm" placeholder="username" class="lunm user"/><br/>
					<input type="password" name="pwd" placeholder="password" class="lunm users"/><br/>
					
					<input type="submit" name="login" value="Login" class="lbtn"/>
				</form>
		</div>
		
	</body>
</html>