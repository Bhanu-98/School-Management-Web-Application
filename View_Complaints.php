<?php
	include"database.php";
	session_start();
	if(!isset($_SESSION["TID"]))
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
			
			<img src="img/exam.jpg" style="margin-left:170px;" class="sha">
			
			<div id="section">
				
					<?php include"sidebar.php";?><br><br><br>
					
					<h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>
					
				<div class="content">
					
						<h3 >Student Complaints</h3><br>
						
						<table border="1px">
							<tr>
							<th>S.No</th>
								<th>ID</th>
								<th>Student Name</th>
								<th>Complaint</th>
								<th> </th>
							</tr>
							<?php
								$s="select * from complaints_to_teacher";
								$res=$db->query($s);
								if(($res->num_rows)>0)
								{
									$i=0;
									while($r=$res->fetch_assoc())
									{
										$i++;
										echo "
											<tr>
												<td>{$i}</td>
												<td>{$r["ID"]}</td>
												<td>{$r["Student_Name"]}</td>
												<td>{$r["complaint"]}</td>
												<td><a href='delete_tcomplaint.php?id={$r["complaint"]}' class='btnr'>Delete</a></td>
												</tr>
										
										
										
										";
										
									}
								}
								else
								{
									echo "No Complaints";
								}
							
							
							
							?>
						
						
						
						
						
						
						
						
						
						</table>
				
				</div>
				
				
			</div>
	
			<?php include"footer.php";?><br>	 
	</body>
</html>