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
			<img src="img/exam.jpg" style="margin-left:90px;" class="sha">
			
			<div id="section">
				
					<?php include"sidebar.php";?><br><br><br>
					
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
					
				<div class="content">
					
						<h3 >Students having bus facilities</h3><br>
								
						<?php
							if(isset($_GET["mes"]))
								{
									echo"<div class='error'>{$_GET["mes"]}</div>";	
								}
					
						?>
						
						<table border="1px">
							<tr>
								<th>S.No</th>
								<th>Roll Number</th>
								<th>Name</th>
							    <th>Address</th>
								<th>Class</th>
								<th>Section</th>
								<th> </th>
								<button class="btn"><a href="add_student_bus.php"> Add student</a></button>
							</tr>
							<?php
								$s="select * from student where bus='Yes'";
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
												<td>{$r["RNO"]}</td>
												<td>{$r["NAME"]}</td>
												<td>{$r["ADDR"]}</td>
												<td>{$r["SCLASS"]}</td>
												<td>{$r["SSEC"]}</td>
												<td><a href='bus_delete.php?id={$r["ID"]}' class='btnr'>Remove</a></td>
											</tr>
										
										
										
										";
										
									}
								}
								else
								{
									echo "No records";
								}
							
							
							
							?>
						
						
						
						
						
						
						
						
						
						</table>
				
				</div>
				
				
			</div>
	
		<?php include"footer.php";?><br>		 
	</body>
</html>