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
					
						<h3 > Add Student for bus facility</h3><br><br>
						
					<?php
						if(isset($_POST["submit"]))
						{
							$sq="update student set bus='Yes' where RNO='{$_POST["rno"]}'";
							if($db->query($sq))
							{
								echo "<div class='success'>student added.</div>";
							}
							else
							{
								echo "<div class='error'>failed..</div>";
							}
							
						}
						
					?>
					<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
					     <label>Student Roll Number</label><br>
					     <input type="text" name="rno" required class="input">
					     <br><br>
					     <button type="submit" class="btn" name="submit">Add Student</button>
					</form>
				
				
				</div>
				
				
			</div>
	
			<?php include"footer.php";?><br>	 
	</body>
</html>