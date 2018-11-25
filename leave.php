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
			<div id="section">
				<?php include"sidebar.php";?><br><br><br>
				<h3 class="text">Welcome <?php echo $_SESSION["TNAME"]; ?></h3><br><hr><br>
				<div class="content">
					
						<h3 >Request for leave</h3><br>
					<?php
						if(isset($_POST["submit"]))
						{
							$edate=$_POST["da"].'-'.$_POST["mo"].'-'.$_POST["ye"];
							    $s="insert into leaves(TID,Teacher_Name,Date_of_Request,Reason,Contact) values('{$_SESSION["TID"]}','{$_SESSION["TNAME"]}','{$edate}','{$_POST["rsn"]}','{$_POST["pho"]}')";
								$sq="insert into leave_requests(TID,Teacher_Name,Date_of_Request,Reason,Contact,status) values('{$_SESSION["TID"]}','{$_SESSION["TNAME"]}','{$edate}','{$_POST["rsn"]}','{$_POST["pho"]}','NA')";
								$db->query($s);
								if($db->query($sq))
								{
									echo "<div class='success'>Leave Request added</div>";
								}
								else
								{
									echo "<div class='error'>Oops! something went wrong</div>";
								}

							
						}
					
					?>
			
				<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER["PHP_SELF"];?>">
				<div class="lbox">
				<label> Reason</label><br>
					<input type="text" class="input3" name="rsn" required class="input"><br><br>						
					<label>  Date of Leave</label><br>
					<select name="da" class="input5" required class="input">
						<option value="">Date</option>
						<option value="1">1 </option>
						<option value="2">2 </option>
						<option value="3">3 </option>
						<option value="4">4 </option>
						<option value="5">5 </option>
						<option value="6">6 </option>
						<option value="7">7 </option>
						<option value="8">8 </option>
						<option value="9">9 </option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
						</select>
					<select name="mo" class="input5" required class="input">
						<option> Month</option>
						<option value="01">Jan</option>
						<option value="02">Feb</option>
						<option value="03">Mar</option>
						<option value="04">Apr</option>
						<option value="05">May</option>
						<option value="06">Jun</option>
						<option value="07">Jul</option>
						<option value="08">Aug</option>
						<option value="09">Sep</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Dec</option>
					</select>
					<select name="ye" class="input5" required class="input">
						<option value="">Select Year</option>
						<option value="2018">2018</option>
						<option value="2019">2019</option>						
					</select><br><br>
			
					
					
					<label> contact number</label><br>
					<input type="text" class="input3" maxlength="10" name="pho" required class="input"><br><br>
				</div>
				
				
			
			<button type="submit" class="btn" name="submit">Request for leave</button>
					
				</form>
				
				
				</div>
				
				
			</div>
	
			<?php include"footer.php";?><br>	 
	</body>
</html>