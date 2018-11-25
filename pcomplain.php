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
			<div id="section">
				<?php include"sidebar.php";?><br><br><br>
				<h3 class="text">Welcome <?php echo $_SESSION["NAME"]; ?></h3><br><hr><br>
				<div class="content">
					
						<h3 >Complain Principal</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
							 $sq="insert into complaints_to_principal(ID,Student_Name,complaint) values('{$_SESSION["ID"]}','{$_SESSION["NAME"]}','{$_POST["cmp"]}')";
								if($db->query($sq))
								{
									echo "<div class='success'>complaint added</div>";
								}
								else
								{
									echo "<div class='error'>Oops! something went wrong</div>";
								}

							
						}
					
					?>
			
				<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
	               <textarea name="cmp" cols="100" rows="20" style="font-family: Verdana; font-size: 14px; font-color: #000000; background-color: #FFFFFF; border: 1px solid #A1C4C4; padding: 2px;" required ></textarea>
				
				
			
			<button type="submit" class="btn" name="submit">Add Complaint</button>
					
				</form>
				
				
				</div>
				
				
			</div>
	
			<?php include"footer.php";?><br>	 
	</body>
</html>