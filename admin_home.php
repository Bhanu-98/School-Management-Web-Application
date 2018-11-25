<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied..','_self');</script>";
		
	}		
?>

<!DOCTYPE html>
<html>
	<head>
		<title>VSR Model School</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
	
		 
		<?php include"navbar.php";?><br>
		
		<img src="img/exam.jpg" style="margin-left:180px;" class="sha">
			
			<div id="section">
			
				<?php include"sidebar.php";?><br>
				
				<div class="content">
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
						<h3 > School Information</h3><br>
					<img src="img/home.jpg" class="imgs">
					<p class="para">
						As a parent, one of the many important decisions that you need to make revolves around your child’s education. Providing the right start at the right time and under the right guidance will help to develop the child’s personality and will be the key to success in his/her career path.
					</p>
					
					<p class="para">
						VSR Model School is one such pioneer in the field of education – that brings in a fresh and unique approach to schooling with the belief that education today, must serve the interests of the individual, nation and mankind. High academic standards are symbolic of our ideology and commitment to academic excellence.
					</p> 
				</div>
				
			</div>
	
		 <?php include"footer.php";?><br>
	</body>
</html>