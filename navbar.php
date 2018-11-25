<div class="navbar">

			<ul class="list">
				<b style="color:white;
				float:left;
				line-height:50px;
				margin-left:20px;
				font-family:Cooper Black;">
				 VSR Model School</b>
			<?php
				if(isset($_SESSION["AID"]))
				{
					echo'
				
						<li><a href="admin_home.php">Admin Home</a></li>
				<li><a href="change_pass.php">Change Password</a></li>
				<li><a href="add_admin.php">Add Admin</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
				elseif(isset($_SESSION["TID"]))
				{
					echo'
				
						<li><a href="teacher_home.php">Teacher Home</a></li>
				<li><a href="teacher_change_pass.php">Change Password</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
				elseif(isset($_SESSION["ID"]))
				{
					echo'
				
						<li><a href="student_home.php"> Student Home</a></li>
				<li><a href="student_change_pass.php">Change Password</a></li>
				<li><a href="contact.php">contact</a></li>
				<li><a href="logout.php">Logout</a></li>
					';
				}
				else
				{
					echo'<li><a href="index.php"><button class="btnb">Back to Login </button></a></li>';
				}
			?>
				
			</ul>
		</div>
		