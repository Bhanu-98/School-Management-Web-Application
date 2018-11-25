<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["AID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
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
			<img src="img/exam.jpg" style="margin-left:150px;" class="sha">
			
			<div id="section">
				
				<?php include"sidebar.php";?><br><br><br>
				
				<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
				<div class="content1">
					
						<h3 > Add Admin</h3><br>
						
					<?php
					$i=3;
						if(isset($_POST["submit"]))
						{
							
							$sq="insert into admin(AID,ANAME,APASS) values('$i','{$_POST["sname"]}','vsr')";
							if($db->query($sq))
							{
								echo "<div class='success'>Admin is added with Username=Admin Name and password as default</div>";
								$i++;
							}
							else
							{
								echo "<div class='error'>Insert Failed..</div>";
							}
							
						}
						
					?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					     <label>Admin Name</label><br>
					     <input type="text" name="sname" required class="input">
					     <br><br>
					     <button type="submit" class="btn" name="submit">Add Admin</button>
					</form>
				
				
				</div>
				
				
			</div>
	
			<?php include"footer.php";?><br>	 
	</body>
</html>