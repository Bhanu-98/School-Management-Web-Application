<?php
	include "database.php";
	session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Vsr Model School</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body class="back">
		<img src="img/banner.jpg" width="800">
		
		<div class="login">
			<h1 class="heading">VSR MODEL SCHOOl</h1>
			<div class="log">
			<center><form>
<input style="width: 120px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #008000	; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%;" type="button" value="Admin" onclick="window.location.href='admin_login.php'" />
</form></center>
<center>
<br>
<form>
<input style="width: 120px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #008000	; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%;" type="button" value="Teacher" onclick="window.location.href='teacher_login.php'" />
</form></center>
<center>
<br>
<form>
<input style="width: 120px; padding: 10px; cursor: pointer; box-shadow: 6px 6px 5px; #999; -webkit-box-shadow: 6px 6px 5px #999; -moz-box-shadow: 6px 6px 5px #999; font-weight: bold; background: #008000	; color: #000; border-radius: 10px; border: 1px solid #999; font-size: 150%;" type="button" value="student" onclick="window.location.href='student_login.php'" />
</form></center>


			</div>
		</div>		
	
		<?php include"footer.php";?><br>
	</body>
</html>