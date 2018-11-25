<?php
	include("dbs.php");
	session_start();
	
	if(!isset($_SESSION["TID"]))
	{
		echo"<script>window.open('index.php?mes=Access Denied...','_self');</script>";
		
	}	
?>
<head>
		<title>VSR Model School</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<?php
include"navbar.php";
include"sidebar.php";

  ?>
<div class="panel panel-heading">

    
	<div class="panel panel-heading">
	<br>
	<br>
	<h3>
	<a class="btnb btn-info pull-right" href="atnd.php"> Back </a>
    </h3>
	

    <div class="panel panel-body">
	
	
	<table class="table table-striped">
	<tr>
	<th>Serial Number</th>	<th>Dates</th><th>Show Attendance</th>

	</tr>
	
	
	<?php $result=mysqli_query($con,"select distinct date from attendance_records");
    $serialnumber=0;
	while($row=mysqli_fetch_array($result))
	{
	$serialnumber++;
	

	?>
	
	<tr>
	<td> <?php echo $serialnumber; ?>  </td>
	<td> <?php echo $row['date']; ?>  
	</td>
	<td>
	<form action="show_attendance.php" method="POST">
	
	<input type="hidden" value="<?php echo $row['date'] ?>" name="date">
	<input type="submit" value="Show Attendance" class="btnb btn-primary">
	 
	
	</form>
	
	
	</td>
	
	</tr>

	<?php 
	}
	?>
	


    </table>

	
	
	
	</form>


    </div>	
	
	
	</div>
	
<?php include"footer.php";?><br>


</div>