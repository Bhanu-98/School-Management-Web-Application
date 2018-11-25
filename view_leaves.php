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
			
			<img src="img/exam.jpg" style="margin-left:170px;" class="sha">
			
			<div id="section">
				
					<?php include"sidebar.php";?><br><br><br>
					
					<h3 class="text">Welcome <?php echo $_SESSION["ANAME"]; ?></h3><br><hr><br>
					
				<div class="content">
					
						<h3 >View Leave Requests</h3><br>
						
						<table border="1px">
							<tr>
							<th>S.No</th>
								<th>TID</th>
								<th>Teacher Name</th>
								<th>Reason</th>
								<th>Contact</th>
								<th>Date of Request</th>
								<th> </th>
								<th> </th>
							</tr>
							<?php
								$s="select * from leaves";
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
												<td>{$r["TID"]}</td>
												<td>{$r["Teacher_Name"]}</td>
												<td>{$r["Reason"]}</td>
												<td>{$r["Contact"]}</td>
												<td>{$r["Date_of_Request"]}</td>
												<td><a href='accept.php?id={$r["Date_of_Request"]}' class='btnb'>Accept</a></td>
												<td><a href='reject.php?id={$r["Date_of_Request"]}' class='btnr'>Reject</a></td>
											</tr>
										
										
										
										";
										
									}
								}
								else
								{
									echo "No Leave Requests";
								}
							
							
							
							?>
						
						
						
						
						
						
						
						
						
						</table>
				
				</div>
				
				
			</div>
	
			<?php include"footer.php";?><br>	 
	</body>
</html>