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
   $flag=0;
   $update=0;
   if(isset($_POST['update'])){
	
		 foreach($_POST['attendence_status'] as $id=>$attendence_status)
		   {
			$date=$_POST['date'][$id];
   
			$student_name=$_POST['student_name'][$id];
			$roll_number=$_POST['roll_number'][$id];
			
			$result=mysqli_query($con,"update attendance_records set student_name='$student_name',roll_number='$roll_number',attendence_status='$attendence_status',date='$date'
			where date='$date' and  roll_number='$roll_number';
			
			");
			if($result)
			{
			$update=1;	
			}	
					
			   
		   }   
	   
	   
   }
   if(isset($_POST['submit']))
   {
	   $date=date("Y-m-d");
	   

	   $records=mysqli_query($con,"select * from attendance_records where date='$date'");;
	   $num=mysqli_num_rows($records);
	   
	   if($num)
	   {
		 
        		 
	   }
	   else
	   {	   
		   foreach($_POST['attendence_status'] as $id=>$attendence_status)
		   {
			$NAME=$_POST['NAME'][$id];
			$RNO=$_POST['RNO'][$id];
			
			
			$result=mysqli_query($con,"insert into attendance_records(student_name,roll_number,attendence_status,date)values('$NAME','$RNO','$attendence_status','$date')");
			if($result)
			{
			$flag=1;	
			}	
					
			   
		   }
	   }
   }	   
?>


<div class="panel panel-heading">

    
	<div class="panel panel-heading">
	<h3>
<br>
<br>
 
	<a class="btnb btn-info pull-right" href="view_all.php"> View Attendance</a>
    </h3>
	<?php if($flag){ ?>
	<div class="alert alert-success"><br><br>
	Attendence Date Insert Successfully
	</div>
	<?php } ?>
	
	<?php if($update){ ?>
	<div class="alert alert-success"><br><br>
	Student Attendance updated successfully.

	</div>
	<?php } ?>
	<br>
	<br>
	<H3><div class="">Date:<?php echo date("Y-m-d"); ?>  </div></H3>

    <div class="panel panel-body">
	
	<form action="atnd.php" method="Post">
	
	<table class="table table-striped">
	<tr>
	<th>#serial Number</th><th>Student Name</th><th>Roll Number</th><th> Attendance Status </th>
	</tr>
	
	
	<?php
    $date=date("Y-m-d");
	$result=mysqli_query($con,"SELECT student.NAME,student.RNO,attendance_records.attendence_status FROM student LEFT JOIN attendance_records ON student.RNO = attendance_records.roll_number and date='$date' where TID={$_SESSION["TID"]}");
	$serialnumber=0;
	$counter=0;
	while($row=mysqli_fetch_array($result))
	{
	$serialnumber++;
	

	?>
	
	<tr>
	<td> <?php echo $serialnumber; ?>  </td>
	<td> <?php echo $row['NAME']; ?>  
	<input type="hidden" value="<?php echo $row['NAME']; ?>" name="NAME[]">
	</td>
    <td> <?php echo $row['RNO']; ?>  
	<input type="hidden" value="<?php echo $row['RNO']; ?>" name="RNO[]">

	</td>
	<td>


	<input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="Present"
    <?php if($row['attendence_status']=="Present"){ 	
    echo "checked=checked";
	}
    ?>
	required >Present
	<input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="Absent" 
	<?php if($row['attendence_status']=="Absent"){ 	
    echo "checked=checked";
	}
    ?>
	required>Absent
	

	</td>
</tr>

	<?php 
	$counter++;
	}
	?>
	


    </table>
<br>
    <input type="submit" name="submit" value="submit" class="btn btn-primary">	
	
	
	
	</form>


    </div>	
	</div>
	<?php include"footer.php";?>
</div>