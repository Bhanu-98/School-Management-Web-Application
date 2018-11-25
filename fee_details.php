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
			<img src="img/exam.jpg" style="margin-left:90px;" class="sha">
			
			<div id="section">
				
					<?php include"sidebar.php";?><br><br><br>
					
					<h3 class="text">Welcome <?php echo $_SESSION["NAME"]; ?></h3><br><hr><br>
					
				<div class="content">
					
						<h3 >Fee Details (excluding bus fee)</h3><br>
								
						<?php
							if(isset($_GET["mes"]))
								{
									echo"<div class='error'>{$_GET["mes"]}</div>";	
								}
					
						?>
						
						<table border="3px">
							<tr>
								<th>S.No</th>
								<th>CLASS</th>
								<th>FEE</th>
							</tr>
							<?php
								$s="select * from fee";
								$res=$db->query($s);
								if($res->num_rows>0)
								{
									$i=0;
									while($r=$res->fetch_assoc())
									{
										$i++;
										echo "
											<tr>
												<td>{$i}</td>
												<td>{$r["class"]}</td>
												<td>{$r["fee"]}</td>
											</tr>
										
										
										
										";
										
									}
								}
								else
								{
									echo "No Details";
								}
							
							
							
							?>
						
						
						
						
						
						
						
						
						
						</table>
				
				</div>
				
				
			</div>
	
		<?php include"footer.php";?><br>		 
	</body>
</html>