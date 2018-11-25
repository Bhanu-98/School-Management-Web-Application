<?php 
	include"database.php";
	
	$sql="SELECT * FROM appointments ";
	$res=$db->query($sql);
		echo "<table border='1px' class='table'>
				<tr>
					<th>S.No</th>
					<th>ID</th>
					<th>Name</th>
					<th>Class</th>
					<th>Section</th>
					<th>Delete</th>
				</tr>
				";
	if($res->num_rows>0)
		
	{
		$i=0;
		while($row=$res->fetch_assoc())
		{
			$i++;
			echo "<tr>
				<td>{$i}</td>
				<td>{$row["ID"]}</td>
				<td>{$row["NAME"]}</td>
				<td>{$row["SCLASS"]}</td>
				<td>{$row["SSEC"]}</td>
				
				<td><a href='stud_delete.php?id={$row["ID"]}' class='btnr'>Delete</a></td>
				</tr>
			";
		}
				echo "</table>";
	}
		
	else
	{
		echo "<p>No Record Found</p>";
	}
	
?>