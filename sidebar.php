<div class="sidebar"><br>
<h3 class="text">Dashboard</h3><br><hr><br>
<ul class="s">
<?php
	if(isset($_SESSION["AID"]))
	{
		echo'
			<li class="li"><a href="admin_home.php">School Information</a></li>
			<li class="li"><a href="add_class.php"> Add Class</a></li>
			<li class="li"><a href="add_sub.php"> Add Subject</a></li>
			<li class="li"><a href="add_staff.php"> Add Staff</a></li>
			<li class="li"><a href="view_staff.php">View Staff</a></li>
			<li class="li"><a href="set_exam.php">Set Exam</a></li>
			<li class="li"><a href="view_exam.php">Exam Time Table</a></li>
			<li class="li"><a href="student.php"> View Student</a></li>
			<li class="li"><a href="index1.php">chat</a></li>
			<li class="li"><a href="Bus_Facilitiles.php"> Bus Facilities</a></li>
			<li class="li"><a href="Complaints.php"> View Complaints</a></li>
			<li class="li"><a href="view_leaves.php"> View Teacher leave requests</a></li>
			<li class="li"><a href="view_appointment.php">View Appointment</a></li>
			<li class="li"><a href="find_student.php">Find Student</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
		
		';
	
	
	}
	elseif(isset($_SESSION["ID"]))
	{
		echo'
		    <li class="li"><a href="view_exam_student.php">Exam Time Table</a></li>
			<li class="li"><a href="View_Attendance.php">View attendance</a></li>
			<li class="li"><a href="student_res.php">See results</a></li>
			<li class="li"><a href="fee_details.php">Fee Details</a></li>
			<li class="li"><a href="st_leave.php">Request for leave</a></li>
			<li class="li"><a href="index1.php">chat</a></li>
			<li class="li"><a href="pcomplain.php">Complain to principal</a></li>
			<li class="li"><a href="add_appointment.php">Request Principal Appointment</a></li>
			<li class="li"><a href="tcomplain.php">Complain to teacher</a></li>
			<li class="li"><a href="st_status.php">Check leave status</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>
		
		';
	
	
	}
	elseif(isset($_SESSION["TID"]))
	{
		echo'
		
			<li class="li"><a href="teacher_home.php">Profile</a></li>
			<li class="li"><a href="handle_class.php"> Handled Class</a></li>
			<li class="li"><a href="add_stud.php"> Add student</a></li>
			<li class="li"><a href="view_exam_staff.php">Exam Time Table</a></li>
			<li class="li"><a href="view_stud_teach.php"> View Student</a></li>
            <li class="li"><a href="atnd.php">Attendance</a></li>
			<li class="li"><a href="index1.php">chat</a></li>
			<li class="li"><a href="tech_view_exam.php">View Exam</a></li>
			<li class="li"><a href="add_mark.php">Add Marks</a></li>
			<li class="li"><a href="view_mark.php">View Marks</a></li>
			<li class="li"><a href="View_Complaints.php"> View Complaints</a></li>
			<li class="li"><a href="view_st_leaves.php"> View Student leave requests</a></li>
			<li class="li"><a href="leave.php">Request for leave</a></li>
			<li class="li"><a href="status.php">Check leave status</a></li>
			<li class="li"><a href="logout.php">Logout</a></li>

		
		';
	}


?>
	

</ul>

</div>