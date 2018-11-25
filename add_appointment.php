<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["ID"]))
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
		<img src="img/exam.jpg" style="margin-left:150px;" class="sha">	<br><br>
			<div id="section">
			<?php include"sidebar.php";?><br><br><br>
			<?php
			?>
				<h3 class="text">Welcome <?php echo $_SESSION["NAME"]; ?></h3><br><hr><br>
				<div class="content">
				<h3 >Principal Appointment Request</h3><br>
					<form  method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
				      click the button below to request for principal's appointment<br>
					<button type="submit" class="btn" name="submit"> REQUEST PRINCIPAL APPOINTMENT</button>
				
						
					</form>
					<br>
					<div class="Output">
						<?php
							if(isset($_POST["submit"]))
						{
													
							$sql="insert into appointments(id,admin,student_name)values('{$_SESSION["ID"]}','sai','{$_SESSION["NAME"]}')";
							if($db->query($sql))
							{
								echo "<div class='success'>Principal Appointment Requested</div>";
							}
							else
							{
								echo "<div class='error'>Request Failed</div>";
							}
						}
						
						?>
					
					</div>
				</div>
				
				
			</div>
	
		<?php include"footer.php";?><br>		 
	</body>
	
</html>