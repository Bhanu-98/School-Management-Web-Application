<?php
	include "database.php";
	session_start();
	$s="delete from complaints_to_teacher where complaint='{$_GET["id"]}'";
	$db->query($s);
	echo "<script>window.open('View_Complaints.php?mes=Complaint Deleted..','_self');</script>";
?>