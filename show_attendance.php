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


<div class="panel panel-default">

    
	<div class="panel panel-heading">
	<br>
	<br>
	<h3>

	<a class="btnb btn-info pull-right" href="view_all.php"> Back </a>
    </h3>
	

    <div class="panel panel-body">
	
	<form action="atnd.php" method="Post">
	
	<table class="table table-striped">
	<tr>
	<th>#serial Number</th><th>Student Name</th><th>Roll Number</th><th> Attendence Status </th>
	</tr>
	
	
	<?php 
	$result=mysqli_query($con,"select * from attendance_records where date='$_POST[date]'");
    $serialnumber=0;
	$counter=0;
	while($row=mysqli_fetch_array($result))
	{
	$serialnumber++;
	

	?>
	
	<tr>
	<td> <?php echo $serialnumber; ?>  </td>
	<td> <?php echo $row['student_name']; ?>  	<input type="hidden" value="<?php echo $row['student_name']; ?>" name="student_name[]">
 
	</td>
    <td> <?php echo $row['roll_number']; ?> 
	<input type="hidden" value="<?php echo $row['roll_number']; ?>" name="roll_number[]">
	
	<input type="hidden" value="<?php echo $row['date']; ?>" name="date[]">

	</td>
	<td> 
	<input type="radio" name="attendence_status[<?php echo $counter; ?>]" 
	<?php if($row['attendence_status']=="Present")
        echo "checked=checked";
		?>
	value="Present" >Present
	<input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="Absent"
	
	<?php if($row['attendence_status']=="Absent")
        echo "checked=checked";
		?>
	>Absent


	</td>
	</tr>

	<?php 
	$counter++;
	}
	?>
	


    </table>

    <input type="submit" name="update" value="update" class="btn btn-primary">	
	
	
	
	</form>


    </div>	
	
	
	</div>
	
<?php include"footer.php";?><br>


</div>